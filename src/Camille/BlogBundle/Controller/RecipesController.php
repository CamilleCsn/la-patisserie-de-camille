<?php 

// on se place dans le namespace des controleurs de notre bundle
namespace Camille\BlogBundle\Controller;

use Camille\BlogBundle\Entity\Recipe;
use Camille\BlogBundle\Form\RecipeType;
use Camille\BlogBundle\Form\RecipeEditType;
use Camille\BlogBundle\Entity\Thumbnail;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
// le controleur utilise l'objet Response, on le définit grâce à use
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;


// le nom de notre contrôleur respecte le nom de notre fichier pour que l'autoload fonctionne
// pour accéder aux méthodes de gestion des templates, on fait hériter notre controlleur du controlleur de base de Symfony qui apporte des méthodes utiles
class RecipesController extends Controller{

	/**
	* Liste l'ensemble des articles triés par date de publication pour une page donnée.
	*
	* @Route("/", name="camille_blog_home")
	* @Method("GET")
	* @Template("CamilleBlogBundle::index.html.twig")
	*
	* @param int $page Le numéro de la page
	*
	* @return array
	*/
	public function indexAction($page) {

		$nbRecipesParPage = $this->container->getParameter('front_nb_articles_par_page');    

		// pour récupérer la liste de toutes les annonces on utiliser findAll()
		$listRecipes = $this->getDoctrine()
			->getManager()
			->getRepository('CamilleBlogBundle:Recipe')
			->findAll()
		;

		$em = $this->getDoctrine()->getManager();

		$categoriesForRecipe = $em
			->getRepository('CamilleBlogBundle:Recipe')
			->getRecipeWithCategories(array('Chocolat'))
		;

		$recipes = $em->getRepository('CamilleBlogBundle:Recipe')
        ->findAllPagineEtTrie($page, $nbRecipesParPage);

    $pagination = array(
        'page' => $page,
        'nbPages' => ceil(count($recipes) / $nbRecipesParPage),
        'nomRoute' => 'camille_blog_home',
        'paramsRoute' => array()
    );

		return $this->render('CamilleBlogBundle:Recipes:index.html.twig', array(
			'listRecipes' => $listRecipes,
			'categoriesForRecipe' => $categoriesForRecipe,
			'recipes' => $recipes,
			'pagination' => $pagination
		));

	}


	// La route fait appel à CamilleBlogBungle:Recipes:view,
  	// on doit donc définir la méthode viewAction.
  	// On donne à cette méthode l'argument $id, pour
  	// correspondre au paramètre {id} de la route
  	// on inject la requête dans les arguments de la méthode
	public function viewAction(Recipe $recipe) {

		$listRecipes = $this->getDoctrine()
			->getManager()
			->getRepository('CamilleBlogBundle:Recipe')
			->findAll()
		;

		$landscapeImages = array_chunk($recipe->getImages()->filter(function($image) {
				return $image->getOrientation() === 'landscape';
		})->toArray(), 1);

		$portraitImages = array_chunk($recipe->getImages()->filter(function($image) {
				return $image->getOrientation() === 'portrait';
		})->toArray(), 2);

		return $this->render('CamilleBlogBundle:Recipes:view.html.twig',array(
			'listRecipes' => $listRecipes,
			'recipe' => $recipe,
			'landscapeImages' => $landscapeImages,
			'portraitImages' => $portraitImages,
			'imageLenght' => count($portraitImages) < count($landscapeImages) ? count($landscapeImages) : count($portraitImages)
		));
	}


	/**
   * @Security("has_role('ROLE_ADMIN')")
  */
	public function addAction(Request $request){

		// on créé l'objet recipe
		$recipe = new Recipe();

		// on utilise le composant form pour créer le formulaire à partir de RecipeType passé en argument
		$form = $this->createForm(new RecipeType(), $recipe);
		// ou $form = $this->createForm(new RecipeType(), $recipe);

		if ($form->handleRequest($request)->isValid()) {

			$em = $this->getDoctrine()->getManager();

			foreach ($recipe->getImages() as $key => $image) {
				$image->setRecipe($recipe);
				$em->persist($image);
			}
			
			$em->persist($recipe);
			$em->flush();

			$request->getSession()->getFlashBag()->add('notice', 'Recette bien enregistrée!');

			return $this->redirect($this->generateUrl('camille_blog_view', array('id' => $recipe->getId())));
		}

		$listRecipes = $this->getDoctrine()
			->getManager()
			->getRepository('CamilleBlogBundle:Recipe')
			->findAll()
		;

		// on passe la méthode createView() du formulaire à la vue afin qu'elle puisse afficher le formulaire toute seule
		return $this->render('CamilleBlogBundle:Recipes:add.html.twig', array(
			'listRecipes' => $listRecipes,
			'form' => $form->createView(),
		));
	}

	public function editAction($id, Request $request){

		$em = $this->getDoctrine()->getManager();

		//on récupére l'annonce $id
		$recipe = $em->getRepository('CamilleBlogBundle:Recipe')->find($id);

		if ($recipe === null){
			throw $this-> createNotFoundHttpException("L'annonce d'id ".$id." n'existe pas");
		}

		$form = $this->createForm(new RecipeEditType(), $recipe);

		if ($form->handleRequest($request)->isValid()) {
			$em->flush();

			$request->getSession()->getFlashBag()->add('notice', 'Recette bien modifée!');

			return $this->redirect($this->generateUrl('camille_blog_view', array('id' => $recipe->getId())));
		}


		return $this->render('CamilleBlogBundle:Recipes:edit.html.twig', array(
			'form' => $form->createView(),
			'recipe' => $recipe
		));
	}

	public function deleteAction($id, Request $request){

		$em = $this->getDoctrine()->getEntityManager();

		// recupere id de la recette
		$recipe = $em->getRepository('CamilleBlogBundle:Recipe')->find($id);

		if (null === $recipe) {
			throw new NotFoundHttpException("La recette d'id ".$id."n'existe pas");
		}

		// on créé un form vide qui ne contient que le champ CSRF pour pritéger la suppression d'annonce
		$form = $this->createFormBuilder()->getForm();

		if ($form->handleRequest($request)->isValid()) {
			$em->remove($recipe);
			$em->flush();

			$request->getSession()->getFlashBag()->add('notice', 'Recette correctement supprimée.');

			return $this->redirect($this->generateUrl('camille_blog_home'));
		}

		return $this->render('CamilleBlogBundle:Recipes:delete.html.twig', array(
			'recipe' => $recipe,
			'form' => $form->createView()
		));
	}

	public function menuAction() {
		$listRecipes = $this->getDoctrine()
			->getManager()
			->getRepository('CamilleBlogBundle:Recipe')
			->findBy(
					array(),
					array('date' => 'desc'),
					10,
					0
			);

		return $this->render('CamilleBlogBundle:Recipes:menu.html.twig', array(
			//le controlleur passe les variables nécessaires au template
			'listRecipes' => $listRecipes
		));

	}
	

}