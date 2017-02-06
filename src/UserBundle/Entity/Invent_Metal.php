<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Invent_Metal
 *
 * @ORM\Table(name="Invent_Metal")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\Invent_MetalRepository")
 */
class Invent_Metal
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
     * @var int
     *
     * @ORM\Column(name="ID_Proprietaire", type="integer")
     */
    private $iDProprietaire;

    /**
     * @var string
     *
     * @ORM\Column(name="Modele", type="text")
     */
    private $modele;

    /**
     * @var string
     *
     * @ORM\Column(name="Fabricant", type="text")
     */
    private $fabricant;

    /**
     * @var int
     *
     * @ORM\Column(name="NSerie", type="integer", nullable=true)
     */
    private $nSerie;

    /**
     * @var string
     *
     * @ORM\Column(name="Identifiant", type="string", length=16, nullable=true)
     */
    private $identifiant;

    /**
     * @var string
     *
     * @ORM\Column(name="Signe", type="text")
     */
    private $signe;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_achat", type="date")
     */
    private $dateAchat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_fabrication", type="date")
     */
    private $dateFabrication;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_fin_de_vie", type="date")
     */
    private $dateFinDeVie;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Frequence_controle", type="date")
     */
    private $frequenceControle;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_premiere_utilisation", type="date")
     */
    private $datePremiereUtilisation;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom_du_lot", type="string", length=25)
     */
    private $nomDuLot;


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
     * Set iDProprietaire
     *
     * @param integer $iDProprietaire
     *
     * @return Invent_Metal
     */
    public function setIDProprietaire($iDProprietaire)
    {
        $this->iDProprietaire = $iDProprietaire;

        return $this;
    }

    /**
     * Get iDProprietaire
     *
     * @return int
     */
    public function getIDProprietaire()
    {
        return $this->iDProprietaire;
    }

    /**
     * Set modele
     *
     * @param string $modele
     *
     * @return Invent_Metal
     */
    public function setModele($modele)
    {
        $this->modele = $modele;

        return $this;
    }

    /**
     * Get modele
     *
     * @return string
     */
    public function getModele()
    {
        return $this->modele;
    }

    /**
     * Set fabricant
     *
     * @param string $fabricant
     *
     * @return Invent_Metal
     */
    public function setFabricant($fabricant)
    {
        $this->fabricant = $fabricant;

        return $this;
    }

    /**
     * Get fabricant
     *
     * @return string
     */
    public function getFabricant()
    {
        return $this->fabricant;
    }

    /**
     * Set nSerie
     *
     * @param integer $nSerie
     *
     * @return Invent_Metal
     */
    public function setNSerie($nSerie)
    {
        $this->nSerie = $nSerie;

        return $this;
    }

    /**
     * Get nSerie
     *
     * @return int
     */
    public function getNSerie()
    {
        return $this->nSerie;
    }

    /**
     * Set identifiant
     *
     * @param string $identifiant
     *
     * @return Invent_Metal
     */
    public function setIdentifiant($identifiant)
    {
        $this->identifiant = $identifiant;

        return $this;
    }

    /**
     * Get identifiant
     *
     * @return string
     */
    public function getIdentifiant()
    {
        return $this->identifiant;
    }

    /**
     * Set signe
     *
     * @param string $signe
     *
     * @return Invent_Metal
     */
    public function setSigne($signe)
    {
        $this->signe = $signe;

        return $this;
    }

    /**
     * Get signe
     *
     * @return string
     */
    public function getSigne()
    {
        return $this->signe;
    }

    /**
     * Set dateAchat
     *
     * @param \DateTime $dateAchat
     *
     * @return Invent_Metal
     */
    public function setDateAchat($dateAchat)
    {
        $this->dateAchat = $dateAchat;

        return $this;
    }

    /**
     * Get dateAchat
     *
     * @return \DateTime
     */
    public function getDateAchat()
    {
        return $this->dateAchat;
    }

    /**
     * Set dateFabrication
     *
     * @param \DateTime $dateFabrication
     *
     * @return Invent_Metal
     */
    public function setDateFabrication($dateFabrication)
    {
        $this->dateFabrication = $dateFabrication;

        return $this;
    }

    /**
     * Get dateFabrication
     *
     * @return \DateTime
     */
    public function getDateFabrication()
    {
        return $this->dateFabrication;
    }

    /**
     * Set dateFinDeVie
     *
     * @param \DateTime $dateFinDeVie
     *
     * @return Invent_Metal
     */
    public function setDateFinDeVie($dateFinDeVie)
    {
        $this->dateFinDeVie = $dateFinDeVie;

        return $this;
    }

    /**
     * Get dateFinDeVie
     *
     * @return \DateTime
     */
    public function getDateFinDeVie()
    {
        return $this->dateFinDeVie;
    }

    /**
     * Set frequenceControle
     *
     * @param \DateTime $frequenceControle
     *
     * @return Invent_Metal
     */
    public function setFrequenceControle($frequenceControle)
    {
        $this->frequenceControle = $frequenceControle;

        return $this;
    }

    /**
     * Get frequenceControle
     *
     * @return \DateTime
     */
    public function getFrequenceControle()
    {
        return $this->frequenceControle;
    }

    /**
     * Set datePremiereUtilisation
     *
     * @param \DateTime $datePremiereUtilisation
     *
     * @return Invent_Metal
     */
    public function setDatePremiereUtilisation($datePremiereUtilisation)
    {
        $this->datePremiereUtilisation = $datePremiereUtilisation;

        return $this;
    }

    /**
     * Get datePremiereUtilisation
     *
     * @return \DateTime
     */
    public function getDatePremiereUtilisation()
    {
        return $this->datePremiereUtilisation;
    }

    /**
     * Set nomDuLot
     *
     * @param string $nomDuLot
     *
     * @return Invent_Metal
     */
    public function setNomDuLot($nomDuLot)
    {
        $this->nomDuLot = $nomDuLot;

        return $this;
    }

    /**
     * Get nomDuLot
     *
     * @return string
     */
    public function getNomDuLot()
    {
        return $this->nomDuLot;
    }
}

