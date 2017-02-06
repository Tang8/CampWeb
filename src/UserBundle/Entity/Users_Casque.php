<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users_Casque
 *
 * @ORM\Table(name="Users_Casque")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\Users_CasqueRepository")
 */
class Users_Casque
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
     * @ORM\Column(name="ID_Casque", type="string", length=16)
     */
    private $iDCasque;


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
     * @return Users_Casque
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
     * Set iDCasque
     *
     * @param string $iDCasque
     *
     * @return Users_Casque
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
}

