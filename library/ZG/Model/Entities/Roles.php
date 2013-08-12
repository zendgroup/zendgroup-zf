<?php

/**
 *
 * ZEND GROUP
 *
 * @name        Roles.php
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
 * Roles
 *
 * @ORM\Table(name="roles")
 * @ORM\Entity
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