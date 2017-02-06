<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users_Harnais
 *
 * @ORM\Table(name="Users_Harnais")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\Users_HarnaisRepository")
 */
class Users_Harnais
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
     * @ORM\Column(name="ID_Harnais", type="string", length=16)
     */
    private $iDHarnais;


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
     * @return Users_Harnais
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
     * Set iDHarnais
     *
     * @param string $iDHarnais
     *
     * @return Users_Harnais
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
}

