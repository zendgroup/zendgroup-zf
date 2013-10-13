<?php

/**
 * ZEND GROUP
 *
 * @name        VoteOptions.php
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
 * VoteOptions
 *
 * @ORM\Table(name="vote_options", indexes={@ORM\Index(name="fk_option_vote_idx", columns={"vote_id"})})
 * @ORM\Entity(repositoryClass="ZG\Model\Repositories\VoteOptions")
 */
class VoteOptions
{
    /**
     * @var integer
     *
     * @ORM\Column(name="vote_option_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $voteOptionId;

    /**
     * @var string
     *
     * @ORM\Column(name="vote_option_title", type="string", length=255, nullable=false)
     */
    private $voteOptionTitle;

    /**
     * @var integer
     *
     * @ORM\Column(name="vote_option_count", type="integer", nullable=true)
     */
    private $voteOptionCount = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="vote_option_percent", type="integer", nullable=true)
     */
    private $voteOptionPercent = '0';

    /**
     * @var \ZG\Model\Entities\Votes
     *
     * @ORM\ManyToOne(targetEntity="ZG\Model\Entities\Votes")
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
     *
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
     *
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
     *
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
     * @param \ZG\Model\Entities\Votes $vote
     *
     * @return VoteOptions
     */
    public function setVote(\ZG\Model\Entities\Votes $vote = null)
    {
        $this->vote = $vote;
    
        return $this;
    }

    /**
     * Get vote
     *
     * @return \ZG\Model\Entities\Votes 
     */
    public function getVote()
    {
        return $this->vote;
    }
}
