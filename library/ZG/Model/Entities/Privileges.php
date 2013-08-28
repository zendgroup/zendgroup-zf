<?php

namespace ZG\Model\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Privileges
 *
 * @ORM\Table(name="privileges")
 * @ORM\Entity(repositoryClass="ZG\Model\Repositories\PrivilegesRepository")
 */
class Privileges
{
    /**
     * @var integer $permissionId
     *
     * @ORM\Column(name="permission_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $permissionId;

    /**
     * @var integer $assignmentDate
     *
     * @ORM\Column(name="assignment_date", type="integer", nullable=false)
     */
    private $assignmentDate;

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
     * @var Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="user_id")
     * })
     */
    private $user;


    /**
     * Get permissionId
     *
     * @return integer 
     */
    public function getPermissionId()
    {
        return $this->permissionId;
    }

    /**
     * Set assignmentDate
     *
     * @param integer $assignmentDate
     * @return Privileges
     */
    public function setAssignmentDate($assignmentDate)
    {
        $this->assignmentDate = $assignmentDate;
    
        return $this;
    }

    /**
     * Get assignmentDate
     *
     * @return integer 
     */
    public function getAssignmentDate()
    {
        return $this->assignmentDate;
    }

    /**
     * Set group
     *
     * @param Groups $group
     * @return Privileges
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
     * Set user
     *
     * @param Users $user
     * @return Privileges
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
}
