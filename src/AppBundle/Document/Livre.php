<?php

namespace AppBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class Livre
{

    /**
     * @MongoDB\Id
     */
    protected $id;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $titre;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $auteur;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $isbn;

    /**
     * @MongoDB\Field(type="date")
     */
    protected $dateAchat;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $etat;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $thematiques;

    /** @MongoDB\ReferenceOne(targetDocument="Pret",nullable=true, inversedBy="livre") */
    protected $pret;


    public function __construct()
    {
      $date = new \DateTime();
      $this->dateAchat = $date;
    }

    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titre
     *
     * @param string $titre
     * @return $this
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
        return $this;
    }

    /**
     * Get titre
     *
     * @return string $titre
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set auteur
     *
     * @param string $auteur
     * @return $this
     */
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;
        return $this;
    }

    /**
     * Get auteur
     *
     * @return string $auteur
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * Set dateAchat
     *
     * @param date $dateAchat
     * @return $this
     */
    public function setDateAchat($dateAchat)
    {
        $this->dateAchat = $dateAchat;
        return $this;
    }

    /**
     * Get dateAchat
     *
     * @return date $dateAchat
     */
    public function getDateAchat()
    {
        return $this->dateAchat;
    }

    /**
     * Set etat
     *
     * @param string $etat
     * @return $this
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;
        return $this;
    }

    /**
     * Get etat
     *
     * @return string $etat
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set thematiques
     *
     * @param string $thematiques
     * @return $this
     */
    public function setThematiques($thematiques)
    {
        $this->thematiques = $thematiques;
        return $this;
    }

    /**
     * Get thematiques
     *
     * @return string $thematiques
     */
    public function getThematiques()
    {
        return $this->thematiques;
    }

    /**
     * Set pret
     *
     * @param string $pret
     * @return $this
     */
    public function setPret($pret)
    {
        $this->pret = $pret;
        return $this;
    }

    /**
     * Get pret
     *
     * @return string $pret
     */
    public function getPret()
    {
        return $this->pret;
    }

    /**
     * Set isbn
     *
     * @param string $isbn
     * @return $this
     */
    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;
        return $this;
    }

    /**
     * Get isbn
     *
     * @return string $isbn
     */
    public function getIsbn()
    {
        return $this->isbn;
    }
}
