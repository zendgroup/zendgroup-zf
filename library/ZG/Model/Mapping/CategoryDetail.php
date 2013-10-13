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

namespace ZG\Model\Mapping;

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
     * @var \ZG\Model\Mapping\Categories
     *
     * @ORM\ManyToOne(targetEntity="ZG\Model\Mapping\Categories")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_id", referencedColumnName="category_id")
     * })
     */
    private $category;

    /**
     * @var \ZG\Model\Mapping\Languages
     *
     * @ORM\ManyToOne(targetEntity="ZG\Model\Mapping\Languages")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="language_id", referencedColumnName="language_id")
     * })
     */
    private $language;


}
