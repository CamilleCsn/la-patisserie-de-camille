<?php

namespace Camille\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Recipe
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Camille\BlogBundle\Entity\RecipeRepository")
 */
class Recipe
{
    //RELATION MANYTOMANY
    /**
     * @ORM\ManyToMany(targetEntity="Camille\BlogBundle\Entity\Category", cascade={"persist"})
    */
    // contient une liste d'objet : ArrayCollection
    private $categories;

    //RELATION ONETOONE : RECIPE = ENTITE PROPRIETAIRE, recipe possède une thumbnail 
    /**
     * @ORM\OneToOne(targetEntity="Camille\BlogBundle\Entity\Thumbnail", cascade={"persist"})
    */
    private $thumbnail;

    /**
    * @ORM\OneToMany(targetEntity="Camille\BlogBundle\Entity\Image", cascade={"persist", "remove"}, mappedBy="recipe")
    */
    private $images;

    /**
    * @ORM\Column(name="published", type="boolean")
    */
    private $published = true;

    // Attributs par défaut
    public function __construct() {
        // par défaut, c'est la date d'aujourd'hui
        $this->date = new \DateTime();
        $this->images = new ArrayCollection();
        $this->categories = new ArrayCollection();
    }

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="author", type="string", length=255)
     */
    private $author;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text")
     */
    private $content;

    /**
     * @var string
     *
     * @ORM\Column(name="ingredients", type="text")
     */
    private $ingredients;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Recipe
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Recipe
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set author
     *
     * @param string $author
     *
     * @return Recipe
     */
    public function setAuthor($author)
    {
        $this->author = $author;
        return $this;
    }

    /**
     * Get author
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Recipe
     */
    public function setContent($content)
    {
        $this->content = $content;
        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }


    /**
     * Set published
     *
     * @param boolean $published
     *
     * @return Recipe
     */
    public function setPublished($published)
    {
        $this->published = $published;
        return $this;
    }

    /**
     * Get published
     *
     * @return boolean
     */
    public function getPublished()
    {
        return $this->published;
    }

    /**
     * Set thumbnail
     *
     * @param \Camille\BlogBundle\Entity\Thumbnail $thumbnail
     *
     * @return Recipe
     */
    public function setThumbnail(Thumbnail $thumbnail = null)
    {
        $this->thumbnail = $thumbnail;
    }

    /**
     * Get thumbnail
     *
     * @return \Camille\BlogBundle\Entity\Thumbnail
     */
    public function getThumbnail()
    {
        return $this->thumbnail;
    }

    /**
     * Add category
     *
     * @param \Camille\BlogBundle\Entity\Category $category
     *
     * @return Recipe
     */
    public function addCategory(Category $category)
    {
        $this->categories[] = $category;
        return $this;
    }

    /**
     * Remove category
     *
     * @param \Camille\BlogBundle\Entity\Category $category
     */
    public function removeCategory(Category $category)
    {
        $this->categories->removeElement($category);
    }

    /**
     * Get categories
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Add images
     *
     * @param \Camille\BlogBundle\Entity\Images $images
     *
     * @return Recipe
     */
    public function addImage(Image $image) {
        $this->images[] = $image;
        return $this;
    }

    public function removeImage(Image $image){
        $this->images-removeElement($image);
    }
 
    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getImages() {
        return $this->images;
    }


    /**
     * Set ingredients
     *
     * @param string $ingredients
     *
     * @return Recipe
     */
    public function setIngredients($ingredients)
    {
        $this->ingredients = $ingredients;

        return $this;
    }

    /**
     * Get ingredients
     *
     * @return string
     */
    public function getIngredients()
    {
        return $this->ingredients;
    }
}
