<?php

namespace ZG\Model\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContentSchedule
 *
 * @ORM\Table(name="content_schedule")
 * @ORM\Entity(repositoryClass="ZG\Model\Repositories\ContentScheduleRepository")
 */
class ContentSchedule
{
    /**
     * @var integer $contentScheduleId
     *
     * @ORM\Column(name="content_schedule_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $contentScheduleId;

    /**
     * @var string $contentScheduleName
     *
     * @ORM\Column(name="content_schedule_name", type="string", length=45, nullable=true)
     */
    private $contentScheduleName;

    /**
     * @var integer $contentScheduleFrom
     *
     * @ORM\Column(name="content_schedule_from", type="integer", nullable=true)
     */
    private $contentScheduleFrom;

    /**
     * @var integer $contentScheduleTo
     *
     * @ORM\Column(name="content_schedule_to", type="integer", nullable=true)
     */
    private $contentScheduleTo;

    /**
     * @var integer $contentScheduleDuration
     *
     * @ORM\Column(name="content_schedule_duration", type="integer", nullable=true)
     */
    private $contentScheduleDuration;

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
     * Get contentScheduleId
     *
     * @return integer 
     */
    public function getContentScheduleId()
    {
        return $this->contentScheduleId;
    }

    /**
     * Set contentScheduleName
     *
     * @param string $contentScheduleName
     * @return ContentSchedule
     */
    public function setContentScheduleName($contentScheduleName)
    {
        $this->contentScheduleName = $contentScheduleName;
    
        return $this;
    }

    /**
     * Get contentScheduleName
     *
     * @return string 
     */
    public function getContentScheduleName()
    {
        return $this->contentScheduleName;
    }

    /**
     * Set contentScheduleFrom
     *
     * @param integer $contentScheduleFrom
     * @return ContentSchedule
     */
    public function setContentScheduleFrom($contentScheduleFrom)
    {
        $this->contentScheduleFrom = $contentScheduleFrom;
    
        return $this;
    }

    /**
     * Get contentScheduleFrom
     *
     * @return integer 
     */
    public function getContentScheduleFrom()
    {
        return $this->contentScheduleFrom;
    }

    /**
     * Set contentScheduleTo
     *
     * @param integer $contentScheduleTo
     * @return ContentSchedule
     */
    public function setContentScheduleTo($contentScheduleTo)
    {
        $this->contentScheduleTo = $contentScheduleTo;
    
        return $this;
    }

    /**
     * Get contentScheduleTo
     *
     * @return integer 
     */
    public function getContentScheduleTo()
    {
        return $this->contentScheduleTo;
    }

    /**
     * Set contentScheduleDuration
     *
     * @param integer $contentScheduleDuration
     * @return ContentSchedule
     */
    public function setContentScheduleDuration($contentScheduleDuration)
    {
        $this->contentScheduleDuration = $contentScheduleDuration;
    
        return $this;
    }

    /**
     * Get contentScheduleDuration
     *
     * @return integer 
     */
    public function getContentScheduleDuration()
    {
        return $this->contentScheduleDuration;
    }

    /**
     * Set content
     *
     * @param Content $content
     * @return ContentSchedule
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
