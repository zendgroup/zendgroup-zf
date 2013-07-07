<?php

namespace ZG\Model\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comments
 *
 * @ORM\Table(name="comments")
 * @ORM\Entity(repositoryClass="ZG\Model\Repositories\CommentsRepository")
 */
class Comments
{
    /**
     * @var integer $commentId
     *
     * @ORM\Column(name="comment_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $commentId;

    /**
     * @var integer $contentId
     *
     * @ORM\Column(name="content_id", type="integer", nullable=true)
     */
    private $contentId;

    /**
     * @var string $commentText
     *
     * @ORM\Column(name="comment_text", type="string", length=255, nullable=true)
     */
    private $commentText;

    /**
     * @var \DateTime $commentDate
     *
     * @ORM\Column(name="comment_date", type="date", nullable=true)
     */
    private $commentDate;

    /**
     * @var string $commentAuthor
     *
     * @ORM\Column(name="comment_author", type="string", length=45, nullable=true)
     */
    private $commentAuthor;

    /**
     * @var string $commentAuthorEmail
     *
     * @ORM\Column(name="comment_author_email", type="string", length=125, nullable=true)
     */
    private $commentAuthorEmail;

    /**
     * @var string $commentAuthorSite
     *
     * @ORM\Column(name="comment_author_site", type="string", length=125, nullable=true)
     */
    private $commentAuthorSite;

    /**
     * @var boolean $commentStatus
     *
     * @ORM\Column(name="comment_status", type="boolean", nullable=true)
     */
    private $commentStatus;

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
     * Get commentId
     *
     * @return integer 
     */
    public function getCommentId()
    {
        return $this->commentId;
    }

    /**
     * Set contentId
     *
     * @param integer $contentId
     * @return Comments
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
     * Set commentText
     *
     * @param string $commentText
     * @return Comments
     */
    public function setCommentText($commentText)
    {
        $this->commentText = $commentText;
    
        return $this;
    }

    /**
     * Get commentText
     *
     * @return string 
     */
    public function getCommentText()
    {
        return $this->commentText;
    }

    /**
     * Set commentDate
     *
     * @param \DateTime $commentDate
     * @return Comments
     */
    public function setCommentDate($commentDate)
    {
        $this->commentDate = $commentDate;
    
        return $this;
    }

    /**
     * Get commentDate
     *
     * @return \DateTime 
     */
    public function getCommentDate()
    {
        return $this->commentDate;
    }

    /**
     * Set commentAuthor
     *
     * @param string $commentAuthor
     * @return Comments
     */
    public function setCommentAuthor($commentAuthor)
    {
        $this->commentAuthor = $commentAuthor;
    
        return $this;
    }

    /**
     * Get commentAuthor
     *
     * @return string 
     */
    public function getCommentAuthor()
    {
        return $this->commentAuthor;
    }

    /**
     * Set commentAuthorEmail
     *
     * @param string $commentAuthorEmail
     * @return Comments
     */
    public function setCommentAuthorEmail($commentAuthorEmail)
    {
        $this->commentAuthorEmail = $commentAuthorEmail;
    
        return $this;
    }

    /**
     * Get commentAuthorEmail
     *
     * @return string 
     */
    public function getCommentAuthorEmail()
    {
        return $this->commentAuthorEmail;
    }

    /**
     * Set commentAuthorSite
     *
     * @param string $commentAuthorSite
     * @return Comments
     */
    public function setCommentAuthorSite($commentAuthorSite)
    {
        $this->commentAuthorSite = $commentAuthorSite;
    
        return $this;
    }

    /**
     * Get commentAuthorSite
     *
     * @return string 
     */
    public function getCommentAuthorSite()
    {
        return $this->commentAuthorSite;
    }

    /**
     * Set commentStatus
     *
     * @param boolean $commentStatus
     * @return Comments
     */
    public function setCommentStatus($commentStatus)
    {
        $this->commentStatus = $commentStatus;
    
        return $this;
    }

    /**
     * Get commentStatus
     *
     * @return boolean 
     */
    public function getCommentStatus()
    {
        return $this->commentStatus;
    }

    /**
     * Set contentDetail
     *
     * @param ContentDetail $contentDetail
     * @return Comments
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
