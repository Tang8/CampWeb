<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Check_Casque
 *
 * @ORM\Table(name="Check_Casque")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\Check_CasqueRepository")
 */
class Check_Casque
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
     * @ORM\Column(name="ID_Casque", type="string", length=16)
     */
    private $iDCasque;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom_controleur", type="string", length=25, nullable=true)
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
     * @ORM\Column(name="Etat_visuel", type="string", length=15, nullable=true)
     */
    private $etatVisuel;

    /**
     * @var string
     *
     * @ORM\Column(name="Etat_fonctionnement", type="string", length=15, nullable=true)
     */
    private $etatFonctionnement;

    /**
     * @var string
     *
     * @ORM\Column(name="Remarques", type="text", nullable=true)
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
     * Set iDCasque
     *
     * @param string $iDCasque
     *
     * @return Check_Casque
     */
    public function setIDCasque($iDCasque)
    {
        $this->iDCasque = $iDCasque;

        return $this;
    }

    /**
     * Get iDCasque
     *
     * @return string
     */
    public function getIDCasque()
    {
        return $this->iDCasque;
    }

    /**
     * Set nomControleur
     *
     * @param string $nomControleur
     *
     * @return Check_Casque
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
     * @return Check_Casque
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
     * Set etatVisuel
     *
     * @param string $etatVisuel
     *
     * @return Check_Casque
     */
    public function setEtatVisuel($etatVisuel)
    {
        $this->etatVisuel = $etatVisuel;

        return $this;
    }

    /**
     * Get etatVisuel
     *
     * @return string
     */
    public function getEtatVisuel()
    {
        return $this->etatVisuel;
    }

    /**
     * Set etatFonctionnement
     *
     * @param string $etatFonctionnement
     *
     * @return Check_Casque
     */
    public function setEtatFonctionnement($etatFonctionnement)
    {
        $this->etatFonctionnement = $etatFonctionnement;

        return $this;
    }

    /**
     * Get etatFonctionnement
     *
     * @return string
     */
    public function getEtatFonctionnement()
    {
        return $this->etatFonctionnement;
    }

    /**
     * Set remarques
     *
     * @param string $remarques
     *
     * @return Check_Casque
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
     * @return Check_Casque
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