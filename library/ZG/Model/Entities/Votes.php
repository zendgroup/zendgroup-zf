<?php

/**
 * ZEND GROUP
 *
 * @name        Votes.php
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
 * Votes
 *
 * @ORM\Table(name="votes", indexes={@ORM\Index(name="fk_vote_content_idx", columns={"content_detail_id"})})
 * @ORM\Entity(repositoryClass="ZG\Model\Repositories\Votes")
 */
class Votes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="vote_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $voteId;

    /**
     * @var string
     *
     * @ORM\Column(name="vote_title", type="string", length=45, nullable=true)
     */
    private $voteTitle;

    /**
     * @var integer
     *
     * @ORM\Column(name="vote_count", type="integer", nullable=true)
     */
    private $voteCount;

    /**
     * @var \ZG\Model\Entities\ContentDetail
     *
     * @ORM\ManyToOne(targetEntity="ZG\Model\Entities\ContentDetail")
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
     *
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
     *
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
     * @param \ZG\Model\Entities\ContentDetail $contentDetail
     *
     * @return Votes
     */
    public function setContentDetail(\ZG\Model\Entities\ContentDetail $contentDetail = null)
    {
        $this->contentDetail = $contentDetail;
    
        return $this;
    }

    /**
     * Get contentDetail
     *
     * @return \ZG\Model\Entities\ContentDetail 
     */
    public function getContentDetail()
    {
        return $this->contentDetail;
    }
}
