<?php

namespace ZG\Model\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Roles
 *
 * @ORM\Table(name="roles")
 * @ORM\Entity(repositoryClass="ZG\Model\Repositories\RolesRepository")
 */
class Roles
{
    /**
     * @var integer $roleId
     *
     * @ORM\Column(name="role_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $roleId;

    /**
     * @var string $roleTitle
     *
     * @ORM\Column(name="role_title", type="string", length=45, nullable=false)
     */
    private $roleTitle;

    /**
     * @var string $roleDescription
     *
     * @ORM\Column(name="role_description", type="string", length=255, nullable=true)
     */
    private $roleDescription;


    /**
     * Get roleId
     *
     * @return integer 
     */
    public function getRoleId()
    {
        return $this->roleId;
    }

    /**
     * Set roleTitle
     *
     * @param string $roleTitle
     * @return Roles
     */
    public function setRoleTitle($roleTitle)
    {
        $this->roleTitle = $roleTitle;
    
        return $this;
    }

    /**
     * Get roleTitle
     *
     * @return string 
     */
    public function getRoleTitle()
    {
        return $this->roleTitle;
    }

    /**
     * Set roleDescription
     *
     * @param string $roleDescription
     * @return Roles
     */
    public function setRoleDescription($roleDescription)
    {
        $this->roleDescription = $roleDescription;
    
        return $this;
    }

    /**
     * Get roleDescription
     *
     * @return string 
     */
    public function getRoleDescription()
    {
        return $this->roleDescription;
    }
}
