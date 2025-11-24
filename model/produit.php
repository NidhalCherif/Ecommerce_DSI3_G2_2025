<?php
class produit
{
    protected $id;


    protected $libelle;


    protected $prix;


    protected $quantite;


    protected $image;


    protected $description;


    protected $promo;

    public function __construct($id, $libelle, $prix, $quantite, $image, $description, $promo)
    {
        $this->id = $id;
        $this->libelle = $libelle;
        $this->prix = $prix;
        $this->quantite = $quantite;
        $this->image = $image;
        $this->description = $description;
        $this->promo = $promo;
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of libelle
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set the value of libelle
     *
     * @return  self
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }



    /**
     * Get the value of prix
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set the value of prix
     *
     * @return  self
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get the value of quantite
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set the value of quantite
     *
     * @return  self
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get the value of image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @return  self
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get the value of description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of promo
     */
    public function getPromo()
    {
        return $this->promo;
    }

    /**
     * Set the value of promo
     *
     * @return  self
     */
    public function setPromo($promo)
    {
        $this->promo = $promo;

        return $this;
    }
}
