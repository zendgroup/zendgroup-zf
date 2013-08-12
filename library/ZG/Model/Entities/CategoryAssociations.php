<?php

/**
 *
 * ZEND GROUP
 *
 * @name        CategoryAssociations.php
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
 * CategoryAssociations
 *
 * @ORM\Table(name="category_associations")
 * @ORM\Entity
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
     * @var Content
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @ORM\OneToOne(targetEntity="Content")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="content_id", referencedColumnName="content_id")
     * })
     */
    private $content;

    /**
     * @var Categories
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @ORM\OneToOne(targetEntity="Categories")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_id", referencedColumnName="category_id")
     * })
     */
    private $category;


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
     * Set content
     *
     * @param Content $content
     * @return CategoryAssociations
     */
    public function setContent(\Content $content)
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

    /**
     * Set category
     *
     * @param Categories $category
     * @return CategoryAssociations
     */
    public function setCategory(\Categories $category)
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
}