<?php

/**
 * ZEND GROUP
 *
 * @name        Media.php
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
 * Media
 *
 * @ORM\Table(name="media", indexes={@ORM\Index(name="fk_content_media_idx", columns={"content_detail_id"})})
 * @ORM\Entity(repositoryClass="ZG\Model\Repositories\Media")
 */
class Media
{
    /**
     * @var integer
     *
     * @ORM\Column(name="media_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $mediaId;

    /**
     * @var string
     *
     * @ORM\Column(name="media_file_name", type="string", length=45, nullable=true)
     */
    private $mediaFileName;

    /**
     * @var string
     *
     * @ORM\Column(name="media_caption", type="string", length=45, nullable=true)
     */
    private $mediaCaption;

    /**
     * @var integer
     *
     * @ORM\Column(name="media_counter", type="integer", nullable=true)
     */
    private $mediaCounter;

    /**
     * @var string
     *
     * @ORM\Column(name="media_path", type="string", length=255, nullable=true)
     */
    private $mediaPath;

    /**
     * @var string
     *
     * @ORM\Column(name="media_path_md5", type="string", length=255, nullable=true)
     */
    private $mediaPathMd5;

    /**
     * @var integer
     *
     * @ORM\Column(name="media_size", type="integer", nullable=true)
     */
    private $mediaSize;

    /**
     * @var string
     *
     * @ORM\Column(name="media_info", type="string", length=255, nullable=true)
     */
    private $mediaInfo;

    /**
     * @var integer
     *
     * @ORM\Column(name="media_time", type="integer", nullable=true)
     */
    private $mediaTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="media_status", type="integer", nullable=true)
     */
    private $mediaStatus;

    /**
     * @var \ZG\Model\Entities\ContentDetail
     *
     * @ORM\ManyToOne(targetEntity="ZG\Model\Entities\ContentDetail")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="content_detail_id", referencedColumnName="content_detail_id")
     * })
     */
    private $contentDetail;


    /**
     * Get mediaId
     *
     * @return integer 
     */
    public function getMediaId()
    {
        return $this->mediaId;
    }

    /**
     * Set mediaFileName
     *
     * @param string $mediaFileName
     *
     * @return Media
     */
    public function setMediaFileName($mediaFileName)
    {
        $this->mediaFileName = $mediaFileName;
    
        return $this;
    }

    /**
     * Get mediaFileName
     *
     * @return string 
     */
    public function getMediaFileName()
    {
        return $this->mediaFileName;
    }

    /**
     * Set mediaCaption
     *
     * @param string $mediaCaption
     *
     * @return Media
     */
    public function setMediaCaption($mediaCaption)
    {
        $this->mediaCaption = $mediaCaption;
    
        return $this;
    }

    /**
     * Get mediaCaption
     *
     * @return string 
     */
    public function getMediaCaption()
    {
        return $this->mediaCaption;
    }

    /**
     * Set mediaCounter
     *
     * @param integer $mediaCounter
     *
     * @return Media
     */
    public function setMediaCounter($mediaCounter)
    {
        $this->mediaCounter = $mediaCounter;
    
        return $this;
    }

    /**
     * Get mediaCounter
     *
     * @return integer 
     */
    public function getMediaCounter()
    {
        return $this->mediaCounter;
    }

    /**
     * Set mediaPath
     *
     * @param string $mediaPath
     *
     * @return Media
     */
    public function setMediaPath($mediaPath)
    {
        $this->mediaPath = $mediaPath;
    
        return $this;
    }

    /**
     * Get mediaPath
     *
     * @return string 
     */
    public function getMediaPath()
    {
        return $this->mediaPath;
    }

    /**
     * Set mediaPathMd5
     *
     * @param string $mediaPathMd5
     *
     * @return Media
     */
    public function setMediaPathMd5($mediaPathMd5)
    {
        $this->mediaPathMd5 = $mediaPathMd5;
    
        return $this;
    }

    /**
     * Get mediaPathMd5
     *
     * @return string 
     */
    public function getMediaPathMd5()
    {
        return $this->mediaPathMd5;
    }

    /**
     * Set mediaSize
     *
     * @param integer $mediaSize
     *
     * @return Media
     */
    public function setMediaSize($mediaSize)
    {
        $this->mediaSize = $mediaSize;
    
        return $this;
    }

    /**
     * Get mediaSize
     *
     * @return integer 
     */
    public function getMediaSize()
    {
        return $this->mediaSize;
    }

    /**
     * Set mediaInfo
     *
     * @param string $mediaInfo
     *
     * @return Media
     */
    public function setMediaInfo($mediaInfo)
    {
        $this->mediaInfo = $mediaInfo;
    
        return $this;
    }

    /**
     * Get mediaInfo
     *
     * @return string 
     */
    public function getMediaInfo()
    {
        return $this->mediaInfo;
    }

    /**
     * Set mediaTime
     *
     * @param integer $mediaTime
     *
     * @return Media
     */
    public function setMediaTime($mediaTime)
    {
        $this->mediaTime = $mediaTime;
    
        return $this;
    }

    /**
     * Get mediaTime
     *
     * @return integer 
     */
    public function getMediaTime()
    {
        return $this->mediaTime;
    }

    /**
     * Set mediaStatus
     *
     * @param integer $mediaStatus
     *
     * @return Media
     */
    public function setMediaStatus($mediaStatus)
    {
        $this->mediaStatus = $mediaStatus;
    
        return $this;
    }

    /**
     * Get mediaStatus
     *
     * @return integer 
     */
    public function getMediaStatus()
    {
        return $this->mediaStatus;
    }

    /**
     * Set contentDetail
     *
     * @param \ZG\Model\Entities\ContentDetail $contentDetail
     *
     * @return Media
     */
    public function setContentDetail(\ZG\Model\Entities\ContentDetail $contentDetail = null)
    {
        $this->contentDetail = $contentDetail;
    
        return $this;
    }

    /**
     * Get contentDetail
     *
     * @return \ZG\Model\Entities\ContentDetail 
     */
    public function getContentDetail()
    {
        return $this->contentDetail;
    }
}
