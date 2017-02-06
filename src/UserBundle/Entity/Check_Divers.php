<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Check_Divers
 *
 * @ORM\Table(name="Check_Divers")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\Check_DiversRepository")
 */
class Check_Divers
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
     * @ORM\Column(name="ID_divers", type="string", length=16, nullable=true)
     */
    private $iDDivers;

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
     * @ORM\Column(name="Etat_securite", type="string", length=15, nullable=true)
     */
    private $EtatSecurite;

    /**
     * @var string
     *
     * @ORM\Column(name="Etat_fonctionnel", type="string", length=15, nullable=true)
     */
    private $EtatFonctionnel;

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
     * Set iDDivers
     *
     * @param string $iDDivers
     *
     * @return Check_Divers
     */
    public function setIDDivers($iDDivers)
    {
        $this->iDDivers = $iDDivers;

        return $this;
    }

    /**
     * Get iDDivers
     *
     * @return string
     */
    public function getIDDivers()
    {
        return $this->iDDivers;
    }

    /**
     * Set nomControleur
     *
     * @param string $nomControleur
     *
     * @return Check_Divers
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
     * @return Check_Divers
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
     * Set etatSecurite
     *
     * @param string $EtatSecurite
     *
     * @return Check_Divers
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
     * Set etatFonctionnel
     *
     * @param string $EtatFonctionnel
     *
     * @return Check_Divers
     */
    public function setEtatFonctionnel($EtatFonctionnel)
    {
        $this->EtatFonctionnel = $EtatFonctionnel;

        return $this;
    }

    /**
     * Get etatFonctionnel
     *
     * @return string
     */
    public function getEtatFonctionnel()
    {
        return $this->EtatFonctionnel;
    }

    /**
     * Set remarques
     *
     * @param string $remarques
     *
     * @return Check_Divers
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
     * @return Check_Divers
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

