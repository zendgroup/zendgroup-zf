<?php

/**
 * ZEND GROUP
 *
 * @name        Content.php
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
 * Content
 *
 * @ORM\Table(name="content", indexes={@ORM\Index(name="fk_content_type_idx", columns={"content_type_id"}), @ORM\Index(name="fk_content_user_idx", columns={"user_id"})})
 * @ORM\Entity(repositoryClass="ZG\Model\Repositories\Content")
 */
class Content
{
    /**
     * @var integer
     *
     * @ORM\Column(name="content_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $contentId;

    /**
     * @var integer
     *
     * @ORM\Column(name="created", type="integer", nullable=true)
     */
    private $created;

    /**
     * @var integer
     *
     * @ORM\Column(name="modified", type="integer", nullable=true)
     */
    private $modified;

    /**
     * @var boolean
     *
     * @ORM\Column(name="hide_from_menu", type="boolean", nullable=true)
     */
    private $hideFromMenu;

    /**
     * @var integer
     *
     * @ORM\Column(name="ordering", type="integer", nullable=false)
     */
    private $ordering;

    /**
     * @var string
     *
     * @ORM\Column(name="content_params", type="text", nullable=true)
     */
    private $contentParams;

    /**
     * @var \ZG\Model\Entities\ContentTypes
     *
     * @ORM\ManyToOne(targetEntity="ZG\Model\Entities\ContentTypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="content_type_id", referencedColumnName="content_type_id")
     * })
     */
    private $contentType;

    /**
     * @var \ZG\Model\Entities\Users
     *
     * @ORM\ManyToOne(targetEntity="ZG\Model\Entities\Users")
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
     *
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
     *
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
     *
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
     * Set ordering
     *
     * @param integer $ordering
     *
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
     * @param string $contentParams
     *
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
     * @return string 
     */
    public function getContentParams()
    {
        return $this->contentParams;
    }

    /**
     * Set contentType
     *
     * @param \ZG\Model\Entities\ContentTypes $contentType
     *
     * @return Content
     */
    public function setContentType(\ZG\Model\Entities\ContentTypes $contentType = null)
    {
        $this->contentType = $contentType;
    
        return $this;
    }

    /**
     * Get contentType
     *
     * @return \ZG\Model\Entities\ContentTypes 
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     * Set user
     *
     * @param \ZG\Model\Entities\Users $user
     *
     * @return Content
     */
    public function setUser(\ZG\Model\Entities\Users $user = null)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return \ZG\Model\Entities\Users 
     */
    public function getUser()
    {
        return $this->user;
    }
}
