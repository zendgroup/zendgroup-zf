<?php

/**
 * ZEND GROUP
 *
 * @name        Albums.php
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
 * Albums
 *
 * @ORM\Table(name="albums", indexes={@ORM\Index(name="fk_album_gallery_idx", columns={"gallery_id"})})
 * @ORM\Entity(repositoryClass="ZG\Model\Repositories\Albums")
 */
class Albums
{
    /**
     * @var integer
     *
     * @ORM\Column(name="album_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $albumId;

    /**
     * @var string
     *
     * @ORM\Column(name="album_title", type="string", length=255, nullable=true)
     */
    private $albumTitle;

    /**
     * @var integer
     *
     * @ORM\Column(name="album_create_date", type="integer", nullable=true)
     */
    private $albumCreateDate;

    /**
     * @var \ZG\Model\Entities\Gallery
     *
     * @ORM\ManyToOne(targetEntity="ZG\Model\Entities\Gallery")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gallery_id", referencedColumnName="gallery_id")
     * })
     */
    private $gallery;


    /**
     * Get albumId
     *
     * @return integer 
     */
    public function getAlbumId()
    {
        return $this->albumId;
    }

    /**
     * Set albumTitle
     *
     * @param string $albumTitle
     *
     * @return Albums
     */
    public function setAlbumTitle($albumTitle)
    {
        $this->albumTitle = $albumTitle;
    
        return $this;
    }

    /**
     * Get albumTitle
     *
     * @return string 
     */
    public function getAlbumTitle()
    {
        return $this->albumTitle;
    }

    /**
     * Set albumCreateDate
     *
     * @param integer $albumCreateDate
     *
     * @return Albums
     */
    public function setAlbumCreateDate($albumCreateDate)
    {
        $this->albumCreateDate = $albumCreateDate;
    
        return $this;
    }

    /**
     * Get albumCreateDate
     *
     * @return integer 
     */
    public function getAlbumCreateDate()
    {
        return $this->albumCreateDate;
    }

    /**
     * Set gallery
     *
     * @param \ZG\Model\Entities\Gallery $gallery
     *
     * @return Albums
     */
    public function setGallery(\ZG\Model\Entities\Gallery $gallery = null)
    {
        $this->gallery = $gallery;
    
        return $this;
    }

    /**
     * Get gallery
     *
     * @return \ZG\Model\Entities\Gallery 
     */
    public function getGallery()
    {
        return $this->gallery;
    }
}
