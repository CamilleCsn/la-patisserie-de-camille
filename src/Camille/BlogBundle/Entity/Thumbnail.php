<?php

namespace Camille\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Thumbnail
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Camille\BlogBundle\Entity\ThumbnailRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Thumbnail
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="alt", type="string", length=255)
     */
    private $alt;

    private $file;

    private $tempFilename;


    public function getFile()
    {
        return $this->file;
    }

    public function setFile(UploadedFile $file)
    {
        $this->file = $file;

        // verifie si on a déjà un fichier pour cette entité
        if (null !== $this->url) {
            // sauvegarde l'extetion du fichier pour le supprimer après
            $this->tempFilename = $this->url;

            // réinitialise les valerus de url et alt
            $this->url = null;
            $this->alt = null;
        }
    }

    /**
        * @ORM\PrePersist()
        * @ORM\PreUpdate()
    */
    public function preUpload()
    {
        // Si jamais il n'y a pas de fichier (champ facultatif)
        if (null === $this->file) {
            return;
        }

        // Le nom du fichier est son id, on doit juste stocker également son extension
        $this->url = $this->file->guessExtension();

        // Et on génère l'attribut alt de la balise <img>, à la valeur du nom du fichier sur le PC de l'internaute
        $this->alt = $this->file->getClientOriginalName();
    }

    /**
       * @ORM\PostPersist()
       * @ORM\PostUpdate()
    */
    public function upload()
    {
        // si pas de fichier
        if (null === $this->file) {
            return;
        }

        // si ancien fichier, suppression
        if (null !== $this->tempFilename) {
            $oldFile = $this->getUploadRootDir().'/'.$this->id.'.'.$this->tempFilename;
            if (file_exists($oldFile)) {
                unlink($oldFile);
            }
        }

        // déplace le fichier envoyé dans le répertoire 
        $this->file->move(
            $this->getUploadRootDir(), // destination
            $this->id.'.'.$this->url   // nom du fichier à créer "id.extention"
        );
    }

    /**
    * @ORM\PreRemove()
    */
    public function preRemoveUpload()
    {
        // sauvegarde temporairement le nom du fichier, car il dépend de l'id
        $this->tempFilename = $this->getUploadRootDir().'/'.$this->id.'.'.$this->url;
    }

    /**
    * @ORM\PostRemove()
    */
    public function removeUpload()
    {
        // En PostRemove, on n'a pas accès à l'id, on utilise notre nom sauvegardé
        if (file_exists($this->tempFilename)) {
        // supprime le fichier
            unlink($this->tempFilename);
        }
    }

    public function getUploadDir()
    {
        // retourne le chemin relatif vers l'image
        return 'uploads/img';
    }

    protected function getUploadRootDir()
    {
        // retourne le chemin relatif vers l'image pour le code php
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }

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
     * Set url
     *
     * @param string $url
     *
     * @return Thumbnail
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set alt
     *
     * @param string $alt
     *
     * @return Thumbnail
     */
    public function setAlt($alt)
    {
        $this->alt = $alt;

        return $this;
    }

    /**
     * Get alt
     *
     * @return string
     */
    public function getAlt()
    {
        return $this->alt;
    }

    public function getWebPath()
    {
        return $this->getUploadDir().'/'.$this->getId().'.'.$this->getUrl();
    }
}

