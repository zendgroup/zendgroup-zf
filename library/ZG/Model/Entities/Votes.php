<?php

namespace ZG\Model\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Votes
 *
 * @ORM\Table(name="votes")
 * @ORM\Entity(repositoryClass="ZG\Model\Repositories\VotesRepository")
 */
class Votes
{
    /**
     * @var integer $voteId
     *
     * @ORM\Column(name="vote_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $voteId;

    /**
     * @var string $voteTitle
     *
     * @ORM\Column(name="vote_title", type="string", length=45, nullable=true)
     */
    private $voteTitle;

    /**
     * @var integer $voteCount
     *
     * @ORM\Column(name="vote_count", type="integer", nullable=true)
     */
    private $voteCount;

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
     * Get voteId
     *
     * @return integer 
     */
    public function getVoteId()
    {
        return $this->voteId;
    }

    /**
     * Set voteTitle
     *
     * @param string $voteTitle
     * @return Votes
     */
    public function setVoteTitle($voteTitle)
    {
        $this->voteTitle = $voteTitle;
    
        return $this;
    }

    /**
     * Get voteTitle
     *
     * @return string 
     */
    public function getVoteTitle()
    {
        return $this->voteTitle;
    }

    /**
     * Set voteCount
     *
     * @param integer $voteCount
     * @return Votes
     */
    public function setVoteCount($voteCount)
    {
        $this->voteCount = $voteCount;
    
        return $this;
    }

    /**
     * Get voteCount
     *
     * @return integer 
     */
    public function getVoteCount()
    {
        return $this->voteCount;
    }

    /**
     * Set contentDetail
     *
     * @param ContentDetail $contentDetail
     * @return Votes
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
