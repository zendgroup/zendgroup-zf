<?php

/**
 *
 * ZEND GROUP
 *
 * @name        GroupAssociations.php
 * @category    Model
 * @package 	Entities
 * @subpackage  
 * @author      Thuy Dinh Xuan <thuydx@zendgroup.vn>
 * @link 		http://zendgroup.vn
 * @copyright   Copyright (c) 2012-2013 ZEND GROUP. All rights reserved (http://www.zendgroup.vn)
 * @license     http://zendgroup.vn/license/
 * @version     $0.1$
 * 3:52:05 AM - Apr 3, 2013
 *
 * LICENSE
 *
 * This source file is copyrighted by ZEND GROUP, full details in LICENSE.txt.
 * It is also available through the Internet at this URL:
 * http://zendgroup.vn/license/
 * If you did not receive a copy of the license and are unable to
 * obtain it through the Internet, please send an email
 * to license@zendgroup.vn so we can send you a copy immediately.
 */
            


use Doctrine\ORM\Mapping as ORM;

/**
 * GroupAssociations
 *
 * @ORM\Table(name="group_associations")
 * @ORM\Entity
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