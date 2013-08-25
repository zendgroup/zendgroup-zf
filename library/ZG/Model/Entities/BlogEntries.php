<?php

namespace ZG\Model\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * BlogEntries
 *
 * @ORM\Table(name="blog_entries")
 * @ORM\Entity(repositoryClass="ZG\Model\Repositories\BlogEntriesRepository")
 */
class BlogEntries
{
    /**
     * @var integer $entryId
     *
     * @ORM\Column(name="entry_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $entryId;

    /**
     * @var string $entryTitle
     *
     * @ORM\Column(name="entry_title", type="string", length=255, nullable=true)
     */
    private $entryTitle;

    /**
     * @var string $entrySummary
     *
     * @ORM\Column(name="entry_summary", type="string", length=255, nullable=true)
     */
    private $entrySummary;

    /**
     * @var string $entryContent
     *
     * @ORM\Column(name="entry_content", type="text", nullable=true)
     */
    private $entryContent;

    /**
     * @var Blogs
     *
     * @ORM\ManyToOne(targetEntity="Blogs")
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
     * @param Blogs $blog
     * @return BlogEntries
     */
    public function setBlog(\Blogs $blog = null)
    {
        $this->blog = $blog;
    
        return $this;
    }

    /**
     * Get blog
     *
     * @return Blogs 
     */
    public function getBlog()
    {
        return $this->blog;
    }
}
