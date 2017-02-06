<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users_Divers
 *
 * @ORM\Table(name="Users_Divers")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\Users_DiversRepository")
 */
class Users_Divers
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
     * @ORM\Column(name="ID_Divers", type="string", length=16)
     */
    private $iDDivers;


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
     * @return Users_Divers
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
     * Set iDDivers
     *
     * @param string $iDDivers
     *
     * @return Users_Divers
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
}

