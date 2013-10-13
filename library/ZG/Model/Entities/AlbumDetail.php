<?php

/**
 * ZEND GROUP
 *
 * @name        AlbumDetail.php
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
 * AlbumDetail
 *
 * @ORM\Table(name="album_detail", indexes={@ORM\Index(name="fk_album_detail_idx", columns={"album_id"})})
 * @ORM\Entity(repositoryClass="ZG\Model\Repositories\AlbumDetail")
 */
class AlbumDetail
{
    /**
     * @var integer
     *
     * @ORM\Column(name="album_detail_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $albumDetailId;

    /**
     * @var string
     *
     * @ORM\Column(name="images_name", type="string", length=255, nullable=true)
     */
    private $imagesName;

    /**
     * @var string
     *
     * @ORM\Column(name="images_path", type="string", length=255, nullable=true)
     */
    private $imagesPath;

    /**
     * @var \ZG\Model\Entities\Albums
     *
     * @ORM\ManyToOne(targetEntity="ZG\Model\Entities\Albums")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="album_id", referencedColumnName="album_id")
     * })
     */
    private $album;


    /**
     * Get albumDetailId
     *
     * @return integer 
     */
    public function getAlbumDetailId()
    {
        return $this->albumDetailId;
    }

    /**
     * Set imagesName
     *
     * @param string $imagesName
     *
     * @return AlbumDetail
     */
    public function setImagesName($imagesName)
    {
        $this->imagesName = $imagesName;
    
        return $this;
    }

    /**
     * Get imagesName
     *
     * @return string 
     */
    public function getImagesName()
    {
        return $this->imagesName;
    }

    /**
     * Set imagesPath
     *
     * @param string $imagesPath
     *
     * @return AlbumDetail
     */
    public function setImagesPath($imagesPath)
    {
        $this->imagesPath = $imagesPath;
    
        return $this;
    }

    /**
     * Get imagesPath
     *
     * @return string 
     */
    public function getImagesPath()
    {
        return $this->imagesPath;
    }

    /**
     * Set album
     *
     * @param \ZG\Model\Entities\Albums $album
     *
     * @return AlbumDetail
     */
    public function setAlbum(\ZG\Model\Entities\Albums $album = null)
    {
        $this->album = $album;
    
        return $this;
    }

    /**
     * Get album
     *
     * @return \ZG\Model\Entities\Albums 
     */
    public function getAlbum()
    {
        return $this->album;
    }
}
