<?php

/**
 * ZEND GROUP
 *
 * @name        Categories.php
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
 * Categories
 *
 * @ORM\Table(name="categories")
 * @ORM\Entity(repositoryClass="ZG\Model\Repositories\Categories")
 */
class Categories
{
    /**
     * @var integer
     *
     * @ORM\Column(name="category_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $categoryId;

    /**
     * @var integer
     *
     * @ORM\Column(name="category_visit", type="integer", nullable=true)
     */
    private $categoryVisit;

    /**
     * @var string
     *
     * @ORM\Column(name="category_icon", type="string", length=45, nullable=true)
     */
    private $categoryIcon;

    /**
     * @var string
     *
     * @ORM\Column(name="category_password", type="string", length=45, nullable=true)
     */
    private $categoryPassword;

    /**
     * @var integer
     *
     * @ORM\Column(name="content_count", type="integer", nullable=true)
     */
    private $contentCount;

    /**
     * @var boolean
     *
     * @ORM\Column(name="hide_form_menu", type="boolean", nullable=true)
     */
    private $hideFormMenu;

    /**
     * @var integer
     *
     * @ORM\Column(name="sort_order", type="integer", nullable=true)
     */
    private $sortOrder;

    /**
     * @var string
     *
     * @ORM\Column(name="general_url", type="string", length=255, nullable=true)
     */
    private $generalUrl;

    /**
     * @var integer
     *
     * @ORM\Column(name="category_left", type="integer", nullable=true)
     */
    private $categoryLeft;

    /**
     * @var integer
     *
     * @ORM\Column(name="category_right", type="integer", nullable=true)
     */
    private $categoryRight;


}
