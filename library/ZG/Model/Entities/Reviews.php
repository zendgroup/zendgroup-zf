<?php

namespace ZG\Model\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reviews
 *
 * @ORM\Table(name="reviews")
 * @ORM\Entity(repositoryClass="ZG\Model\Repositories\ReviewsRepository")
 */
class Reviews
{
    /**
     * @var integer $reviewId
     *
     * @ORM\Column(name="review_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $reviewId;

    /**
     * @var integer $reviewMax
     *
     * @ORM\Column(name="review_max", type="integer", nullable=true)
     */
    private $reviewMax;

    /**
     * @var integer $reviewMin
     *
     * @ORM\Column(name="review_min", type="integer", nullable=true)
     */
    private $reviewMin;

    /**
     * @var integer $reviewAverage
     *
     * @ORM\Column(name="review_average", type="integer", nullable=true)
     */
    private $reviewAverage;

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
     * @param ContentDetail $contentDetail
     * @return Reviews
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
