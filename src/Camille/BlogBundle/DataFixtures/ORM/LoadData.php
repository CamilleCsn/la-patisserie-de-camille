<?php

namespace Camille\BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Camille\BlogBundle\Entity\Category;
use Camille\BlogBundle\Entity\Recipe;
use Camille\BlogBundle\Entity\Thumbnail;

class LoadData implements FixtureInterface
{
	public function load(ObjectManager $manager)
  {
    /// Liste des noms de catégorie à ajouter
    $categoryGateau = new Category('Gâteaux');
    $manager->persist($categoryGateau);
    $categoryBiscuit = new Category('Petits biscuits');
    $manager->persist($categoryBiscuit);
    $categoryTarte = new Category('Tartes');
    $manager->persist($categoryTarte);
    $categoryChocolat = new Category('Chocolat');
    $manager->persist($categoryChocolat);

    // On déclenche l'enregistrement de toutes les catégories
    $manager->flush();

    // On instancie notre recette
    $recipe = new Recipe();

    // On renseigne les données obligatoires
    $recipe->setTitle('Tartes au chocolat');
		$recipe->setAuthor('Sexy Pussy');
		$recipe->setContent('Des pates, des pates mais des panzzanis.');
		$recipe->addCategory($categoryGateau);
		$recipe->addCategory($categoryTarte);
		$recipe->addCategory($categoryChocolat);

  	//CREATION DE L'ENTITE THUMBNAIL
		$thumbnail = new Thumbnail();
		$thumbnail->setUrl('https://s-media-cache-ak0.pinimg.com/736x/ae/5c/82/ae5c825344d11ae757e0895331843981.jpg');
		$thumbnail->setAlt('Tarte aux pommes');
		$manager->persist($thumbnail);

		$recipe->setThumbnail($thumbnail);
		$manager->persist($recipe);

		// On instancie notre recette
    $recipe = new Recipe();

    // On renseigne les données obligatoires
    $recipe->setTitle('Praline aux chocolats');
		$recipe->setAuthor('Sexy Pussy');
		$recipe->setContent('Des pates, des pates mais des panzzanis.');
		$recipe->addCategory($categoryGateau);
		$recipe->addCategory($categoryChocolat);
		$manager->persist($recipe);

		// On instancie notre recette
    $recipe = new Recipe();

    // On renseigne les données obligatoires
    $recipe->setTitle('Tarte à la fraise');
		$recipe->setAuthor('Sexy Pussy');
		$recipe->setContent('Des pates, des pates mais des panzzanis.');
		$recipe->addCategory($categoryGateau);
		$manager->persist($recipe);

		// On déclenche l'enregistrement de notre recette
		$manager->flush();


  }
}