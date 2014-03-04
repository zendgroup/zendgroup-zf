<?php

/**
 * ZEND GROUP
 *
 * @name        Archives.php
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
 * Archives
 *
 * @ORM\Table(name="archives", indexes={@ORM\Index(name="fk_content_archive_ids", columns={"content_id"})})
 * @ORM\Entity(repositoryClass="ZG\Model\Repositories\Archives")
 */
class Archives
{
    /**
     * @var integer
     *
     * @ORM\Column(name="archive_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $archiveId;

    /**
     * @var integer
     *
     * @ORM\Column(name="archive_date", type="integer", nullable=true)
     */
    private $archiveDate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="archive_downloadable", type="boolean", nullable=true)
     */
    private $archiveDownloadable;

    /**
     * @var boolean
     *
     * @ORM\Column(name="archive_vieweable", type="boolean", nullable=true)
     */
    private $archiveVieweable;

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
     * Get archiveId
     *
     * @return integer 
     */
    public function getArchiveId()
    {
        return $this->archiveId;
    }

    /**
     * Set archiveDate
     *
     * @param integer $archiveDate
     *
     * @return Archives
     */
    public function setArchiveDate($archiveDate)
    {
        $this->archiveDate = $archiveDate;
    
        return $this;
    }

    /**
     * Get archiveDate
     *
     * @return integer 
     */
    public function getArchiveDate()
    {
        return $this->archiveDate;
    }

    /**
     * Set archiveDownloadable
     *
     * @param boolean $archiveDownloadable
     *
     * @return Archives
     */
    public function setArchiveDownloadable($archiveDownloadable)
    {
        $this->archiveDownloadable = $archiveDownloadable;
    
        return $this;
    }

    /**
     * Get archiveDownloadable
     *
     * @return boolean 
     */
    public function getArchiveDownloadable()
    {
        return $this->archiveDownloadable;
    }

    /**
     * Set archiveVieweable
     *
     * @param boolean $archiveVieweable
     *
     * @return Archives
     */
    public function setArchiveVieweable($archiveVieweable)
    {
        $this->archiveVieweable = $archiveVieweable;
    
        return $this;
    }

    /**
     * Get archiveVieweable
     *
     * @return boolean 
     */
    public function getArchiveVieweable()
    {
        return $this->archiveVieweable;
    }

    /**
     * Set content
     *
     * @param \ZG\Model\Entities\Content $content
     *
     * @return Archives
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
