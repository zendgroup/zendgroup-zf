<?php

/**
 *
 * ZEND GROUP
 *
 * @name        Groups.php
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
 * Groups
 *
 * @ORM\Table(name="groups")
 * @ORM\Entity
 */
class Groups
{
    /**
     * @var integer $groupId
     *
     * @ORM\Column(name="group_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $groupId;

    /**
     * @var string $groupTitle
     *
     * @ORM\Column(name="group_title", type="string", length=45, nullable=true)
     */
    private $groupTitle;

    /**
     * @var string $groupDescription
     *
     * @ORM\Column(name="group_description", type="string", length=255, nullable=true)
     */
    private $groupDescription;


    /**
     * Get groupId
     *
     * @return integer 
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * Set groupTitle
     *
     * @param string $groupTitle
     * @return Groups
     */
    public function setGroupTitle($groupTitle)
    {
        $this->groupTitle = $groupTitle;
        return $this;
    }

    /**
     * Get groupTitle
     *
     * @return string 
     */
    public function getGroupTitle()
    {
        return $this->groupTitle;
    }

    /**
     * Set groupDescription
     *
     * @param string $groupDescription
     * @return Groups
     */
    public function setGroupDescription($groupDescription)
    {
        $this->groupDescription = $groupDescription;
        return $this;
    }

    /**
     * Get groupDescription
     *
     * @return string 
     */
    public function getGroupDescription()
    {
        return $this->groupDescription;
    }
}