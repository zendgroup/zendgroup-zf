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

namespace ZG\Model\Mapping;

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
     * @var \ZG\Model\Mapping\Gallery
     *
     * @ORM\ManyToOne(targetEntity="ZG\Model\Mapping\Gallery")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gallery_id", referencedColumnName="gallery_id")
     * })
     */
    private $gallery;


}
