<?php

/**
 *
 * ZEND GROUP
 *
 * @name        Hooks.php
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
 * Hooks
 *
 * @ORM\Table(name="hooks")
 * @ORM\Entity
 */
class Hooks
{
    /**
     * @var integer $hookId
     *
     * @ORM\Column(name="hook_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $hookId;

    /**
     * @var string $hookName
     *
     * @ORM\Column(name="hook_name", type="string", length=45, nullable=true)
     */
    private $hookName;

    /**
     * @var string $hookCode
     *
     * @ORM\Column(name="hook_code", type="string", length=255, nullable=true)
     */
    private $hookCode;

    /**
     * @var string $hookPosition
     *
     * @ORM\Column(name="hook_position", type="string", length=255, nullable=true)
     */
    private $hookPosition;

    /**
     * @var Widgets
     *
     * @ORM\ManyToOne(targetEntity="Widgets")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="widget_id", referencedColumnName="widget_id")
     * })
     */
    private $widget;


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

    /**
     * Set widget
     *
     * @param Widgets $widget
     * @return Hooks
     */
    public function setWidget(\Widgets $widget = null)
    {
        $this->widget = $widget;
        return $this;
    }

    /**
     * Get widget
     *
     * @return Widgets 
     */
    public function getWidget()
    {
        return $this->widget;
    }
}