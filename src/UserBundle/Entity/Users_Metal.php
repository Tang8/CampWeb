<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users_Metal
 *
 * @ORM\Table(name="Users_Metal")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\Users_MetalRepository")
 */
class Users_Metal
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
     * @ORM\Column(name="ID_Metal", type="string", length=16)
     */
    private $iDMetal;


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
     * @return Users_Metal
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
     * Set iDMetal
     *
     * @param string $iDMetal
     *
     * @return Users_Metal
     */
    public function setIDMetal($iDMetal)
    {
        $this->iDMetal = $iDMetal;

        return $this;
    }

    /**
     * Get iDMetal
     *
     * @return string
     */
    public function getIDMetal()
    {
        return $this->iDMetal;
    }
}

