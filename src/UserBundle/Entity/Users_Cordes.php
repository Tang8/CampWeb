<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users_Cordes
 *
 * @ORM\Table(name="Users_Cordes")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\Users_CordesRepository")
 */
class Users_Cordes
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
     * @ORM\Column(name="ID_Cordes", type="string", length=16)
     */
    private $iDCordes;


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
     * @return Users_Cordes
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
     * Set iDCordes
     *
     * @param string $iDCordes
     *
     * @return Users_Cordes
     */
    public function setIDCordes($iDCordes)
    {
        $this->iDCordes = $iDCordes;

        return $this;
    }

    /**
     * Get iDCordes
     *
     * @return string
     */
    public function getIDCordes()
    {
        return $this->iDCordes;
    }
}

