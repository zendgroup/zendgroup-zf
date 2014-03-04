<?php

/**
 * ZEND GROUP
 *
 * @name        Permissions.php
 * @category    ZG
 * @package 	Model
 * @subpackage  Model\Entities
 * @author      Thuy Dinh Xuan <thuydx@zendgroup.vn>
 * @copyright   Copyright (c)2008-2010 ZEND GROUP. All rights reserved
 * @license     http://zendgroup.vn/license/
 * @version     $1.0$
 *
 * LICENSE
 *
 * This source file is copyrighted by ZEND GROUP, full details in LICENSE.txt.
 * It is also available through the Internet at this URL:
 * http://zendgroup.vn/license/
 * If you did not receive a copy of the license and are unable to
 * obtain it through the Internet, please send an email
 * to license@zendgroup.vn so we can send you a copy immediately.
 *
 */

namespace ZG\Model\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Permissions
 *
 * @ORM\Table(name="permissions", indexes={@ORM\Index(name="fk_group_role_idx", columns={"group_id"}), @ORM\Index(name="fk_role_group_idx", columns={"role_id"})})
 * @ORM\Entity(repositoryClass="ZG\Model\Repositories\Permissions")
 */
class Permissions
{
    /**
     * @var integer
     *
     * @ORM\Column(name="privilege_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $privilegeId;

    /**
     * @var integer
     *
     * @ORM\Column(name="assignment_date", type="integer", nullable=false)
     */
    private $assignmentDate;

    /**
     * @var \ZG\Model\Entities\Groups
     *
     * @ORM\ManyToOne(targetEntity="ZG\Model\Entities\Groups")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="group_id", referencedColumnName="group_id")
     * })
     */
    private $group;

    /**
     * @var \ZG\Model\Entities\Roles
     *
     * @ORM\ManyToOne(targetEntity="ZG\Model\Entities\Roles")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="role_id", referencedColumnName="role_id")
     * })
     */
    private $role;


    /**
     * Get privilegeId
     *
     * @return integer 
     */
    public function getPrivilegeId()
    {
        return $this->privilegeId;
    }

    /**
     * Set assignmentDate
     *
     * @param integer $assignmentDate
     *
     * @return Permissions
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
     * @param \ZG\Model\Entities\Groups $group
     *
     * @return Permissions
     */
    public function setGroup(\ZG\Model\Entities\Groups $group = null)
    {
        $this->group = $group;
    
        return $this;
    }

    /**
     * Get group
     *
     * @return \ZG\Model\Entities\Groups 
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Set role
     *
     * @param \ZG\Model\Entities\Roles $role
     *
     * @return Permissions
     */
    public function setRole(\ZG\Model\Entities\Roles $role = null)
    {
        $this->role = $role;
    
        return $this;
    }

    /**
     * Get role
     *
     * @return \ZG\Model\Entities\Roles 
     */
    public function getRole()
    {
        return $this->role;
    }
}
