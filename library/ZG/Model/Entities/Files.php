<?php

namespace ZG\Model\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Files
 *
 * @ORM\Table(name="files")
 * @ORM\Entity(repositoryClass="ZG\Model\Repositories\FilesRepository")
 */
class Files
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
     * @var integer $contentId
     *
     * @ORM\Column(name="content_id", type="integer", nullable=true)
     */
    private $contentId;

    /**
     * @var string $fileName
     *
     * @ORM\Column(name="file_name", type="string", length=45, nullable=true)
     */
    private $fileName;

    /**
     * @var string $fileCaption
     *
     * @ORM\Column(name="file_caption", type="string", length=45, nullable=true)
     */
    private $fileCaption;

    /**
     * @var integer $fileCounter
     *
     * @ORM\Column(name="file_counter", type="integer", nullable=true)
     */
    private $fileCounter;

    /**
     * @var string $filePath
     *
     * @ORM\Column(name="file_path", type="string", length=255, nullable=true)
     */
    private $filePath;

    /**
     * @var string $filePathMd5
     *
     * @ORM\Column(name="file_path_md5", type="string", length=255, nullable=true)
     */
    private $filePathMd5;

    /**
     * @var integer $fileSize
     *
     * @ORM\Column(name="file_size", type="integer", nullable=true)
     */
    private $fileSize;

    /**
     * @var string $fileInfo
     *
     * @ORM\Column(name="file_info", type="string", length=255, nullable=true)
     */
    private $fileInfo;

    /**
     * @var \DateTime $fileTime
     *
     * @ORM\Column(name="file_time", type="date", nullable=true)
     */
    private $fileTime;

    /**
     * @var integer $fileStatus
     *
     * @ORM\Column(name="file_status", type="integer", nullable=true)
     */
    private $fileStatus;

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
     * @var ContentDetail
     *
     * @ORM\ManyToOne(targetEntity="ContentDetail")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="content_detail_id", referencedColumnName="content_detail_id")
     * })
     */
    private $contentDetail;


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
     * Set contentId
     *
     * @param integer $contentId
     * @return Files
     */
    public function setContentId($contentId)
    {
        $this->contentId = $contentId;
    
        return $this;
    }

    /**
     * Get contentId
     *
     * @return integer 
     */
    public function getContentId()
    {
        return $this->contentId;
    }

    /**
     * Set fileName
     *
     * @param string $fileName
     * @return Files
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;
    
        return $this;
    }

    /**
     * Get fileName
     *
     * @return string 
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * Set fileCaption
     *
     * @param string $fileCaption
     * @return Files
     */
    public function setFileCaption($fileCaption)
    {
        $this->fileCaption = $fileCaption;
    
        return $this;
    }

    /**
     * Get fileCaption
     *
     * @return string 
     */
    public function getFileCaption()
    {
        return $this->fileCaption;
    }

    /**
     * Set fileCounter
     *
     * @param integer $fileCounter
     * @return Files
     */
    public function setFileCounter($fileCounter)
    {
        $this->fileCounter = $fileCounter;
    
        return $this;
    }

    /**
     * Get fileCounter
     *
     * @return integer 
     */
    public function getFileCounter()
    {
        return $this->fileCounter;
    }

    /**
     * Set filePath
     *
     * @param string $filePath
     * @return Files
     */
    public function setFilePath($filePath)
    {
        $this->filePath = $filePath;
    
        return $this;
    }

    /**
     * Get filePath
     *
     * @return string 
     */
    public function getFilePath()
    {
        return $this->filePath;
    }

    /**
     * Set filePathMd5
     *
     * @param string $filePathMd5
     * @return Files
     */
    public function setFilePathMd5($filePathMd5)
    {
        $this->filePathMd5 = $filePathMd5;
    
        return $this;
    }

    /**
     * Get filePathMd5
     *
     * @return string 
     */
    public function getFilePathMd5()
    {
        return $this->filePathMd5;
    }

    /**
     * Set fileSize
     *
     * @param integer $fileSize
     * @return Files
     */
    public function setFileSize($fileSize)
    {
        $this->fileSize = $fileSize;
    
        return $this;
    }

    /**
     * Get fileSize
     *
     * @return integer 
     */
    public function getFileSize()
    {
        return $this->fileSize;
    }

    /**
     * Set fileInfo
     *
     * @param string $fileInfo
     * @return Files
     */
    public function setFileInfo($fileInfo)
    {
        $this->fileInfo = $fileInfo;
    
        return $this;
    }

    /**
     * Get fileInfo
     *
     * @return string 
     */
    public function getFileInfo()
    {
        return $this->fileInfo;
    }

    /**
     * Set fileTime
     *
     * @param \DateTime $fileTime
     * @return Files
     */
    public function setFileTime($fileTime)
    {
        $this->fileTime = $fileTime;
    
        return $this;
    }

    /**
     * Get fileTime
     *
     * @return \DateTime 
     */
    public function getFileTime()
    {
        return $this->fileTime;
    }

    /**
     * Set fileStatus
     *
     * @param integer $fileStatus
     * @return Files
     */
    public function setFileStatus($fileStatus)
    {
        $this->fileStatus = $fileStatus;
    
        return $this;
    }

    /**
     * Get fileStatus
     *
     * @return integer 
     */
    public function getFileStatus()
    {
        return $this->fileStatus;
    }

    /**
     * Set fileType
     *
     * @param FileTypes $fileType
     * @return Files
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
     * Set contentDetail
     *
     * @param ContentDetail $contentDetail
     * @return Files
     */
    public function setContentDetail(\ContentDetail $contentDetail = null)
    {
        $this->contentDetail = $contentDetail;
    
        return $this;
    }

    /**
     * Get contentDetail
     *
     * @return ContentDetail 
     */
    public function getContentDetail()
    {
        return $this->contentDetail;
    }
}
