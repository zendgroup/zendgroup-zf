<?php

/**
 *
 * ZEND GROUP
 *
 * @name        Albums.php
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
 * Albums
 *
 * @ORM\Table(name="albums")
 * @ORM\Entity
 */
class Albums
{
    /**
     * @var integer $albumId
     *
     * @ORM\Column(name="album_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $albumId;

    /**
     * @var string $albumTitle
     *
     * @ORM\Column(name="album_title", type="string", length=255, nullable=true)
     */
    private $albumTitle;

    /**
     * @var integer $albumCreateDate
     *
     * @ORM\Column(name="album_create_date", type="integer", nullable=true)
     */
    private $albumCreateDate;

    /**
     * @var Gallery
     *
     * @ORM\ManyToOne(targetEntity="Gallery")
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
     * @param Gallery $gallery
     * @return Albums
     */
    public function setGallery(\Gallery $gallery = null)
    {
        $this->gallery = $gallery;
        return $this;
    }

    /**
     * Get gallery
     *
     * @return Gallery 
     */
    public function getGallery()
    {
        return $this->gallery;
    }
}