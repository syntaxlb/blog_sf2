<?php

namespace Syntax\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity as UniqueEntity;

/**
 * Syntax\BlogBundle\Entity\Article
 *
 * @ORM\Table(name="syntaxblog_article")
 * @ORM\Entity(repositoryClass="Syntax\BlogBundle\Entity\ArticleRepository")
 * 
 * @UniqueEntity(fields="titre", message="Un article existe déjà avec ce titre")
 */
class Article {

    public function __construct()
    {
        $this->date = new \DateTime;
        $this->tags = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var date $date
     *
     * @ORM\Column(name="date", type="date")
     * @Assert\DateTime()
     */
    private $date;

    /**
     * @var string $titre
     *
     * @ORM\Column(name="titre", type="string", length=255, unique=true)
     * @Assert\MinLength(limit=2, message="Le titre doit faire au minimum {{ limit }} caractères !")
     */
    private $titre;

    /**
     * @ORM\ManyToOne(targetEntity="Syntax\UserBundle\Entity\User", inversedBy="articles", cascade={"remove"})
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $auteur;

    /**
     * @var text $contenu
     *
     * @ORM\Column(name="contenu", type="text")
     * @Assert\NotBlank()
     */
    private $contenu;

    /**
     * @ORM\ManyToMany(targetEntity="Syntax\BlogBundle\Entity\Tag")
     * @Assert\Valid()
     */
    private $tags;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set date
     *
     * @param date $date
     */
    public function setDate($date) {
        $this->date = $date;
    }

    /**
     * Get date
     *
     * @return date 
     */
    public function getDate() {
        return $this->date;
    }

    /**
     * Set titre
     *
     * @param string $titre
     */
    public function setTitre($titre) {
        $this->titre = $titre;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre() {
        return $this->titre;
    }

    /**
     * Set contenu
     *
     * @param text $contenu
     */
    public function setContenu($contenu) {
        $this->contenu = $contenu;
    }

    /**
     * Get contenu
     *
     * @return text 
     */
    public function getContenu() {
        return $this->contenu;
    }

    /**
     * Add tags
     *
     * @param Syntax\BlogBundle\Entity\Tag $tags
     */
    public function addTag(\Syntax\BlogBundle\Entity\Tag $tags) {
        $this->tags[] = $tags;
    }

    /**
     * Get tags
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getTags() {
        return $this->tags;
    }

    
    /**
     * Set auteur
     *
     * @param Syntax\UserBundle\Entity\User $auteur
     */
    public function setAuteur(\Syntax\UserBundle\Entity\User $auteur)
    {
        $this->auteur = $auteur;
    }

    /**
     * Get auteur
     *
     * @return Syntax\UserBundle\Entity\User 
     */
    public function getAuteur()
    {
        return $this->auteur;
    }
}