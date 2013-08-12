<?php

/**
 *
 * ZEND GROUP
 *
 * @name        ContentStatus.php
 * @category    Model
 * @package 	Entities
 * @subpackage  
 * @author      Thuy Dinh Xuan <thuydx@zendgroup.vn>
 * @link 		http://zendgroup.vn
 * @copyright   Copyright (c) 2012-2013 ZEND GROUP. All rights reserved (http://www.zendgroup.vn)
 * @license     http://zendgroup.vn/license/
 * @version     $0.1$
 * 3:52:05 AM - Apr 3, 2013
 *
 * LICENSE
 *
 * This source file is copyrighted by ZEND GROUP, full details in LICENSE.txt.
 * It is also available through the Internet at this URL:
 * http://zendgroup.vn/license/
 * If you did not receive a copy of the license and are unable to
 * obtain it through the Internet, please send an email
 * to license@zendgroup.vn so we can send you a copy immediately.
 */
            


use Doctrine\ORM\Mapping as ORM;

/**
 * ContentStatus
 *
 * @ORM\Table(name="content_status")
 * @ORM\Entity
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