<?php

/**
 *
 * ZEND GROUP
 *
 * @name        Content.php
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
 * Content
 *
 * @ORM\Table(name="content")
 * @ORM\Entity
 */
class Content
{
    /**
     * @var integer $contentId
     *
     * @ORM\Column(name="content_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $contentId;

    /**
     * @var integer $created
     *
     * @ORM\Column(name="created", type="integer", nullable=true)
     */
    private $created;

    /**
     * @var integer $modified
     *
     * @ORM\Column(name="modified", type="integer", nullable=true)
     */
    private $modified;

    /**
     * @var boolean $hideFromMenu
     *
     * @ORM\Column(name="hide_from_menu", type="boolean", nullable=true)
     */
    private $hideFromMenu;

    /**
     * @var integer $contentContentId
     *
     * @ORM\Column(name="content_content_id", type="integer", nullable=false)
     */
    private $contentContentId;

    /**
     * @var integer $ordering
     *
     * @ORM\Column(name="ordering", type="integer", nullable=false)
     */
    private $ordering;

    /**
     * @var text $contentParams
     *
     * @ORM\Column(name="content_params", type="text", nullable=true)
     */
    private $contentParams;

    /**
     * @var ContentTypes
     *
     * @ORM\ManyToOne(targetEntity="ContentTypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="content_type_id", referencedColumnName="content_type_id")
     * })
     */
    private $contentType;

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
     * Get contentId
     *
     * @return integer 
     */
    public function getContentId()
    {
        return $this->contentId;
    }

    /**
     * Set created
     *
     * @param integer $created
     * @return Content
     */
    public function setCreated($created)
    {
        $this->created = $created;
        return $this;
    }

    /**
     * Get created
     *
     * @return integer 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set modified
     *
     * @param integer $modified
     * @return Content
     */
    public function setModified($modified)
    {
        $this->modified = $modified;
        return $this;
    }

    /**
     * Get modified
     *
     * @return integer 
     */
    public function getModified()
    {
        return $this->modified;
    }

    /**
     * Set hideFromMenu
     *
     * @param boolean $hideFromMenu
     * @return Content
     */
    public function setHideFromMenu($hideFromMenu)
    {
        $this->hideFromMenu = $hideFromMenu;
        return $this;
    }

    /**
     * Get hideFromMenu
     *
     * @return boolean 
     */
    public function getHideFromMenu()
    {
        return $this->hideFromMenu;
    }

    /**
     * Set contentContentId
     *
     * @param integer $contentContentId
     * @return Content
     */
    public function setContentContentId($contentContentId)
    {
        $this->contentContentId = $contentContentId;
        return $this;
    }

    /**
     * Get contentContentId
     *
     * @return integer 
     */
    public function getContentContentId()
    {
        return $this->contentContentId;
    }

    /**
     * Set ordering
     *
     * @param integer $ordering
     * @return Content
     */
    public function setOrdering($ordering)
    {
        $this->ordering = $ordering;
        return $this;
    }

    /**
     * Get ordering
     *
     * @return integer 
     */
    public function getOrdering()
    {
        return $this->ordering;
    }

    /**
     * Set contentParams
     *
     * @param text $contentParams
     * @return Content
     */
    public function setContentParams($contentParams)
    {
        $this->contentParams = $contentParams;
        return $this;
    }

    /**
     * Get contentParams
     *
     * @return text 
     */
    public function getContentParams()
    {
        return $this->contentParams;
    }

    /**
     * Set contentType
     *
     * @param ContentTypes $contentType
     * @return Content
     */
    public function setContentType(\ContentTypes $contentType = null)
    {
        $this->contentType = $contentType;
        return $this;
    }

    /**
     * Get contentType
     *
     * @return ContentTypes 
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     * Set user
     *
     * @param Users $user
     * @return Content
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