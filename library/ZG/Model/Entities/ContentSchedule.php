<?php

/**
 * ZEND GROUP
 *
 * @name        ContentSchedule.php
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
 * ContentSchedule
 *
 * @ORM\Table(name="content_schedule", indexes={@ORM\Index(name="fk_content_schedule_idx", columns={"content_id"})})
 * @ORM\Entity(repositoryClass="ZG\Model\Repositories\ContentSchedule")
 */
class ContentSchedule
{
    /**
     * @var integer
     *
     * @ORM\Column(name="content_schedule_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $contentScheduleId;

    /**
     * @var string
     *
     * @ORM\Column(name="content_schedule_name", type="string", length=45, nullable=true)
     */
    private $contentScheduleName;

    /**
     * @var integer
     *
     * @ORM\Column(name="content_schedule_from", type="integer", nullable=true)
     */
    private $contentScheduleFrom;

    /**
     * @var integer
     *
     * @ORM\Column(name="content_schedule_to", type="integer", nullable=true)
     */
    private $contentScheduleTo;

    /**
     * @var integer
     *
     * @ORM\Column(name="content_schedule_duration", type="integer", nullable=true)
     */
    private $contentScheduleDuration;

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
     *
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
     *
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
     *
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
     *
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
     * @param \ZG\Model\Entities\Content $content
     *
     * @return ContentSchedule
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
}
