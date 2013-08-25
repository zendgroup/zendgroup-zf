<?php

namespace ZG\Model\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * GroupPermisions
 *
 * @ORM\Table(name="group_permisions")
 * @ORM\Entity(repositoryClass="ZG\Model\Repositories\GroupPermisionsRepository")
 */
class GroupPermisions
{
    /**
     * @var integer $groupPermisionId
     *
     * @ORM\Column(name="group_permision_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $groupPermisionId;

    /**
     * @var Groups
     *
     * @ORM\ManyToOne(targetEntity="Groups")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="group_id", referencedColumnName="group_id")
     * })
     */
    private $group;

    /**
     * @var Roles
     *
     * @ORM\ManyToOne(targetEntity="Roles")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="role_id", referencedColumnName="role_id")
     * })
     */
    private $role;


    /**
     * Get groupPermisionId
     *
     * @return integer 
     */
    public function getGroupPermisionId()
    {
        return $this->groupPermisionId;
    }

    /**
     * Set group
     *
     * @param Groups $group
     * @return GroupPermisions
     */
    public function setGroup(\Groups $group = null)
    {
        $this->group = $group;
    
        return $this;
    }

    /**
     * Get group
     *
     * @return Groups 
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Set role
     *
     * @param Roles $role
     * @return GroupPermisions
     */
    public function setRole(\Roles $role = null)
    {
        $this->role = $role;
    
        return $this;
    }

    /**
     * Get role
     *
     * @return Roles 
     */
    public function getRole()
    {
        return $this->role;
    }
}
