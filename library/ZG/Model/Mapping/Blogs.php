<?php

/**
 * ZEND GROUP
 *
 * @name        Blogs.php
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
 * Blogs
 *
 * @ORM\Table(name="blogs", indexes={@ORM\Index(name="fk_user_blog_idx", columns={"user_id"})})
 * @ORM\Entity(repositoryClass="ZG\Model\Repositories\Blogs")
 */
class Blogs
{
    /**
     * @var integer
     *
     * @ORM\Column(name="blog_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $blogId;

    /**
     * @var string
     *
     * @ORM\Column(name="blog_title", type="string", length=255, nullable=false)
     */
    private $blogTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="blog_description", type="string", length=255, nullable=true)
     */
    private $blogDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="blog_slogan", type="string", length=255, nullable=true)
     */
    private $blogSlogan;

    /**
     * @var string
     *
     * @ORM\Column(name="blog_logo", type="string", length=255, nullable=true)
     */
    private $blogLogo;

    /**
     * @var string
     *
     * @ORM\Column(name="blog_meta_keyword", type="string", length=255, nullable=true)
     */
    private $blogMetaKeyword;

    /**
     * @var string
     *
     * @ORM\Column(name="blog_copyright", type="string", length=255, nullable=true)
     */
    private $blogCopyright;

    /**
     * @var string
     *
     * @ORM\Column(name="blog_url", type="string", length=255, nullable=true)
     */
    private $blogUrl;

    /**
     * @var \ZG\Model\Mapping\Users
     *
     * @ORM\ManyToOne(targetEntity="ZG\Model\Mapping\Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="user_id")
     * })
     */
    private $user;


}
