<?php

namespace ZG\Model\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Modules
 *
 * @ORM\Table(name="modules")
 * @ORM\Entity(repositoryClass="ZG\Model\Repositories\ModulesRepository")
 */
class Modules
{
    /**
     * @var integer $moduleId
     *
     * @ORM\Column(name="module_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $moduleId;

    /**
     * @var string $moduleName
     *
     * @ORM\Column(name="module_name", type="string", length=255, nullable=false)
     */
    private $moduleName;

    /**
     * @var string $moduleDescription
     *
     * @ORM\Column(name="module_description", type="text", nullable=true)
     */
    private $moduleDescription;

    /**
     * @var string $moduleAuthor
     *
     * @ORM\Column(name="module_author", type="string", length=255, nullable=true)
     */
    private $moduleAuthor;

    /**
     * @var \DateTime $moduleCreateDate
     *
     * @ORM\Column(name="module_create_date", type="date", nullable=true)
     */
    private $moduleCreateDate;

    /**
     * @var \DateTime $moduleInstallDate
     *
     * @ORM\Column(name="module_install_date", type="date", nullable=true)
     */
    private $moduleInstallDate;

    /**
     * @var integer $moduleEnable
     *
     * @ORM\Column(name="module_enable", type="integer", nullable=false)
     */
    private $moduleEnable;


    /**
     * Get moduleId
     *
     * @return integer 
     */
    public function getModuleId()
    {
        return $this->moduleId;
    }

    /**
     * Set moduleName
     *
     * @param string $moduleName
     * @return Modules
     */
    public function setModuleName($moduleName)
    {
        $this->moduleName = $moduleName;
    
        return $this;
    }

    /**
     * Get moduleName
     *
     * @return string 
     */
    public function getModuleName()
    {
        return $this->moduleName;
    }

    /**
     * Set moduleDescription
     *
     * @param string $moduleDescription
     * @return Modules
     */
    public function setModuleDescription($moduleDescription)
    {
        $this->moduleDescription = $moduleDescription;
    
        return $this;
    }

    /**
     * Get moduleDescription
     *
     * @return string 
     */
    public function getModuleDescription()
    {
        return $this->moduleDescription;
    }

    /**
     * Set moduleAuthor
     *
     * @param string $moduleAuthor
     * @return Modules
     */
    public function setModuleAuthor($moduleAuthor)
    {
        $this->moduleAuthor = $moduleAuthor;
    
        return $this;
    }

    /**
     * Get moduleAuthor
     *
     * @return string 
     */
    public function getModuleAuthor()
    {
        return $this->moduleAuthor;
    }

    /**
     * Set moduleCreateDate
     *
     * @param \DateTime $moduleCreateDate
     * @return Modules
     */
    public function setModuleCreateDate($moduleCreateDate)
    {
        $this->moduleCreateDate = $moduleCreateDate;
    
        return $this;
    }

    /**
     * Get moduleCreateDate
     *
     * @return \DateTime 
     */
    public function getModuleCreateDate()
    {
        return $this->moduleCreateDate;
    }

    /**
     * Set moduleInstallDate
     *
     * @param \DateTime $moduleInstallDate
     * @return Modules
     */
    public function setModuleInstallDate($moduleInstallDate)
    {
        $this->moduleInstallDate = $moduleInstallDate;
    
        return $this;
    }

    /**
     * Get moduleInstallDate
     *
     * @return \DateTime 
     */
    public function getModuleInstallDate()
    {
        return $this->moduleInstallDate;
    }

    /**
     * Set moduleEnable
     *
     * @param integer $moduleEnable
     * @return Modules
     */
    public function setModuleEnable($moduleEnable)
    {
        $this->moduleEnable = $moduleEnable;
    
        return $this;
    }

    /**
     * Get moduleEnable
     *
     * @return integer 
     */
    public function getModuleEnable()
    {
        return $this->moduleEnable;
    }
}
