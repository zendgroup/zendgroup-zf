<?php

/**
 * ZEND GROUP
 *
 * @name        CategoryAssociations.php
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
 * CategoryAssociations
 *
 * @ORM\Table(name="category_associations", indexes={@ORM\Index(name="fk_category_content_idx", columns={"content_id"}), @ORM\Index(name="fk_category_cat_idx", columns={"category_id"})})
 * @ORM\Entity(repositoryClass="ZG\Model\Repositories\CategoryAssociations")
 */
class CategoryAssociations
{
    /**
     * @var integer
     *
     * @ORM\Column(name="category_association_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $categoryAssociationId;

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
     * @var \ZG\Model\Entities\Content
     *
     * @ORM\ManyToOne(targetEntity="ZG\Model\Entities\Content")
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
     * @param \ZG\Model\Entities\Categories $category
     *
     * @return CategoryAssociations
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
     * Set content
     *
     * @param \ZG\Model\Entities\Content $content
     *
     * @return CategoryAssociations
     */
    public function setContent(\ZG\Model\Entities\Content $content = null)
    {
        $this->content = $content;
    
        return $this;
    }

    /**
     * Get content
     *
     * @return \ZG\Model\Entities\Content 
     */
    public function getContent()
    {
        return $this->content;
    }
}
