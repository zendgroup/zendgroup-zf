<?php

/**
 * ZEND GROUP
 *
 * @name        Menus.php
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
 * Menus
 *
 * @ORM\Table(name="menus", uniqueConstraints={@ORM\UniqueConstraint(name="idx_menu_unique", columns={"parent_id", "language_id", "menu_slug"})}, indexes={@ORM\Index(name="idx_menu_left_right", columns={"lft", "rgt"}), @ORM\Index(name="idx_slug", columns={"menu_slug"}), @ORM\Index(name="idx_path", columns={"menu_path"}), @ORM\Index(name="idx_language", columns={"language_id"}), @ORM\Index(name="idx_menutype", columns={"menu_type"}), @ORM\Index(name="idx_parent", columns={"parent_id"})})
 * @ORM\Entity(repositoryClass="ZG\Model\Repositories\Menus")
 */
class Menus
{
    /**
     * @var integer
     *
     * @ORM\Column(name="menu_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $menuId;

    /**
     * @var integer
     *
     * @ORM\Column(name="parent_id", type="integer", nullable=true)
     */
    private $parentId;

    /**
     * @var integer
     *
     * @ORM\Column(name="language_id", type="integer", nullable=true)
     */
    private $languageId;

    /**
     * @var string
     *
     * @ORM\Column(name="menu_title", type="string", length=255, nullable=true)
     */
    private $menuTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="menu_slug", type="string", length=255, nullable=true)
     */
    private $menuSlug;

    /**
     * @var string
     *
     * @ORM\Column(name="menu_path", type="string", length=1024, nullable=true)
     */
    private $menuPath;

    /**
     * @var string
     *
     * @ORM\Column(name="menu_type", type="string", length=255, nullable=true)
     */
    private $menuType;

    /**
     * @var string
     *
     * @ORM\Column(name="menu_link", type="string", length=1024, nullable=true)
     */
    private $menuLink;

    /**
     * @var string
     *
     * @ORM\Column(name="menu_target", type="string", length=255, nullable=true)
     */
    private $menuTarget;

    /**
     * @var string
     *
     * @ORM\Column(name="note", type="string", length=45, nullable=true)
     */
    private $note;

    /**
     * @var boolean
     *
     * @ORM\Column(name="published", type="boolean", nullable=true)
     */
    private $published;

    /**
     * @var string
     *
     * @ORM\Column(name="menu_icon", type="string", length=255, nullable=true)
     */
    private $menuIcon;

    /**
     * @var string
     *
     * @ORM\Column(name="params", type="text", nullable=true)
     */
    private $params;

    /**
     * @var boolean
     *
     * @ORM\Column(name="home", type="boolean", nullable=true)
     */
    private $home = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="lft", type="integer", nullable=true)
     */
    private $lft;

    /**
     * @var integer
     *
     * @ORM\Column(name="rgt", type="integer", nullable=true)
     */
    private $rgt;

    /**
     * @var integer
     *
     * @ORM\Column(name="depth", type="integer", nullable=true)
     */
    private $depth;


}
