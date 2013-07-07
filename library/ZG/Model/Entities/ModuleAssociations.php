<?php

namespace ZG\Model\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModuleAssociations
 *
 * @ORM\Table(name="module_associations")
 * @ORM\Entity(repositoryClass="ZG\Model\Repositories\ModuleAssociationsRepository")
 */
class ModuleAssociations
{
    /**
     * @var integer $moduleAssociationId
     *
     * @ORM\Column(name="module_association_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $moduleAssociationId;

    /**
     * @var integer $moduleId
     *
     * @ORM\Column(name="module_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $moduleId;

    /**
     * @var integer $contentTypeId
     *
     * @ORM\Column(name="content_type_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $contentTypeId;

    /**
     * @var ContentTypes
     *
     * @ORM\ManyToOne(targetEntity="ContentTypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="content_types_content_type_id", referencedColumnName="content_type_id")
     * })
     */
    private $contentTypesContentType;

    /**
     * @var Modules
     *
     * @ORM\ManyToOne(targetEntity="Modules")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="modules_module_id", referencedColumnName="module_id")
     * })
     */
    private $modulesModule;


    /**
     * Set moduleAssociationId
     *
     * @param integer $moduleAssociationId
     * @return ModuleAssociations
     */
    public function setModuleAssociationId($moduleAssociationId)
    {
        $this->moduleAssociationId = $moduleAssociationId;
    
        return $this;
    }

    /**
     * Get moduleAssociationId
     *
     * @return integer 
     */
    public function getModuleAssociationId()
    {
        return $this->moduleAssociationId;
    }

    /**
     * Set moduleId
     *
     * @param integer $moduleId
     * @return ModuleAssociations
     */
    public function setModuleId($moduleId)
    {
        $this->moduleId = $moduleId;
    
        return $this;
    }

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
     * Set contentTypeId
     *
     * @param integer $contentTypeId
     * @return ModuleAssociations
     */
    public function setContentTypeId($contentTypeId)
    {
        $this->contentTypeId = $contentTypeId;
    
        return $this;
    }

    /**
     * Get contentTypeId
     *
     * @return integer 
     */
    public function getContentTypeId()
    {
        return $this->contentTypeId;
    }

    /**
     * Set contentTypesContentType
     *
     * @param ContentTypes $contentTypesContentType
     * @return ModuleAssociations
     */
    public function setContentTypesContentType(\ContentTypes $contentTypesContentType = null)
    {
        $this->contentTypesContentType = $contentTypesContentType;
    
        return $this;
    }

    /**
     * Get contentTypesContentType
     *
     * @return ContentTypes 
     */
    public function getContentTypesContentType()
    {
        return $this->contentTypesContentType;
    }

    /**
     * Set modulesModule
     *
     * @param Modules $modulesModule
     * @return ModuleAssociations
     */
    public function setModulesModule(\Modules $modulesModule = null)
    {
        $this->modulesModule = $modulesModule;
    
        return $this;
    }

    /**
     * Get modulesModule
     *
     * @return Modules 
     */
    public function getModulesModule()
    {
        return $this->modulesModule;
    }
}
