<?php

/**
 * ZEND GROUP
 *
 * @name        BlogEntries.php
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
 * BlogEntries
 *
 * @ORM\Table(name="blog_entries", indexes={@ORM\Index(name="fk_blog_entry_idx", columns={"blog_id"})})
 * @ORM\Entity(repositoryClass="ZG\Model\Repositories\BlogEntries")
 */
class BlogEntries
{
    /**
     * @var integer
     *
     * @ORM\Column(name="entry_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $entryId;

    /**
     * @var string
     *
     * @ORM\Column(name="entry_title", type="string", length=255, nullable=true)
     */
    private $entryTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="entry_summary", type="string", length=255, nullable=true)
     */
    private $entrySummary;

    /**
     * @var string
     *
     * @ORM\Column(name="entry_content", type="text", nullable=true)
     */
    private $entryContent;

    /**
     * @var \ZG\Model\Entities\Blogs
     *
     * @ORM\ManyToOne(targetEntity="ZG\Model\Entities\Blogs")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="blog_id", referencedColumnName="blog_id")
     * })
     */
    private $blog;


    /**
     * Get entryId
     *
     * @return integer 
     */
    public function getEntryId()
    {
        return $this->entryId;
    }

    /**
     * Set entryTitle
     *
     * @param string $entryTitle
     *
     * @return BlogEntries
     */
    public function setEntryTitle($entryTitle)
    {
        $this->entryTitle = $entryTitle;
    
        return $this;
    }

    /**
     * Get entryTitle
     *
     * @return string 
     */
    public function getEntryTitle()
    {
        return $this->entryTitle;
    }

    /**
     * Set entrySummary
     *
     * @param string $entrySummary
     *
     * @return BlogEntries
     */
    public function setEntrySummary($entrySummary)
    {
        $this->entrySummary = $entrySummary;
    
        return $this;
    }

    /**
     * Get entrySummary
     *
     * @return string 
     */
    public function getEntrySummary()
    {
        return $this->entrySummary;
    }

    /**
     * Set entryContent
     *
     * @param string $entryContent
     *
     * @return BlogEntries
     */
    public function setEntryContent($entryContent)
    {
        $this->entryContent = $entryContent;
    
        return $this;
    }

    /**
     * Get entryContent
     *
     * @return string 
     */
    public function getEntryContent()
    {
        return $this->entryContent;
    }

    /**
     * Set blog
     *
     * @param \ZG\Model\Entities\Blogs $blog
     *
     * @return BlogEntries
     */
    public function setBlog(\ZG\Model\Entities\Blogs $blog = null)
    {
        $this->blog = $blog;
    
        return $this;
    }

    /**
     * Get blog
     *
     * @return \ZG\Model\Entities\Blogs 
     */
    public function getBlog()
    {
        return $this->blog;
    }
}
