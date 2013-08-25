<?php

namespace ZG\Model\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * VoteOptions
 *
 * @ORM\Table(name="vote_options")
 * @ORM\Entity(repositoryClass="ZG\Model\Repositories\VoteOptionsRepository")
 */
class VoteOptions
{
    /**
     * @var integer $voteOptionId
     *
     * @ORM\Column(name="vote_option_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $voteOptionId;

    /**
     * @var string $voteOptionTitle
     *
     * @ORM\Column(name="vote_option_title", type="string", length=255, nullable=false)
     */
    private $voteOptionTitle;

    /**
     * @var integer $voteOptionCount
     *
     * @ORM\Column(name="vote_option_count", type="integer", nullable=true)
     */
    private $voteOptionCount;

    /**
     * @var integer $voteOptionPercent
     *
     * @ORM\Column(name="vote_option_percent", type="integer", nullable=true)
     */
    private $voteOptionPercent;

    /**
     * @var Votes
     *
     * @ORM\ManyToOne(targetEntity="Votes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="vote_id", referencedColumnName="vote_id")
     * })
     */
    private $vote;


    /**
     * Get voteOptionId
     *
     * @return integer 
     */
    public function getVoteOptionId()
    {
        return $this->voteOptionId;
    }

    /**
     * Set voteOptionTitle
     *
     * @param string $voteOptionTitle
     * @return VoteOptions
     */
    public function setVoteOptionTitle($voteOptionTitle)
    {
        $this->voteOptionTitle = $voteOptionTitle;
    
        return $this;
    }

    /**
     * Get voteOptionTitle
     *
     * @return string 
     */
    public function getVoteOptionTitle()
    {
        return $this->voteOptionTitle;
    }

    /**
     * Set voteOptionCount
     *
     * @param integer $voteOptionCount
     * @return VoteOptions
     */
    public function setVoteOptionCount($voteOptionCount)
    {
        $this->voteOptionCount = $voteOptionCount;
    
        return $this;
    }

    /**
     * Get voteOptionCount
     *
     * @return integer 
     */
    public function getVoteOptionCount()
    {
        return $this->voteOptionCount;
    }

    /**
     * Set voteOptionPercent
     *
     * @param integer $voteOptionPercent
     * @return VoteOptions
     */
    public function setVoteOptionPercent($voteOptionPercent)
    {
        $this->voteOptionPercent = $voteOptionPercent;
    
        return $this;
    }

    /**
     * Get voteOptionPercent
     *
     * @return integer 
     */
    public function getVoteOptionPercent()
    {
        return $this->voteOptionPercent;
    }

    /**
     * Set vote
     *
     * @param Votes $vote
     * @return VoteOptions
     */
    public function setVote(\Votes $vote = null)
    {
        $this->vote = $vote;
    
        return $this;
    }

    /**
     * Get vote
     *
     * @return Votes 
     */
    public function getVote()
    {
        return $this->vote;
    }
}
