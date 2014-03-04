<?php

/**
 * ZEND GROUP
 *
 * @name        Media.php
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
 * Media
 *
 * @ORM\Table(name="media", indexes={@ORM\Index(name="fk_content_media_idx", columns={"content_detail_id"})})
 * @ORM\Entity(repositoryClass="ZG\Model\Repositories\Media")
 */
class Media
{
    /**
     * @var integer
     *
     * @ORM\Column(name="media_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $mediaId;

    /**
     * @var string
     *
     * @ORM\Column(name="media_file_name", type="string", length=45, nullable=true)
     */
    private $mediaFileName;

    /**
     * @var string
     *
     * @ORM\Column(name="media_caption", type="string", length=45, nullable=true)
     */
    private $mediaCaption;

    /**
     * @var integer
     *
     * @ORM\Column(name="media_counter", type="integer", nullable=true)
     */
    private $mediaCounter;

    /**
     * @var string
     *
     * @ORM\Column(name="media_path", type="string", length=255, nullable=true)
     */
    private $mediaPath;

    /**
     * @var string
     *
     * @ORM\Column(name="media_path_md5", type="string", length=255, nullable=true)
     */
    private $mediaPathMd5;

    /**
     * @var integer
     *
     * @ORM\Column(name="media_size", type="integer", nullable=true)
     */
    private $mediaSize;

    /**
     * @var string
     *
     * @ORM\Column(name="media_info", type="string", length=255, nullable=true)
     */
    private $mediaInfo;

    /**
     * @var integer
     *
     * @ORM\Column(name="media_time", type="integer", nullable=true)
     */
    private $mediaTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="media_status", type="integer", nullable=true)
     */
    private $mediaStatus;

    /**
     * @var \ZG\Model\Mapping\ContentDetail
     *
     * @ORM\ManyToOne(targetEntity="ZG\Model\Mapping\ContentDetail")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="content_detail_id", referencedColumnName="content_detail_id")
     * })
     */
    private $contentDetail;


}
