<?php

/**
 * ZEND GROUP
 *
 * @name        Blocks.php
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
 * Blocks
 *
 * @ORM\Table(name="blocks")
 * @ORM\Entity(repositoryClass="ZG\Model\Repositories\Blocks")
 */
class Blocks
{
    /**
     * @var integer
     *
     * @ORM\Column(name="block_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $blockId;

    /**
     * @var string
     *
     * @ORM\Column(name="block_file", type="string", length=255, nullable=true)
     */
    private $blockFile;

    /**
     * @var string
     *
     * @ORM\Column(name="block_name", type="string", length=255, nullable=true)
     */
    private $blockName;


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
     * Set blockFile
     *
     * @param string $blockFile
     *
     * @return Blocks
     */
    public function setBlockFile($blockFile)
    {
        $this->blockFile = $blockFile;
    
        return $this;
    }

    /**
     * Get blockFile
     *
     * @return string 
     */
    public function getBlockFile()
    {
        return $this->blockFile;
    }

    /**
     * Set blockName
     *
     * @param string $blockName
     *
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
}
