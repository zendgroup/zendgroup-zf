<?php

/**
 * ZEND GROUP
 *
 * @name        Template.php
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
 * Template
 *
 * @ORM\Table(name="template")
 * @ORM\Entity(repositoryClass="ZG\Model\Repositories\Template")
 */
class Template
{
    /**
     * @var integer
     *
     * @ORM\Column(name="template_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $templateId;

    /**
     * @var string
     *
     * @ORM\Column(name="template_name", type="string", length=45, nullable=true)
     */
    private $templateName;

    /**
     * @var string
     *
     * @ORM\Column(name="template_path", type="string", length=255, nullable=true)
     */
    private $templatePath;

    /**
     * @var integer
     *
     * @ORM\Column(name="template_default", type="integer", nullable=true)
     */
    private $templateDefault;

    /**
     * @var string
     *
     * @ORM\Column(name="template_author", type="string", length=45, nullable=true)
     */
    private $templateAuthor;

    /**
     * @var string
     *
     * @ORM\Column(name="template_version", type="string", length=45, nullable=true)
     */
    private $templateVersion;


    /**
     * Get templateId
     *
     * @return integer 
     */
    public function getTemplateId()
    {
        return $this->templateId;
    }

    /**
     * Set templateName
     *
     * @param string $templateName
     *
     * @return Template
     */
    public function setTemplateName($templateName)
    {
        $this->templateName = $templateName;
    
        return $this;
    }

    /**
     * Get templateName
     *
     * @return string 
     */
    public function getTemplateName()
    {
        return $this->templateName;
    }

    /**
     * Set templatePath
     *
     * @param string $templatePath
     *
     * @return Template
     */
    public function setTemplatePath($templatePath)
    {
        $this->templatePath = $templatePath;
    
        return $this;
    }

    /**
     * Get templatePath
     *
     * @return string 
     */
    public function getTemplatePath()
    {
        return $this->templatePath;
    }

    /**
     * Set templateDefault
     *
     * @param integer $templateDefault
     *
     * @return Template
     */
    public function setTemplateDefault($templateDefault)
    {
        $this->templateDefault = $templateDefault;
    
        return $this;
    }

    /**
     * Get templateDefault
     *
     * @return integer 
     */
    public function getTemplateDefault()
    {
        return $this->templateDefault;
    }

    /**
     * Set templateAuthor
     *
     * @param string $templateAuthor
     *
     * @return Template
     */
    public function setTemplateAuthor($templateAuthor)
    {
        $this->templateAuthor = $templateAuthor;
    
        return $this;
    }

    /**
     * Get templateAuthor
     *
     * @return string 
     */
    public function getTemplateAuthor()
    {
        return $this->templateAuthor;
    }

    /**
     * Set templateVersion
     *
     * @param string $templateVersion
     *
     * @return Template
     */
    public function setTemplateVersion($templateVersion)
    {
        $this->templateVersion = $templateVersion;
    
        return $this;
    }

    /**
     * Get templateVersion
     *
     * @return string 
     */
    public function getTemplateVersion()
    {
        return $this->templateVersion;
    }
}
