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
     * @var integer $parentId
     *
     * @ORM\Column(name="parent_id", type="integer", nullable=true)
     */
    private $parentId;

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
     * @var integer $lft
     *
     * @ORM\Column(name="lft", type="integer", nullable=true)
     */
    private $lft;

    /**
     * @var integer $rgt
     *
     * @ORM\Column(name="rgt", type="integer", nullable=true)
     */
    private $rgt;

    /**
     * @var integer $depth
     *
     * @ORM\Column(name="depth", type="integer", nullable=true)
     */
    private $depth;


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
     * Set parentId
     *
     * @param integer $parentId
     * @return Roles
     */
    public function setParentId($parentId)
    {
        $this->parentId = $parentId;
    
        return $this;
    }

    /**
     * Get parentId
     *
     * @return integer 
     */
    public function getParentId()
    {
        return $this->parentId;
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

    /**
     * Set lft
     *
     * @param integer $lft
     * @return Roles
     */
    public function setLft($lft)
    {
        $this->lft = $lft;
    
        return $this;
    }

    /**
     * Get lft
     *
     * @return integer 
     */
    public function getLft()
    {
        return $this->lft;
    }

    /**
     * Set rgt
     *
     * @param integer $rgt
     * @return Roles
     */
    public function setRgt($rgt)
    {
        $this->rgt = $rgt;
    
        return $this;
    }

    /**
     * Get rgt
     *
     * @return integer 
     */
    public function getRgt()
    {
        return $this->rgt;
    }

    /**
     * Set depth
     *
     * @param integer $depth
     * @return Roles
     */
    public function setDepth($depth)
    {
        $this->depth = $depth;
    
        return $this;
    }

    /**
     * Get depth
     *
     * @return integer 
     */
    public function getDepth()
    {
        return $this->depth;
    }
}
