<?php

namespace ZG\Model\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categories
 *
 * @ORM\Table(name="categories")
 * @ORM\Entity(repositoryClass="ZG\Model\Repositories\CategoriesRepository")
 */
class Categories
{
    /**
     * @var integer $categoryId
     *
     * @ORM\Column(name="category_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $categoryId;

    /**
     * @var integer $categoryVisit
     *
     * @ORM\Column(name="category_visit", type="integer", nullable=true)
     */
    private $categoryVisit;

    /**
     * @var string $categoryIcon
     *
     * @ORM\Column(name="category_icon", type="string", length=45, nullable=true)
     */
    private $categoryIcon;

    /**
     * @var string $categoryPassword
     *
     * @ORM\Column(name="category_password", type="string", length=45, nullable=true)
     */
    private $categoryPassword;

    /**
     * @var integer $contentCount
     *
     * @ORM\Column(name="content_count", type="integer", nullable=true)
     */
    private $contentCount;

    /**
     * @var boolean $hideFormMenu
     *
     * @ORM\Column(name="hide_form_menu", type="boolean", nullable=true)
     */
    private $hideFormMenu;

    /**
     * @var integer $sortOrder
     *
     * @ORM\Column(name="sort_order", type="integer", nullable=true)
     */
    private $sortOrder;

    /**
     * @var string $generalUrl
     *
     * @ORM\Column(name="general_url", type="string", length=255, nullable=true)
     */
    private $generalUrl;

    /**
     * @var integer $categoryLeft
     *
     * @ORM\Column(name="category_left", type="integer", nullable=true)
     */
    private $categoryLeft;

    /**
     * @var integer $categoryRight
     *
     * @ORM\Column(name="category_right", type="integer", nullable=true)
     */
    private $categoryRight;


    /**
     * Get categoryId
     *
     * @return integer 
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * Set categoryVisit
     *
     * @param integer $categoryVisit
     * @return Categories
     */
    public function setCategoryVisit($categoryVisit)
    {
        $this->categoryVisit = $categoryVisit;
    
        return $this;
    }

    /**
     * Get categoryVisit
     *
     * @return integer 
     */
    public function getCategoryVisit()
    {
        return $this->categoryVisit;
    }

    /**
     * Set categoryIcon
     *
     * @param string $categoryIcon
     * @return Categories
     */
    public function setCategoryIcon($categoryIcon)
    {
        $this->categoryIcon = $categoryIcon;
    
        return $this;
    }

    /**
     * Get categoryIcon
     *
     * @return string 
     */
    public function getCategoryIcon()
    {
        return $this->categoryIcon;
    }

    /**
     * Set categoryPassword
     *
     * @param string $categoryPassword
     * @return Categories
     */
    public function setCategoryPassword($categoryPassword)
    {
        $this->categoryPassword = $categoryPassword;
    
        return $this;
    }

    /**
     * Get categoryPassword
     *
     * @return string 
     */
    public function getCategoryPassword()
    {
        return $this->categoryPassword;
    }

    /**
     * Set contentCount
     *
     * @param integer $contentCount
     * @return Categories
     */
    public function setContentCount($contentCount)
    {
        $this->contentCount = $contentCount;
    
        return $this;
    }

    /**
     * Get contentCount
     *
     * @return integer 
     */
    public function getContentCount()
    {
        return $this->contentCount;
    }

    /**
     * Set hideFormMenu
     *
     * @param boolean $hideFormMenu
     * @return Categories
     */
    public function setHideFormMenu($hideFormMenu)
    {
        $this->hideFormMenu = $hideFormMenu;
    
        return $this;
    }

    /**
     * Get hideFormMenu
     *
     * @return boolean 
     */
    public function getHideFormMenu()
    {
        return $this->hideFormMenu;
    }

    /**
     * Set sortOrder
     *
     * @param integer $sortOrder
     * @return Categories
     */
    public function setSortOrder($sortOrder)
    {
        $this->sortOrder = $sortOrder;
    
        return $this;
    }

    /**
     * Get sortOrder
     *
     * @return integer 
     */
    public function getSortOrder()
    {
        return $this->sortOrder;
    }

    /**
     * Set generalUrl
     *
     * @param string $generalUrl
     * @return Categories
     */
    public function setGeneralUrl($generalUrl)
    {
        $this->generalUrl = $generalUrl;
    
        return $this;
    }

    /**
     * Get generalUrl
     *
     * @return string 
     */
    public function getGeneralUrl()
    {
        return $this->generalUrl;
    }

    /**
     * Set categoryLeft
     *
     * @param integer $categoryLeft
     * @return Categories
     */
    public function setCategoryLeft($categoryLeft)
    {
        $this->categoryLeft = $categoryLeft;
    
        return $this;
    }

    /**
     * Get categoryLeft
     *
     * @return integer 
     */
    public function getCategoryLeft()
    {
        return $this->categoryLeft;
    }

    /**
     * Set categoryRight
     *
     * @param integer $categoryRight
     * @return Categories
     */
    public function setCategoryRight($categoryRight)
    {
        $this->categoryRight = $categoryRight;
    
        return $this;
    }

    /**
     * Get categoryRight
     *
     * @return integer 
     */
    public function getCategoryRight()
    {
        return $this->categoryRight;
    }
}
