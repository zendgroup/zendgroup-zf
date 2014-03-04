<?php

/**
 * ZEND GROUP
 *
 * @name        Reviews.php
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
 * Reviews
 *
 * @ORM\Table(name="reviews", indexes={@ORM\Index(name="fk_review_content_idx", columns={"content_detail_id"})})
 * @ORM\Entity(repositoryClass="ZG\Model\Repositories\Reviews")
 */
class Reviews
{
    /**
     * @var integer
     *
     * @ORM\Column(name="review_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $reviewId;

    /**
     * @var integer
     *
     * @ORM\Column(name="review_max", type="integer", nullable=true)
     */
    private $reviewMax;

    /**
     * @var integer
     *
     * @ORM\Column(name="review_min", type="integer", nullable=true)
     */
    private $reviewMin;

    /**
     * @var integer
     *
     * @ORM\Column(name="review_average", type="integer", nullable=true)
     */
    private $reviewAverage;

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
     * Get reviewId
     *
     * @return integer 
     */
    public function getReviewId()
    {
        return $this->reviewId;
    }

    /**
     * Set reviewMax
     *
     * @param integer $reviewMax
     *
     * @return Reviews
     */
    public function setReviewMax($reviewMax)
    {
        $this->reviewMax = $reviewMax;
    
        return $this;
    }

    /**
     * Get reviewMax
     *
     * @return integer 
     */
    public function getReviewMax()
    {
        return $this->reviewMax;
    }

    /**
     * Set reviewMin
     *
     * @param integer $reviewMin
     *
     * @return Reviews
     */
    public function setReviewMin($reviewMin)
    {
        $this->reviewMin = $reviewMin;
    
        return $this;
    }

    /**
     * Get reviewMin
     *
     * @return integer 
     */
    public function getReviewMin()
    {
        return $this->reviewMin;
    }

    /**
     * Set reviewAverage
     *
     * @param integer $reviewAverage
     *
     * @return Reviews
     */
    public function setReviewAverage($reviewAverage)
    {
        $this->reviewAverage = $reviewAverage;
    
        return $this;
    }

    /**
     * Get reviewAverage
     *
     * @return integer 
     */
    public function getReviewAverage()
    {
        return $this->reviewAverage;
    }

    /**
     * Set contentDetail
     *
     * @param \ZG\Model\Entities\ContentDetail $contentDetail
     *
     * @return Reviews
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
