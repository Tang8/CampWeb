<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Invent_Cordes
 *
 * @ORM\Table(name="Invent_Cordes")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\Invent_CordesRepository")
 */
class Invent_Cordes
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
     * @ORM\Column(name="ID_Proprietaire", type="integer", nullable=true)
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
     * @ORM\Column(name="NSerie", type="integer")
     */
    private $nSerie;

    /**
     * @var string
     *
     * @ORM\Column(name="Identifiant", type="string", length=16, nullable=true, unique=true)
     */
    private $identifiant;

    /**
     * @var int
     *
     * @ORM\Column(name="Longueur", type="integer")
     */
    private $longueur;

    /**
     * @var string
     *
     * @ORM\Column(name="Couleur", type="text")
     */
    private $couleur;

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
     * @ORM\Column(name="Frequence_controle", type="time")
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
     * @ORM\Column(name="Type_corde", type="text")
     */
    private $typeCorde;


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
     * @return Invent_Cordes
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
     * @return Invent_Cordes
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
     * @return Invent_Cordes
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
     * @return Invent_Cordes
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
     * @return Invent_Cordes
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
     * Set longueur
     *
     * @param integer $longueur
     *
     * @return Invent_Cordes
     */
    public function setLongueur($longueur)
    {
        $this->longueur = $longueur;

        return $this;
    }

    /**
     * Get longueur
     *
     * @return int
     */
    public function getLongueur()
    {
        return $this->longueur;
    }

    /**
     * Set couleur
     *
     * @param string $couleur
     *
     * @return Invent_Cordes
     */
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;

        return $this;
    }

    /**
     * Get couleur
     *
     * @return string
     */
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * Set dateAchat
     *
     * @param \DateTime $dateAchat
     *
     * @return Invent_Cordes
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
     * @return Invent_Cordes
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
     * @return Invent_Cordes
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
     * @return Invent_Cordes
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
     * @return Invent_Cordes
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
     * Set typeCorde
     *
     * @param string $typeCorde
     *
     * @return Invent_Cordes
     */
    public function setTypeCorde($typeCorde)
    {
        $this->typeCorde = $typeCorde;

        return $this;
    }

    /**
     * Get typeCorde
     *
     * @return string
     */
    public function getTypeCorde()
    {
        return $this->typeCorde;
    }
}

