<?php

namespace EntrepotBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Table(name="produit", indexes={@ORM\Index(name="fk_en", columns={"FK_id_entrepot"}), @ORM\Index(name="Produit_Categories", columns={"FK_id_categorie"})})
 * @ORM\Entity
 */
class Produit
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_produit", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProduit;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=255, nullable=false)
     */
    private $libelle;

    /**
     * @var integer
     *
     * @ORM\Column(name="reference", type="integer", nullable=false)
     */
    private $reference;

    /**
     * @var string
     *
     * @ORM\Column(name="marque", type="string", length=255, nullable=false)
     */
    private $marque;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float", precision=7, scale=2, nullable=false)
     */
    private $prix;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantite", type="integer", nullable=false)
     */
    private $quantite;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=true)
     */
    private $image;

    /**
     * @var \Categories
     *
     * @ORM\ManyToOne(targetEntity="Categories")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="FK_id_categorie", referencedColumnName="id_categorie")
     * })
     */
    private $fkCategorie;

    /**
     * @var \Entrepot
     *
     * @ORM\ManyToOne(targetEntity="Entrepot")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="FK_id_entrepot", referencedColumnName="id_entrepot")
     * })
     */
    private $fkEntrepot;

    /**
     * Produit constructor.
     * @param string $libelle
     * @param int $reference
     * @param string $marque
     * @param float $prix
     * @param int $quantite
     * @param string $image
     * @param \Categories $fkCategorie
     * @param \Entrepot $fkEntrepot
     */
    public function __construct($libelle, $reference, $marque, $prix, $quantite, $image, \Categories $fkCategorie, \Entrepot $fkEntrepot)
    {
        $this->libelle = $libelle;
        $this->reference = $reference;
        $this->marque = $marque;
        $this->prix = $prix;
        $this->quantite = $quantite;
        $this->image = $image;
        $this->fkCategorie = $fkCategorie;
        $this->fkEntrepot = $fkEntrepot;
    }

    /**
     * @return int
     */
    public function getIdProduit()
    {
        return $this->idProduit;
    }

    /**
     * @param int $idProduit
     */
    public function setIdProduit($idProduit)
    {
        $this->idProduit = $idProduit;
    }

    /**
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * @param string $libelle
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    }

    /**
     * @return int
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @param int $reference
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
    }

    /**
     * @return string
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * @param string $marque
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;
    }

    /**
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @param float $prix
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    /**
     * @return int
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * @param int $quantite
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;
    }

    /**
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param string $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return \Categories
     */
    public function getFkCategorie()
    {
        return $this->fkCategorie;
    }

    /**
     * @param \Categories $fkCategorie
     */
    public function setFkCategorie($fkCategorie)
    {
        $this->fkCategorie = $fkCategorie;
    }

    /**
     * @return \Entrepot
     */
    public function getFkEntrepot()
    {
        return $this->fkEntrepot;
    }

    /**
     * @param \Entrepot $fkEntrepot
     */
    public function setFkEntrepot($fkEntrepot)
    {
        $this->fkEntrepot = $fkEntrepot;
    }


}