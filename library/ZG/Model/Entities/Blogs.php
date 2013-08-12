<?php

/**
 *
 * ZEND GROUP
 *
 * @name        Blogs.php
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
 * Blogs
 *
 * @ORM\Table(name="blogs")
 * @ORM\Entity
 */
class Blogs
{
    /**
     * @var integer $blogId
     *
     * @ORM\Column(name="blog_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $blogId;

    /**
     * @var string $blogTitle
     *
     * @ORM\Column(name="blog_title", type="string", length=255, nullable=false)
     */
    private $blogTitle;

    /**
     * @var string $blogDescription
     *
     * @ORM\Column(name="blog_description", type="string", length=255, nullable=true)
     */
    private $blogDescription;

    /**
     * @var string $blogSlogan
     *
     * @ORM\Column(name="blog_slogan", type="string", length=255, nullable=true)
     */
    private $blogSlogan;

    /**
     * @var string $blogLogo
     *
     * @ORM\Column(name="blog_logo", type="string", length=255, nullable=true)
     */
    private $blogLogo;

    /**
     * @var string $blogMetaKeyword
     *
     * @ORM\Column(name="blog_meta_keyword", type="string", length=255, nullable=true)
     */
    private $blogMetaKeyword;

    /**
     * @var string $blogCopyright
     *
     * @ORM\Column(name="blog_copyright", type="string", length=255, nullable=true)
     */
    private $blogCopyright;

    /**
     * @var string $blogUrl
     *
     * @ORM\Column(name="blog_url", type="string", length=255, nullable=true)
     */
    private $blogUrl;

    /**
     * @var Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="user_id")
     * })
     */
    private $user;


    /**
     * Get blogId
     *
     * @return integer 
     */
    public function getBlogId()
    {
        return $this->blogId;
    }

    /**
     * Set blogTitle
     *
     * @param string $blogTitle
     * @return Blogs
     */
    public function setBlogTitle($blogTitle)
    {
        $this->blogTitle = $blogTitle;
        return $this;
    }

    /**
     * Get blogTitle
     *
     * @return string 
     */
    public function getBlogTitle()
    {
        return $this->blogTitle;
    }

    /**
     * Set blogDescription
     *
     * @param string $blogDescription
     * @return Blogs
     */
    public function setBlogDescription($blogDescription)
    {
        $this->blogDescription = $blogDescription;
        return $this;
    }

    /**
     * Get blogDescription
     *
     * @return string 
     */
    public function getBlogDescription()
    {
        return $this->blogDescription;
    }

    /**
     * Set blogSlogan
     *
     * @param string $blogSlogan
     * @return Blogs
     */
    public function setBlogSlogan($blogSlogan)
    {
        $this->blogSlogan = $blogSlogan;
        return $this;
    }

    /**
     * Get blogSlogan
     *
     * @return string 
     */
    public function getBlogSlogan()
    {
        return $this->blogSlogan;
    }

    /**
     * Set blogLogo
     *
     * @param string $blogLogo
     * @return Blogs
     */
    public function setBlogLogo($blogLogo)
    {
        $this->blogLogo = $blogLogo;
        return $this;
    }

    /**
     * Get blogLogo
     *
     * @return string 
     */
    public function getBlogLogo()
    {
        return $this->blogLogo;
    }

    /**
     * Set blogMetaKeyword
     *
     * @param string $blogMetaKeyword
     * @return Blogs
     */
    public function setBlogMetaKeyword($blogMetaKeyword)
    {
        $this->blogMetaKeyword = $blogMetaKeyword;
        return $this;
    }

    /**
     * Get blogMetaKeyword
     *
     * @return string 
     */
    public function getBlogMetaKeyword()
    {
        return $this->blogMetaKeyword;
    }

    /**
     * Set blogCopyright
     *
     * @param string $blogCopyright
     * @return Blogs
     */
    public function setBlogCopyright($blogCopyright)
    {
        $this->blogCopyright = $blogCopyright;
        return $this;
    }

    /**
     * Get blogCopyright
     *
     * @return string 
     */
    public function getBlogCopyright()
    {
        return $this->blogCopyright;
    }

    /**
     * Set blogUrl
     *
     * @param string $blogUrl
     * @return Blogs
     */
    public function setBlogUrl($blogUrl)
    {
        $this->blogUrl = $blogUrl;
        return $this;
    }

    /**
     * Get blogUrl
     *
     * @return string 
     */
    public function getBlogUrl()
    {
        return $this->blogUrl;
    }

    /**
     * Set user
     *
     * @param Users $user
     * @return Blogs
     */
    public function setUser(\Users $user = null)
    {
        $this->user = $user;
        return $this;
    }

    /**
     * Get user
     *
     * @return Users 
     */
    public function getUser()
    {
        return $this->user;
    }
}