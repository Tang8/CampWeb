<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Check_Express_Anneau
 *
 * @ORM\Table(name="Check_Express_Anneau")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\Check_Express_AnneauRepository")
 */
class Check_Express_Anneau
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
     * @ORM\Column(name="ID_Express_Anneau", type="string", length=16, nullable=true)
     */
    private $iDExpressAnneau;

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
     * Set iDExpressAnneau
     *
     * @param string $iDExpressAnneau
     *
     * @return Check_Express_Anneau
     */
    public function setIDExpressAnneau($iDExpressAnneau)
    {
        $this->iDExpressAnneau = $iDExpressAnneau;

        return $this;
    }

    /**
     * Get iDExpressAnneau
     *
     * @return string
     */
    public function getIDExpressAnneau()
    {
        return $this->iDExpressAnneau;
    }

    /**
     * Set nomControleur
     *
     * @param string $nomControleur
     *
     * @return Check_Express_Anneau
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
     * @return Check_Express_Anneau
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
     * @return Check_Express_Anneau
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
     * @return Check_Express_Anneau
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
     * Set remarques
     *
     * @param string $remarques
     *
     * @return Check_Express_Anneau
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
     * @return Check_Express_Anneau
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

