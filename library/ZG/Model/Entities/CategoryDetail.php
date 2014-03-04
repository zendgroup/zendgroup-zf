<?php

/**
 * ZEND GROUP
 *
 * @name        CategoryDetail.php
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
 * CategoryDetail
 *
 * @ORM\Table(name="category_detail", indexes={@ORM\Index(name="fk_category_detail_idx", columns={"category_id"}), @ORM\Index(name="fk_category_language_idx", columns={"language_id"})})
 * @ORM\Entity(repositoryClass="ZG\Model\Repositories\CategoryDetail")
 */
class CategoryDetail
{
    /**
     * @var integer
     *
     * @ORM\Column(name="category_detail_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $categoryDetailId;

    /**
     * @var string
     *
     * @ORM\Column(name="category_title", type="string", length=255, nullable=true)
     */
    private $categoryTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="category_description", type="string", length=255, nullable=true)
     */
    private $categoryDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="category_meta_title", type="string", length=255, nullable=true)
     */
    private $categoryMetaTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="category_meta_description", type="string", length=255, nullable=true)
     */
    private $categoryMetaDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="category_meta_keyword", type="string", length=255, nullable=true)
     */
    private $categoryMetaKeyword;

    /**
     * @var \ZG\Model\Entities\Categories
     *
     * @ORM\ManyToOne(targetEntity="ZG\Model\Entities\Categories")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_id", referencedColumnName="category_id")
     * })
     */
    private $category;

    /**
     * @var \ZG\Model\Entities\Languages
     *
     * @ORM\ManyToOne(targetEntity="ZG\Model\Entities\Languages")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="language_id", referencedColumnName="language_id")
     * })
     */
    private $language;


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
     *
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
     *
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
     *
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
     *
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
     *
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
     * @param \ZG\Model\Entities\Categories $category
     *
     * @return CategoryDetail
     */
    public function setCategory(\ZG\Model\Entities\Categories $category = null)
    {
        $this->category = $category;
    
        return $this;
    }

    /**
     * Get category
     *
     * @return \ZG\Model\Entities\Categories 
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set language
     *
     * @param \ZG\Model\Entities\Languages $language
     *
     * @return CategoryDetail
     */
    public function setLanguage(\ZG\Model\Entities\Languages $language = null)
    {
        $this->language = $language;
    
        return $this;
    }

    /**
     * Get language
     *
     * @return \ZG\Model\Entities\Languages 
     */
    public function getLanguage()
    {
        return $this->language;
    }
}
