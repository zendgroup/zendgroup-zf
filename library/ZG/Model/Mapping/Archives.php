<?php

/**
 * ZEND GROUP
 *
 * @name        Archives.php
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
 * Archives
 *
 * @ORM\Table(name="archives", indexes={@ORM\Index(name="fk_content_archive_ids", columns={"content_id"})})
 * @ORM\Entity(repositoryClass="ZG\Model\Repositories\Archives")
 */
class Archives
{
    /**
     * @var integer
     *
     * @ORM\Column(name="archive_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $archiveId;

    /**
     * @var integer
     *
     * @ORM\Column(name="archive_date", type="integer", nullable=true)
     */
    private $archiveDate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="archive_downloadable", type="boolean", nullable=true)
     */
    private $archiveDownloadable;

    /**
     * @var boolean
     *
     * @ORM\Column(name="archive_vieweable", type="boolean", nullable=true)
     */
    private $archiveVieweable;

    /**
     * @var \ZG\Model\Mapping\Content
     *
     * @ORM\ManyToOne(targetEntity="ZG\Model\Mapping\Content")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="content_id", referencedColumnName="content_id")
     * })
     */
    private $content;


}
