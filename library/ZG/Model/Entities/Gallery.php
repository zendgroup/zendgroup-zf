<?php

/**
 * ZEND GROUP
 *
 * @name        Gallery.php
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
 * Gallery
 *
 * @ORM\Table(name="gallery", indexes={@ORM\Index(name="fk_user_gallery_idx", columns={"user_id"})})
 * @ORM\Entity(repositoryClass="ZG\Model\Repositories\Gallery")
 */
class Gallery
{
    /**
     * @var integer
     *
     * @ORM\Column(name="gallery_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $galleryId;

    /**
     * @var integer
     *
     * @ORM\Column(name="gallery_name", type="integer", nullable=true)
     */
    private $galleryName;

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
     * Get galleryId
     *
     * @return integer 
     */
    public function getGalleryId()
    {
        return $this->galleryId;
    }

    /**
     * Set galleryName
     *
     * @param integer $galleryName
     *
     * @return Gallery
     */
    public function setGalleryName($galleryName)
    {
        $this->galleryName = $galleryName;
    
        return $this;
    }

    /**
     * Get galleryName
     *
     * @return integer 
     */
    public function getGalleryName()
    {
        return $this->galleryName;
    }

    /**
     * Set user
     *
     * @param \ZG\Model\Entities\Users $user
     *
     * @return Gallery
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
