<?php

namespace ZG\Model\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hooks
 *
 * @ORM\Table(name="hooks")
 * @ORM\Entity(repositoryClass="ZG\Model\Repositories\HooksRepository")
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
}
