<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Check_Harnais
 *
 * @ORM\Table(name="Check_Harnais")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\Check_HarnaisRepository")
 */
class Check_Harnais
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
     * @ORM\Column(name="ID_Harnais", type="string", length=16, nullable=true)
     */
    private $iDHarnais;

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
     * @ORM\Column(name="Etat_sangle", type="string", length=15, nullable=true)
     */
    private $EtatSangle;

    /**
     * @var string
     *
     * @ORM\Column(name="Etat_coutures", type="string", length=15, nullable=true)
     */
    private $EtatCoutures;

    /**
     * @var string
     *
     * @ORM\Column(name="Etat_securite", type="string", length=15, nullable=true)
     */
    private $EtatSecurite;

    /**
     * @var string
     *
     * @ORM\Column(name="Etat_boucle", type="string", length=15, nullable=true)
     */
    private $EtatBoucle;

    /**
     * @var string
     *
     * @ORM\Column(name="Etat_encordement", type="string", length=15, nullable=true)
     */
    private $EtatEncordement;

    /**
     * @var string
     *
     * @ORM\Column(name="Etat_confort", type="string", length=15, nullable=true)
     */
    private $EtatConfort;

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
     * Set iDHarnais
     *
     * @param string $iDHarnais
     *
     * @return Check_Harnais
     */
    public function setIDHarnais($iDHarnais)
    {
        $this->iDHarnais = $iDHarnais;

        return $this;
    }

    /**
     * Get iDHarnais
     *
     * @return string
     */
    public function getIDHarnais()
    {
        return $this->iDHarnais;
    }

    /**
     * Set nomControleur
     *
     * @param string $nomControleur
     *
     * @return Check_Harnais
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
     * @return Check_Harnais
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
     * Set etatSangle
     *
     * @param string $EtatSangle
     *
     * @return Check_Harnais
     */
    public function setEtatSangle($EtatSangle)
    {
        $this->EtatSangle = $EtatSangle;

        return $this;
    }

    /**
     * Get etatSangle
     *
     * @return string
     */
    public function getEtatSangle()
    {
        return $this->EtatSangle;
    }

    /**
     * Set etatCoutures
     *
     * @param string $EtatCoutures
     *
     * @return Check_Harnais
     */
    public function setEtatCoutures($EtatCoutures)
    {
        $this->EtatCoutures = $EtatCoutures;

        return $this;
    }

    /**
     * Get etatCoutures
     *
     * @return string
     */
    public function getEtatCoutures()
    {
        return $this->EtatCoutures;
    }

    /**
     * Set etatSecurite
     *
     * @param string $EtatSecurite
     *
     * @return Check_Harnais
     */
    public function setEtatSecurite($EtatSecurite)
    {
        $this->EtatSecurite = $EtatSecurite;

        return $this;
    }

    /**
     * Get etatSecurite
     *
     * @return string
     */
    public function getEtatSecurite()
    {
        return $this->EtatSecurite;
    }

    /**
     * Set etatBoucle
     *
     * @param string $EtatBoucle
     *
     * @return Check_Harnais
     */
    public function setEtatBoucle($EtatBoucle)
    {
        $this->EtatBoucle = $EtatBoucle;

        return $this;
    }

    /**
     * Get etatBoucle
     *
     * @return string
     */
    public function getEtatBoucle()
    {
        return $this->EtatBoucle;
    }

    /**
     * Set etatEncordement
     *
     * @param string $EtatEncordement
     *
     * @return Check_Harnais
     */
    public function setEtatEncordement($EtatEncordement)
    {
        $this->EtatEncordement = $EtatEncordement;

        return $this;
    }

    /**
     * Get etatEncordement
     *
     * @return string
     */
    public function getEtatEncordement()
    {
        return $this->EtatEncordement;
    }

    /**
     * Set etatConfort
     *
     * @param string $EtatConfort
     *
     * @return Check_Harnais
     */
    public function setEtatConfort($EtatConfort)
    {
        $this->EtatConfort = $EtatConfort;

        return $this;
    }

    /**
     * Get etatConfort
     *
     * @return string
     */
    public function getEtatConfort()
    {
        return $this->EtatConfort;
    }

    /**
     * Set remarques
     *
     * @param string $remarques
     *
     * @return Check_Harnais
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
     * @return Check_Harnais
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

