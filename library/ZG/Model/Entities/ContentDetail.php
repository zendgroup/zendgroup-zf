<?php

/**
 * ZEND GROUP
 *
 * @name        ContentDetail.php
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
 * ContentDetail
 *
 * @ORM\Table(name="content_detail", indexes={@ORM\Index(name="fk_content_detail_idx", columns={"content_id"}), @ORM\Index(name="fk_content_language_idx", columns={"language_id"})})
 * @ORM\Entity(repositoryClass="ZG\Model\Repositories\ContentDetail")
 */
class ContentDetail
{
    /**
     * @var integer
     *
     * @ORM\Column(name="content_detail_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $contentDetailId;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=125, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="alias", type="string", length=125, nullable=true)
     */
    private $alias;

    /**
     * @var string
     *
     * @ORM\Column(name="summary", type="string", length=255, nullable=true)
     */
    private $summary;

    /**
     * @var string
     *
     * @ORM\Column(name="content_text", type="text", nullable=true)
     */
    private $contentText;

    /**
     * @var string
     *
     * @ORM\Column(name="meta_title", type="string", length=255, nullable=true)
     */
    private $metaTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="meta_keyword", type="string", length=255, nullable=true)
     */
    private $metaKeyword;

    /**
     * @var string
     *
     * @ORM\Column(name="meta_description", type="string", length=255, nullable=true)
     */
    private $metaDescription;

    /**
     * @var \ZG\Model\Entities\Content
     *
     * @ORM\ManyToOne(targetEntity="ZG\Model\Entities\Content")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="content_id", referencedColumnName="content_id")
     * })
     */
    private $content;

    /**
     * @var \ZG\Model\Entities\Languages
     *
     * @ORM\ManyToOne(targetEntity="ZG\Model\Entities\Languages")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="language_id", referencedColumnName="language_id")
     * })
     */
    private $language;


    /**
     * Get contentDetailId
     *
     * @return integer 
     */
    public function getContentDetailId()
    {
        return $this->contentDetailId;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return ContentDetail
     */
    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set alias
     *
     * @param string $alias
     *
     * @return ContentDetail
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;
    
        return $this;
    }

    /**
     * Get alias
     *
     * @return string 
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * Set summary
     *
     * @param string $summary
     *
     * @return ContentDetail
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;
    
        return $this;
    }

    /**
     * Get summary
     *
     * @return string 
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * Set contentText
     *
     * @param string $contentText
     *
     * @return ContentDetail
     */
    public function setContentText($contentText)
    {
        $this->contentText = $contentText;
    
        return $this;
    }

    /**
     * Get contentText
     *
     * @return string 
     */
    public function getContentText()
    {
        return $this->contentText;
    }

    /**
     * Set metaTitle
     *
     * @param string $metaTitle
     *
     * @return ContentDetail
     */
    public function setMetaTitle($metaTitle)
    {
        $this->metaTitle = $metaTitle;
    
        return $this;
    }

    /**
     * Get metaTitle
     *
     * @return string 
     */
    public function getMetaTitle()
    {
        return $this->metaTitle;
    }

    /**
     * Set metaKeyword
     *
     * @param string $metaKeyword
     *
     * @return ContentDetail
     */
    public function setMetaKeyword($metaKeyword)
    {
        $this->metaKeyword = $metaKeyword;
    
        return $this;
    }

    /**
     * Get metaKeyword
     *
     * @return string 
     */
    public function getMetaKeyword()
    {
        return $this->metaKeyword;
    }

    /**
     * Set metaDescription
     *
     * @param string $metaDescription
     *
     * @return ContentDetail
     */
    public function setMetaDescription($metaDescription)
    {
        $this->metaDescription = $metaDescription;
    
        return $this;
    }

    /**
     * Get metaDescription
     *
     * @return string 
     */
    public function getMetaDescription()
    {
        return $this->metaDescription;
    }

    /**
     * Set content
     *
     * @param \ZG\Model\Entities\Content $content
     *
     * @return ContentDetail
     */
    public function setContent(\ZG\Model\Entities\Content $content = null)
    {
        $this->content = $content;
    
        return $this;
    }

    /**
     * Get content
     *
     * @return \ZG\Model\Entities\Content 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set language
     *
     * @param \ZG\Model\Entities\Languages $language
     *
     * @return ContentDetail
     */
    public function setLanguage(\ZG\Model\Entities\Languages $language = null)
    {
        $this->language = $language;
    
        return $this;
    }

    /**
     * Get language
     *
     * @return \ZG\Model\Entities\Languages 
     */
    public function getLanguage()
    {
        return $this->language;
    }
}
