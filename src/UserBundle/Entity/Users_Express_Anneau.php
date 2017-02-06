<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users_Express_Anneau
 *
 * @ORM\Table(name="Users_Express_Anneau")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\Users_Express_AnneauRepository")
 */
class Users_Express_Anneau
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
     * @ORM\Column(name="ID_Users", type="integer")
     */
    private $iDUsers;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_Express_Anneau", type="string", length=16)
     */
    private $iDExpressAnneau;


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
     * Set iDUsers
     *
     * @param integer $iDUsers
     *
     * @return Users_Express_Anneau
     */
    public function setIDUsers($iDUsers)
    {
        $this->iDUsers = $iDUsers;

        return $this;
    }

    /**
     * Get iDUsers
     *
     * @return int
     */
    public function getIDUsers()
    {
        return $this->iDUsers;
    }

    /**
     * Set iDExpressAnneau
     *
     * @param string $iDExpressAnneau
     *
     * @return Users_Express_Anneau
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
}

