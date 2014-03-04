<?php

/**
 * ZEND GROUP
 *
 * @name        Hooks.php
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
 * Hooks
 *
 * @ORM\Table(name="hooks")
 * @ORM\Entity(repositoryClass="ZG\Model\Repositories\Hooks")
 */
class Hooks
{
    /**
     * @var integer
     *
     * @ORM\Column(name="hook_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $hookId;

    /**
     * @var string
     *
     * @ORM\Column(name="hook_name", type="string", length=45, nullable=true)
     */
    private $hookName;

    /**
     * @var string
     *
     * @ORM\Column(name="hook_code", type="string", length=255, nullable=true)
     */
    private $hookCode;

    /**
     * @var string
     *
     * @ORM\Column(name="hook_position", type="string", length=255, nullable=true)
     */
    private $hookPosition;


    /**
     * Get hookId
     *
     * @return integer 
     */
    public function getHookId()
    {
        return $this->hookId;
    }

    /**
     * Set hookName
     *
     * @param string $hookName
     *
     * @return Hooks
     */
    public function setHookName($hookName)
    {
        $this->hookName = $hookName;
    
        return $this;
    }

    /**
     * Get hookName
     *
     * @return string 
     */
    public function getHookName()
    {
        return $this->hookName;
    }

    /**
     * Set hookCode
     *
     * @param string $hookCode
     *
     * @return Hooks
     */
    public function setHookCode($hookCode)
    {
        $this->hookCode = $hookCode;
    
        return $this;
    }

    /**
     * Get hookCode
     *
     * @return string 
     */
    public function getHookCode()
    {
        return $this->hookCode;
    }

    /**
     * Set hookPosition
     *
     * @param string $hookPosition
     *
     * @return Hooks
     */
    public function setHookPosition($hookPosition)
    {
        $this->hookPosition = $hookPosition;
    
        return $this;
    }

    /**
     * Get hookPosition
     *
     * @return string 
     */
    public function getHookPosition()
    {
        return $this->hookPosition;
    }
}
