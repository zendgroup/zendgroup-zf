<?php

namespace ZG\Model\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Blocks
 *
 * @ORM\Table(name="blocks")
 * @ORM\Entity(repositoryClass="ZG\Model\Repositories\BlocksRepository")
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
     * @var string $blockFile
     *
     * @ORM\Column(name="block_file", type="string", length=255, nullable=true)
     */
    private $blockFile;

    /**
     * @var string $blockName
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
