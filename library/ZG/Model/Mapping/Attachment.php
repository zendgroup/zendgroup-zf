<?php

/**
 * ZEND GROUP
 *
 * @name        Attachment.php
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
 * Attachment
 *
 * @ORM\Table(name="attachment", indexes={@ORM\Index(name="fk_content_detail_attachment_idx", columns={"content_detail_id"})})
 * @ORM\Entity(repositoryClass="ZG\Model\Repositories\Attachment")
 */
class Attachment
{
    /**
     * @var integer
     *
     * @ORM\Column(name="attachment_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $attachmentId;

    /**
     * @var string
     *
     * @ORM\Column(name="file_name", type="string", length=45, nullable=true)
     */
    private $fileName;

    /**
     * @var string
     *
     * @ORM\Column(name="file_caption", type="string", length=45, nullable=true)
     */
    private $fileCaption;

    /**
     * @var integer
     *
     * @ORM\Column(name="file_counter", type="integer", nullable=true)
     */
    private $fileCounter;

    /**
     * @var string
     *
     * @ORM\Column(name="file_path", type="string", length=255, nullable=true)
     */
    private $filePath;

    /**
     * @var string
     *
     * @ORM\Column(name="file_path_md5", type="string", length=255, nullable=true)
     */
    private $filePathMd5;

    /**
     * @var integer
     *
     * @ORM\Column(name="file_size", type="integer", nullable=true)
     */
    private $fileSize;

    /**
     * @var string
     *
     * @ORM\Column(name="file_info", type="string", length=255, nullable=true)
     */
    private $fileInfo;

    /**
     * @var integer
     *
     * @ORM\Column(name="file_time", type="integer", nullable=true)
     */
    private $fileTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="file_status", type="integer", nullable=true)
     */
    private $fileStatus;

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
