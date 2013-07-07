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
