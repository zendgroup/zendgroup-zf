<?php

/**
 * ZEND GROUP
 *
 * @name        ContentTypes.php
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
 * ContentTypes
 *
 * @ORM\Table(name="content_types")
 * @ORM\Entity(repositoryClass="ZG\Model\Repositories\ContentTypes")
 */
class ContentTypes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="content_type_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $contentTypeId;

    /**
     * @var string
     *
     * @ORM\Column(name="content_type_name", type="string", length=125, nullable=false)
     */
    private $contentTypeName;

    /**
     * @var string
     *
     * @ORM\Column(name="content_type_description", type="string", length=255, nullable=true)
     */
    private $contentTypeDescription;

    /**
     * @var boolean
     *
     * @ORM\Column(name="enable_expiry", type="boolean", nullable=true)
     */
    private $enableExpiry;

    /**
     * @var boolean
     *
     * @ORM\Column(name="enable_vote", type="boolean", nullable=true)
     */
    private $enableVote;

    /**
     * @var boolean
     *
     * @ORM\Column(name="enable_comment", type="boolean", nullable=true)
     */
    private $enableComment;

    /**
     * @var boolean
     *
     * @ORM\Column(name="enable_attachment", type="boolean", nullable=true)
     */
    private $enableAttachment;

    /**
     * @var boolean
     *
     * @ORM\Column(name="enable_media", type="boolean", nullable=true)
     */
    private $enableMedia;

    /**
     * @var boolean
     *
     * @ORM\Column(name="enable_tag", type="boolean", nullable=true)
     */
    private $enableTag;

    /**
     * @var boolean
     *
     * @ORM\Column(name="enable_schedule", type="boolean", nullable=true)
     */
    private $enableSchedule;


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
     * Set contentTypeName
     *
     * @param string $contentTypeName
     *
     * @return ContentTypes
     */
    public function setContentTypeName($contentTypeName)
    {
        $this->contentTypeName = $contentTypeName;
    
        return $this;
    }

    /**
     * Get contentTypeName
     *
     * @return string 
     */
    public function getContentTypeName()
    {
        return $this->contentTypeName;
    }

    /**
     * Set contentTypeDescription
     *
     * @param string $contentTypeDescription
     *
     * @return ContentTypes
     */
    public function setContentTypeDescription($contentTypeDescription)
    {
        $this->contentTypeDescription = $contentTypeDescription;
    
        return $this;
    }

    /**
     * Get contentTypeDescription
     *
     * @return string 
     */
    public function getContentTypeDescription()
    {
        return $this->contentTypeDescription;
    }

    /**
     * Set enableExpiry
     *
     * @param boolean $enableExpiry
     *
     * @return ContentTypes
     */
    public function setEnableExpiry($enableExpiry)
    {
        $this->enableExpiry = $enableExpiry;
    
        return $this;
    }

    /**
     * Get enableExpiry
     *
     * @return boolean 
     */
    public function getEnableExpiry()
    {
        return $this->enableExpiry;
    }

    /**
     * Set enableVote
     *
     * @param boolean $enableVote
     *
     * @return ContentTypes
     */
    public function setEnableVote($enableVote)
    {
        $this->enableVote = $enableVote;
    
        return $this;
    }

    /**
     * Get enableVote
     *
     * @return boolean 
     */
    public function getEnableVote()
    {
        return $this->enableVote;
    }

    /**
     * Set enableComment
     *
     * @param boolean $enableComment
     *
     * @return ContentTypes
     */
    public function setEnableComment($enableComment)
    {
        $this->enableComment = $enableComment;
    
        return $this;
    }

    /**
     * Get enableComment
     *
     * @return boolean 
     */
    public function getEnableComment()
    {
        return $this->enableComment;
    }

    /**
     * Set enableAttachment
     *
     * @param boolean $enableAttachment
     *
     * @return ContentTypes
     */
    public function setEnableAttachment($enableAttachment)
    {
        $this->enableAttachment = $enableAttachment;
    
        return $this;
    }

    /**
     * Get enableAttachment
     *
     * @return boolean 
     */
    public function getEnableAttachment()
    {
        return $this->enableAttachment;
    }

    /**
     * Set enableMedia
     *
     * @param boolean $enableMedia
     *
     * @return ContentTypes
     */
    public function setEnableMedia($enableMedia)
    {
        $this->enableMedia = $enableMedia;
    
        return $this;
    }

    /**
     * Get enableMedia
     *
     * @return boolean 
     */
    public function getEnableMedia()
    {
        return $this->enableMedia;
    }

    /**
     * Set enableTag
     *
     * @param boolean $enableTag
     *
     * @return ContentTypes
     */
    public function setEnableTag($enableTag)
    {
        $this->enableTag = $enableTag;
    
        return $this;
    }

    /**
     * Get enableTag
     *
     * @return boolean 
     */
    public function getEnableTag()
    {
        return $this->enableTag;
    }

    /**
     * Set enableSchedule
     *
     * @param boolean $enableSchedule
     *
     * @return ContentTypes
     */
    public function setEnableSchedule($enableSchedule)
    {
        $this->enableSchedule = $enableSchedule;
    
        return $this;
    }

    /**
     * Get enableSchedule
     *
     * @return boolean 
     */
    public function getEnableSchedule()
    {
        return $this->enableSchedule;
    }
}
