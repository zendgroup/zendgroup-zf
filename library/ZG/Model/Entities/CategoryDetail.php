<?php

/**
 *
 * ZEND GROUP
 *
 * @name        CategoryDetail.php
 * @category    Model
 * @package 	Entities
 * @subpackage  
 * @author      Thuy Dinh Xuan <thuydx@zendgroup.vn>
 * @link 		http://zendgroup.vn
 * @copyright   Copyright (c) 2012-2013 ZEND GROUP. All rights reserved (http://www.zendgroup.vn)
 * @license     http://zendgroup.vn/license/
 * @version     $0.1$
 * 3:52:05 AM - Apr 3, 2013
 *
 * LICENSE
 *
 * This source file is copyrighted by ZEND GROUP, full details in LICENSE.txt.
 * It is also available through the Internet at this URL:
 * http://zendgroup.vn/license/
 * If you did not receive a copy of the license and are unable to
 * obtain it through the Internet, please send an email
 * to license@zendgroup.vn so we can send you a copy immediately.
 */
            


use Doctrine\ORM\Mapping as ORM;

/**
 * CategoryDetail
 *
 * @ORM\Table(name="category_detail")
 * @ORM\Entity
 */
class CategoryDetail
{
    /**
     * @var integer $categoryDetailId
     *
     * @ORM\Column(name="category_detail_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $categoryDetailId;

    /**
     * @var string $categoryTitle
     *
     * @ORM\Column(name="category_title", type="string", length=255, nullable=true)
     */
    private $categoryTitle;

    /**
     * @var string $categoryDescription
     *
     * @ORM\Column(name="category_description", type="string", length=255, nullable=true)
     */
    private $categoryDescription;

    /**
     * @var string $categoryMetaTitle
     *
     * @ORM\Column(name="category_meta_title", type="string", length=255, nullable=true)
     */
    private $categoryMetaTitle;

    /**
     * @var string $categoryMetaDescription
     *
     * @ORM\Column(name="category_meta_description", type="string", length=255, nullable=true)
     */
    private $categoryMetaDescription;

    /**
     * @var string $categoryMetaKeyword
     *
     * @ORM\Column(name="category_meta_keyword", type="string", length=255, nullable=true)
     */
    private $categoryMetaKeyword;

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
     * @var Locale
     *
     * @ORM\ManyToOne(targetEntity="Locale")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="locale_id", referencedColumnName="locale_id")
     * })
     */
    private $locale;


    /**
     * Get categoryDetailId
     *
     * @return integer 
     */
    public function getCategoryDetailId()
    {
        return $this->categoryDetailId;
    }

    /**
     * Set categoryTitle
     *
     * @param string $categoryTitle
     * @return CategoryDetail
     */
    public function setCategoryTitle($categoryTitle)
    {
        $this->categoryTitle = $categoryTitle;
        return $this;
    }

    /**
     * Get categoryTitle
     *
     * @return string 
     */
    public function getCategoryTitle()
    {
        return $this->categoryTitle;
    }

    /**
     * Set categoryDescription
     *
     * @param string $categoryDescription
     * @return CategoryDetail
     */
    public function setCategoryDescription($categoryDescription)
    {
        $this->categoryDescription = $categoryDescription;
        return $this;
    }

    /**
     * Get categoryDescription
     *
     * @return string 
     */
    public function getCategoryDescription()
    {
        return $this->categoryDescription;
    }

    /**
     * Set categoryMetaTitle
     *
     * @param string $categoryMetaTitle
     * @return CategoryDetail
     */
    public function setCategoryMetaTitle($categoryMetaTitle)
    {
        $this->categoryMetaTitle = $categoryMetaTitle;
        return $this;
    }

    /**
     * Get categoryMetaTitle
     *
     * @return string 
     */
    public function getCategoryMetaTitle()
    {
        return $this->categoryMetaTitle;
    }

    /**
     * Set categoryMetaDescription
     *
     * @param string $categoryMetaDescription
     * @return CategoryDetail
     */
    public function setCategoryMetaDescription($categoryMetaDescription)
    {
        $this->categoryMetaDescription = $categoryMetaDescription;
        return $this;
    }

    /**
     * Get categoryMetaDescription
     *
     * @return string 
     */
    public function getCategoryMetaDescription()
    {
        return $this->categoryMetaDescription;
    }

    /**
     * Set categoryMetaKeyword
     *
     * @param string $categoryMetaKeyword
     * @return CategoryDetail
     */
    public function setCategoryMetaKeyword($categoryMetaKeyword)
    {
        $this->categoryMetaKeyword = $categoryMetaKeyword;
        return $this;
    }

    /**
     * Get categoryMetaKeyword
     *
     * @return string 
     */
    public function getCategoryMetaKeyword()
    {
        return $this->categoryMetaKeyword;
    }

    /**
     * Set category
     *
     * @param Categories $category
     * @return CategoryDetail
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
     * Set locale
     *
     * @param Locale $locale
     * @return CategoryDetail
     */
    public function setLocale(\Locale $locale = null)
    {
        $this->locale = $locale;
        return $this;
    }

    /**
     * Get locale
     *
     * @return Locale 
     */
    public function getLocale()
    {
        return $this->locale;
    }
}