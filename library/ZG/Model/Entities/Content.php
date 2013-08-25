<?php

namespace ZG\Model\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Content
 *
 * @ORM\Table(name="content")
 * @ORM\Entity(repositoryClass="ZG\Model\Repositories\ContentRepository")
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
     * @var integer $ordering
     *
     * @ORM\Column(name="ordering", type="integer", nullable=false)
     */
    private $ordering;

    /**
     * @var string $contentParams
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
     * @param string $contentParams
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
