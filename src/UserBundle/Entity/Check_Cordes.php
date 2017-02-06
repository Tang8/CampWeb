<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Check_Cordes
 *
 * @ORM\Table(name="Check_Cordes")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\Check_CordesRepository")
 */
class Check_Cordes
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
     * @ORM\Column(name="ID_corde", type="string", length=16, nullable=true)
     */
    private $iDCorde;

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
     * @ORM\Column(name="Usure", type="string", length=15, nullable=true)
     */
    private $usure;

    /**
     * @var string
     *
     * @ORM\Column(name="Brulures", type="string", length=15, nullable=true)
     */
    private $brulures;

    /**
     * @var string
     *
     * @ORM\Column(name="Coupures", type="string", length=15, nullable=true)
     */
    private $coupures;

    /**
     * @var string
     *
     * @ORM\Column(name="Zones_pelucheuses", type="string", length=15, nullable=true)
     */
    private $zonesPelucheuses;

    /**
     * @var string
     *
     * @ORM\Column(name="Ame", type="string", length=15, nullable=true)
     */
    private $ame;

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
     * Set iDCorde
     *
     * @param string $iDCorde
     *
     * @return Check_Cordes
     */
    public function setIDCorde($iDCorde)
    {
        $this->iDCorde = $iDCorde;

        return $this;
    }

    /**
     * Get iDCorde
     *
     * @return string
     */
    public function getIDCorde()
    {
        return $this->iDCorde;
    }

    /**
     * Set nomControleur
     *
     * @param string $nomControleur
     *
     * @return Check_Cordes
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
     * @return Check_Cordes
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
     * Set usure
     *
     * @param string $usure
     *
     * @return Check_Cordes
     */
    public function setUsure($usure)
    {
        $this->usure = $usure;

        return $this;
    }

    /**
     * Get usure
     *
     * @return string
     */
    public function getUsure()
    {
        return $this->usure;
    }

    /**
     * Set brulures
     *
     * @param string $brulures
     *
     * @return Check_Cordes
     */
    public function setBrulures($brulures)
    {
        $this->brulures = $brulures;

        return $this;
    }

    /**
     * Get brulures
     *
     * @return string
     */
    public function getBrulures()
    {
        return $this->brulures;
    }

    /**
     * Set coupures
     *
     * @param string $coupures
     *
     * @return Check_Cordes
     */
    public function setCoupures($coupures)
    {
        $this->coupures = $coupures;

        return $this;
    }

    /**
     * Get coupures
     *
     * @return string
     */
    public function getCoupures()
    {
        return $this->coupures;
    }

    /**
     * Set zonesPelucheuses
     *
     * @param string $zonesPelucheuses
     *
     * @return Check_Cordes
     */
    public function setZonesPelucheuses($zonesPelucheuses)
    {
        $this->zonesPelucheuses = $zonesPelucheuses;

        return $this;
    }

    /**
     * Get zonesPelucheuses
     *
     * @return string
     */
    public function getZonesPelucheuses()
    {
        return $this->zonesPelucheuses;
    }

    /**
     * Set ame
     *
     * @param string $ame
     *
     * @return Check_Cordes
     */
    public function setAme($ame)
    {
        $this->ame = $ame;

        return $this;
    }

    /**
     * Get ame
     *
     * @return string
     */
    public function getAme()
    {
        return $this->ame;
    }

    /**
     * Set remarques
     *
     * @param string $remarques
     *
     * @return Check_Cordes
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
     * @return Check_Cordes
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

