<?php

namespace ZG\Model\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategoryAssociations
 *
 * @ORM\Table(name="category_associations")
 * @ORM\Entity(repositoryClass="ZG\Model\Repositories\CategoryAssociationsRepository")
 */
class CategoryAssociations
{
    /**
     * @var integer $categoryAssociationId
     *
     * @ORM\Column(name="category_association_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $categoryAssociationId;

    /**
     * @var Categories
     *
     * @ORM\ManyToOne(targetEntity="Categories")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_id", referencedColumnName="category_id")
     * })
     */
    private $category;

    /**
     * @var Content
     *
     * @ORM\ManyToOne(targetEntity="Content")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="content_id", referencedColumnName="content_id")
     * })
     */
    private $content;


    /**
     * Get categoryAssociationId
     *
     * @return integer 
     */
    public function getCategoryAssociationId()
    {
        return $this->categoryAssociationId;
    }

    /**
     * Set category
     *
     * @param Categories $category
     * @return CategoryAssociations
     */
    public function setCategory(\Categories $category = null)
    {
        $this->category = $category;
    
        return $this;
    }

    /**
     * Get category
     *
     * @return Categories 
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set content
     *
     * @param Content $content
     * @return CategoryAssociations
     */
    public function setContent(\Content $content = null)
    {
        $this->content = $content;
    
        return $this;
    }

    /**
     * Get content
     *
     * @return Content 
     */
    public function getContent()
    {
        return $this->content;
    }
}
