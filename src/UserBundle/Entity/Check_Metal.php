<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Check_Metal
 *
 * @ORM\Table(name="Check_Metal")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\Check_MetalRepository")
 */
class Check_Metal
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_Metal", type="string", length=16, nullable=true)
     */
    private $iDMetal;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom_controleur", type="string", length=20, nullable=true)
     */
    private $nomControleur;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_controle", type="date", nullable=true)
     */
    private $dateControle;

    /**
     * @var string
     *
     * @ORM\Column(name="Etat_produit", type="string", length=15, nullable=true)
     */
    private $EtatProduit;

    /**
     * @var string
     *
     * @ORM\Column(name="Etat_fonctionnement", type="string", length=15, nullable=true)
     */
    private $EtatFonctionnement;

    /**
     * @var string
     *
     * @ORM\Column(name="Remarques", type="text")
     */
    private $remarques;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Prochain_controle", type="date", nullable=true)
     */
    private $prochainControle;


    /**
     * Get ID
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set iDMetal
     *
     * @param string $iDMetal
     *
     * @return Check_Metal
     */
    public function setIDMetal($iDMetal)
    {
        $this->iDMetal = $iDMetal;

        return $this;
    }

    /**
     * Get iDMetal
     *
     * @return string
     */
    public function getIDMetal()
    {
        return $this->iDMetal;
    }

    /**
     * Set nomControleur
     *
     * @param string $nomControleur
     *
     * @return Check_Metal
     */
    public function setNomControleur($nomControleur)
    {
        $this->nomControleur = $nomControleur;

        return $this;
    }

    /**
     * Get nomControleur
     *
     * @return string
     */
    public function getNomControleur()
    {
        return $this->nomControleur;
    }

    /**
     * Set dateControle
     *
     * @param \DateTime $dateControle
     *
     * @return Check_Metal
     */
    public function setDateControle($dateControle)
    {
        $this->dateControle = $dateControle;

        return $this;
    }

    /**
     * Get dateControle
     *
     * @return \DateTime
     */
    public function getDateControle()
    {
        return $this->dateControle;
    }

    /**
     * Set etatProduit
     *
     * @param string $EtatProduit
     *
     * @return Check_Metal
     */
    public function setEtatProduit($EtatProduit)
    {
        $this->EtatProduit = $EtatProduit;

        return $this;
    }

    /**
     * Get etatProduit
     *
     * @return string
     */
    public function getEtatProduit()
    {
        return $this->EtatProduit;
    }

    /**
     * Set etatFonctionnement
     *
     * @param string $EtatFonctionnement
     *
     * @return Check_Metal
     */
    public function setEtatFonctionnement($EtatFonctionnement)
    {
        $this->EtatFonctionnement = $EtatFonctionnement;

        return $this;
    }

    /**
     * Get etatFonctionnement
     *
     * @return string
     */
    public function getEtatFonctionnement()
    {
        return $this->EtatFonctionnement;
    }

    /**
     * Set remarques
     *
     * @param string $remarques
     *
     * @return Check_Metal
     */
    public function setRemarques($remarques)
    {
        $this->remarques = $remarques;

        return $this;
    }

    /**
     * Get remarques
     *
     * @return string
     */
    public function getRemarques()
    {
        return $this->remarques;
    }

    /**
     * Set prochainControle
     *
     * @param \DateTime $prochainControle
     *
     * @return Check_Metal
     */
    public function setProchainControle($prochainControle)
    {
        $this->prochainControle = $prochainControle;

        return $this;
    }

    /**
     * Get prochainControle
     *
     * @return \DateTime
     */
    public function getProchainControle()
    {
        return $this->prochainControle;
    }
}

