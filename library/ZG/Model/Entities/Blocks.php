<?php

/**
 *
 * ZEND GROUP
 *
 * @name        Blocks.php
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
 * Blocks
 *
 * @ORM\Table(name="blocks")
 * @ORM\Entity
 */
class Blocks
{
    /**
     * @var integer $blockId
     *
     * @ORM\Column(name="block_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $blockId;

    /**
     * @var string $blockName
     *
     * @ORM\Column(name="block_name", type="string", length=255, nullable=true)
     */
    private $blockName;

    /**
     * @var Hooks
     *
     * @ORM\ManyToOne(targetEntity="Hooks")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="hook_id", referencedColumnName="hook_id")
     * })
     */
    private $hook;


    /**
     * Get blockId
     *
     * @return integer 
     */
    public function getBlockId()
    {
        return $this->blockId;
    }

    /**
     * Set blockName
     *
     * @param string $blockName
     * @return Blocks
     */
    public function setBlockName($blockName)
    {
        $this->blockName = $blockName;
        return $this;
    }

    /**
     * Get blockName
     *
     * @return string 
     */
    public function getBlockName()
    {
        return $this->blockName;
    }

    /**
     * Set hook
     *
     * @param Hooks $hook
     * @return Blocks
     */
    public function setHook(\Hooks $hook = null)
    {
        $this->hook = $hook;
        return $this;
    }

    /**
     * Get hook
     *
     * @return Hooks 
     */
    public function getHook()
    {
        return $this->hook;
    }
}