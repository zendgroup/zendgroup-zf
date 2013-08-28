<?php

namespace ZG\Model\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Menus
 *
 * @ORM\Table(name="menus")
 * @ORM\Entity(repositoryClass="ZG\Model\Repositories\MenusRepository")
 */
class Menus
{
    /**
     * @var integer $menuId
     *
     * @ORM\Column(name="menu_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $menuId;

    /**
     * @var integer $parentId
     *
     * @ORM\Column(name="parent_id", type="integer", nullable=true)
     */
    private $parentId;

    /**
     * @var integer $languageId
     *
     * @ORM\Column(name="language_id", type="integer", nullable=true)
     */
    private $languageId;

    /**
     * @var string $menuTitle
     *
     * @ORM\Column(name="menu_title", type="string", length=255, nullable=true)
     */
    private $menuTitle;

    /**
     * @var string $menuSlug
     *
     * @ORM\Column(name="menu_slug", type="string", length=255, nullable=true)
     */
    private $menuSlug;

    /**
     * @var string $menuPath
     *
     * @ORM\Column(name="menu_path", type="string", length=1024, nullable=true)
     */
    private $menuPath;

    /**
     * @var string $menuType
     *
     * @ORM\Column(name="menu_type", type="string", length=255, nullable=true)
     */
    private $menuType;

    /**
     * @var string $menuLink
     *
     * @ORM\Column(name="menu_link", type="string", length=1024, nullable=true)
     */
    private $menuLink;

    /**
     * @var string $menuTarget
     *
     * @ORM\Column(name="menu_target", type="string", length=255, nullable=true)
     */
    private $menuTarget;

    /**
     * @var string $note
     *
     * @ORM\Column(name="note", type="string", length=45, nullable=true)
     */
    private $note;

    /**
     * @var boolean $published
     *
     * @ORM\Column(name="published", type="boolean", nullable=true)
     */
    private $published;

    /**
     * @var string $menuIcon
     *
     * @ORM\Column(name="menu_icon", type="string", length=255, nullable=true)
     */
    private $menuIcon;

    /**
     * @var string $params
     *
     * @ORM\Column(name="params", type="text", nullable=true)
     */
    private $params;

    /**
     * @var boolean $home
     *
     * @ORM\Column(name="home", type="boolean", nullable=true)
     */
    private $home;

    /**
     * @var integer $lft
     *
     * @ORM\Column(name="lft", type="integer", nullable=true)
     */
    private $lft;

    /**
     * @var integer $rgt
     *
     * @ORM\Column(name="rgt", type="integer", nullable=true)
     */
    private $rgt;

    /**
     * @var integer $depth
     *
     * @ORM\Column(name="depth", type="integer", nullable=true)
     */
    private $depth;


    /**
     * Get menuId
     *
     * @return integer 
     */
    public function getMenuId()
    {
        return $this->menuId;
    }

    /**
     * Set parentId
     *
     * @param integer $parentId
     * @return Menus
     */
    public function setParentId($parentId)
    {
        $this->parentId = $parentId;
    
        return $this;
    }

    /**
     * Get parentId
     *
     * @return integer 
     */
    public function getParentId()
    {
        return $this->parentId;
    }

    /**
     * Set languageId
     *
     * @param integer $languageId
     * @return Menus
     */
    public function setLanguageId($languageId)
    {
        $this->languageId = $languageId;
    
        return $this;
    }

    /**
     * Get languageId
     *
     * @return integer 
     */
    public function getLanguageId()
    {
        return $this->languageId;
    }

    /**
     * Set menuTitle
     *
     * @param string $menuTitle
     * @return Menus
     */
    public function setMenuTitle($menuTitle)
    {
        $this->menuTitle = $menuTitle;
    
        return $this;
    }

    /**
     * Get menuTitle
     *
     * @return string 
     */
    public function getMenuTitle()
    {
        return $this->menuTitle;
    }

    /**
     * Set menuSlug
     *
     * @param string $menuSlug
     * @return Menus
     */
    public function setMenuSlug($menuSlug)
    {
        $this->menuSlug = $menuSlug;
    
        return $this;
    }

    /**
     * Get menuSlug
     *
     * @return string 
     */
    public function getMenuSlug()
    {
        return $this->menuSlug;
    }

    /**
     * Set menuPath
     *
     * @param string $menuPath
     * @return Menus
     */
    public function setMenuPath($menuPath)
    {
        $this->menuPath = $menuPath;
    
        return $this;
    }

    /**
     * Get menuPath
     *
     * @return string 
     */
    public function getMenuPath()
    {
        return $this->menuPath;
    }

    /**
     * Set menuType
     *
     * @param string $menuType
     * @return Menus
     */
    public function setMenuType($menuType)
    {
        $this->menuType = $menuType;
    
        return $this;
    }

    /**
     * Get menuType
     *
     * @return string 
     */
    public function getMenuType()
    {
        return $this->menuType;
    }

    /**
     * Set menuLink
     *
     * @param string $menuLink
     * @return Menus
     */
    public function setMenuLink($menuLink)
    {
        $this->menuLink = $menuLink;
    
        return $this;
    }

    /**
     * Get menuLink
     *
     * @return string 
     */
    public function getMenuLink()
    {
        return $this->menuLink;
    }

    /**
     * Set menuTarget
     *
     * @param string $menuTarget
     * @return Menus
     */
    public function setMenuTarget($menuTarget)
    {
        $this->menuTarget = $menuTarget;
    
        return $this;
    }

    /**
     * Get menuTarget
     *
     * @return string 
     */
    public function getMenuTarget()
    {
        return $this->menuTarget;
    }

    /**
     * Set note
     *
     * @param string $note
     * @return Menus
     */
    public function setNote($note)
    {
        $this->note = $note;
    
        return $this;
    }

    /**
     * Get note
     *
     * @return string 
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set published
     *
     * @param boolean $published
     * @return Menus
     */
    public function setPublished($published)
    {
        $this->published = $published;
    
        return $this;
    }

    /**
     * Get published
     *
     * @return boolean 
     */
    public function getPublished()
    {
        return $this->published;
    }

    /**
     * Set menuIcon
     *
     * @param string $menuIcon
     * @return Menus
     */
    public function setMenuIcon($menuIcon)
    {
        $this->menuIcon = $menuIcon;
    
        return $this;
    }

    /**
     * Get menuIcon
     *
     * @return string 
     */
    public function getMenuIcon()
    {
        return $this->menuIcon;
    }

    /**
     * Set params
     *
     * @param string $params
     * @return Menus
     */
    public function setParams($params)
    {
        $this->params = $params;
    
        return $this;
    }

    /**
     * Get params
     *
     * @return string 
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * Set home
     *
     * @param boolean $home
     * @return Menus
     */
    public function setHome($home)
    {
        $this->home = $home;
    
        return $this;
    }

    /**
     * Get home
     *
     * @return boolean 
     */
    public function getHome()
    {
        return $this->home;
    }

    /**
     * Set lft
     *
     * @param integer $lft
     * @return Menus
     */
    public function setLft($lft)
    {
        $this->lft = $lft;
    
        return $this;
    }

    /**
     * Get lft
     *
     * @return integer 
     */
    public function getLft()
    {
        return $this->lft;
    }

    /**
     * Set rgt
     *
     * @param integer $rgt
     * @return Menus
     */
    public function setRgt($rgt)
    {
        $this->rgt = $rgt;
    
        return $this;
    }

    /**
     * Get rgt
     *
     * @return integer 
     */
    public function getRgt()
    {
        return $this->rgt;
    }

    /**
     * Set depth
     *
     * @param integer $depth
     * @return Menus
     */
    public function setDepth($depth)
    {
        $this->depth = $depth;
    
        return $this;
    }

    /**
     * Get depth
     *
     * @return integer 
     */
    public function getDepth()
    {
        return $this->depth;
    }
}
