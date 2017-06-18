<?php

namespace AppBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;


/**
 * @MongoDB\Document
 */
class Pret
{

    /**
     * @MongoDB\Id
     */
    protected $id;

    /** @MongoDB\ReferenceOne(targetDocument="Livre", mappedBy="pret") */
    protected $livre;

    /**
     * @MongoDB\Field(type="string")
     */
     protected $nomPersonne;

     /**
      * @MongoDB\Field(type="string")
      */
      protected $mailPersonne;

     /**
      * @MongoDB\Field(type="date")
      */
      protected $dateEmprunt;



    public function __construct()
    {
      $date = new \DateTime();
      $this->dateEmprunt = $date;
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
     * Set livre
     *
     * @param AppBundle\Document\Livre $livre
     * @return $this
     */
    public function setLivre(\AppBundle\Document\Livre $livre)
    {
        $this->livre = $livre;
        return $this;
    }

    /**
     * Get livre
     *
     * @return AppBundle\Document\Livre $livre
     */
    public function getLivre()
    {
        return $this->livre;
    }

    /**
     * Set nomPersonne
     *
     * @param string $nomPersonne
     * @return $this
     */
    public function setNomPersonne($nomPersonne)
    {
        $this->nomPersonne = $nomPersonne;
        return $this;
    }

    /**
     * Get nomPersonne
     *
     * @return string $nomPersonne
     */
    public function getNomPersonne()
    {
        return $this->nomPersonne;
    }

    /**
     * Set mailPersonne
     *
     * @param string $mailPersonne
     * @return $this
     */
    public function setMailPersonne($mailPersonne)
    {
        $this->mailPersonne = $mailPersonne;
        return $this;
    }

    /**
     * Get mailPersonne
     *
     * @return string $mailPersonne
     */
    public function getMailPersonne()
    {
        return $this->mailPersonne;
    }

    /**
     * Set dateEmprunt
     *
     * @param date $dateEmprunt
     * @return $this
     */
    public function setDateEmprunt($dateEmprunt)
    {
        $this->dateEmprunt = $dateEmprunt;
        return $this;
    }

    /**
     * Get dateEmprunt
     *
     * @return date $dateEmprunt
     */
    public function getDateEmprunt()
    {
        return $this->dateEmprunt;
    }
}
