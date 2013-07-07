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
     * @var string $voteOption
     *
     * @ORM\Column(name="vote_option", type="string", length=255, nullable=true)
     */
    private $voteOption;

    /**
     * @var integer $voteOptionCount
     *
     * @ORM\Column(name="vote_option_count", type="integer", nullable=true)
     */
    private $voteOptionCount;

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
     * Set voteOption
     *
     * @param string $voteOption
     * @return VoteOptions
     */
    public function setVoteOption($voteOption)
    {
        $this->voteOption = $voteOption;
    
        return $this;
    }

    /**
     * Get voteOption
     *
     * @return string 
     */
    public function getVoteOption()
    {
        return $this->voteOption;
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
