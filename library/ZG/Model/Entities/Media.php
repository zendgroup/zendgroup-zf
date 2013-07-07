<?php

namespace ZG\Model\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Media
 *
 * @ORM\Table(name="media")
 * @ORM\Entity(repositoryClass="ZG\Model\Repositories\MediaRepository")
 */
class Media
{
    /**
     * @var integer $attachmentId
     *
     * @ORM\Column(name="attachment_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $attachmentId;

    /**
     * @var string $mediaFileName
     *
     * @ORM\Column(name="media_file_name", type="string", length=45, nullable=true)
     */
    private $mediaFileName;

    /**
     * @var string $mediaCaption
     *
     * @ORM\Column(name="media_caption", type="string", length=45, nullable=true)
     */
    private $mediaCaption;

    /**
     * @var integer $mediaCounter
     *
     * @ORM\Column(name="media_counter", type="integer", nullable=true)
     */
    private $mediaCounter;

    /**
     * @var string $mediaPath
     *
     * @ORM\Column(name="media_path", type="string", length=255, nullable=true)
     */
    private $mediaPath;

    /**
     * @var string $mediaPathMd5
     *
     * @ORM\Column(name="media_path_md5", type="string", length=255, nullable=true)
     */
    private $mediaPathMd5;

    /**
     * @var integer $mediaSize
     *
     * @ORM\Column(name="media_size", type="integer", nullable=true)
     */
    private $mediaSize;

    /**
     * @var string $mediaInfo
     *
     * @ORM\Column(name="media_info", type="string", length=255, nullable=true)
     */
    private $mediaInfo;

    /**
     * @var \DateTime $mediaTime
     *
     * @ORM\Column(name="media_time", type="date", nullable=true)
     */
    private $mediaTime;

    /**
     * @var integer $mediaStatus
     *
     * @ORM\Column(name="media_status", type="integer", nullable=true)
     */
    private $mediaStatus;

    /**
     * @var FileTypes
     *
     * @ORM\ManyToOne(targetEntity="FileTypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="file_type_id", referencedColumnName="file_type_id")
     * })
     */
    private $fileType;

    /**
     * @var Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="user_id")
     * })
     */
    private $user;

    /**
     * @var Content
     *
     * @ORM\ManyToOne(targetEntity="Content")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="content_id", referencedColumnName="content_id")
     * })
     */
    private $content;


    /**
     * Get attachmentId
     *
     * @return integer 
     */
    public function getAttachmentId()
    {
        return $this->attachmentId;
    }

    /**
     * Set mediaFileName
     *
     * @param string $mediaFileName
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
     * @param \DateTime $mediaTime
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
     * @return \DateTime 
     */
    public function getMediaTime()
    {
        return $this->mediaTime;
    }

    /**
     * Set mediaStatus
     *
     * @param integer $mediaStatus
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
     * Set fileType
     *
     * @param FileTypes $fileType
     * @return Media
     */
    public function setFileType(\FileTypes $fileType = null)
    {
        $this->fileType = $fileType;
    
        return $this;
    }

    /**
     * Get fileType
     *
     * @return FileTypes 
     */
    public function getFileType()
    {
        return $this->fileType;
    }

    /**
     * Set user
     *
     * @param Users $user
     * @return Media
     */
    public function setUser(\Users $user = null)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return Users 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set content
     *
     * @param Content $content
     * @return Media
     */
    public function setContent(\Content $content = null)
    {
        $this->content = $content;
    
        return $this;
    }

    /**
     * Get content
     *
     * @return Content 
     */
    public function getContent()
    {
        return $this->content;
    }
}
