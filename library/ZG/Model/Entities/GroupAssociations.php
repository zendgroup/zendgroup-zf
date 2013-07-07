<?php

namespace ZG\Model\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * GroupAssociations
 *
 * @ORM\Table(name="group_associations")
 * @ORM\Entity(repositoryClass="ZG\Model\Repositories\GroupAssociationsRepository")
 */
class GroupAssociations
{
    /**
     * @var integer $groupAssociationId
     *
     * @ORM\Column(name="group_association_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $groupAssociationId;

    /**
     * @var Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="user_id")
     * })
     */
    private $user;

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
     * Get groupAssociationId
     *
     * @return integer 
     */
    public function getGroupAssociationId()
    {
        return $this->groupAssociationId;
    }

    /**
     * Set user
     *
     * @param Users $user
     * @return GroupAssociations
     */
    public function setUser(\Users $user = null)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return Users 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set group
     *
     * @param Groups $group
     * @return GroupAssociations
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
}
