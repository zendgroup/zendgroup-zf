<?php

namespace ZG\Model\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContentStatus
 *
 * @ORM\Table(name="content_status")
 * @ORM\Entity(repositoryClass="ZG\Model\Repositories\ContentStatusRepository")
 */
class ContentStatus
{
    /**
     * @var integer $contentStatuId
     *
     * @ORM\Column(name="content_statu_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $contentStatuId;

    /**
     * @var string $statusTitle
     *
     * @ORM\Column(name="status_title", type="string", length=45, nullable=true)
     */
    private $statusTitle;

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
     * Get contentStatuId
     *
     * @return integer 
     */
    public function getContentStatuId()
    {
        return $this->contentStatuId;
    }

    /**
     * Set statusTitle
     *
     * @param string $statusTitle
     * @return ContentStatus
     */
    public function setStatusTitle($statusTitle)
    {
        $this->statusTitle = $statusTitle;
    
        return $this;
    }

    /**
     * Get statusTitle
     *
     * @return string 
     */
    public function getStatusTitle()
    {
        return $this->statusTitle;
    }

    /**
     * Set content
     *
     * @param Content $content
     * @return ContentStatus
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
