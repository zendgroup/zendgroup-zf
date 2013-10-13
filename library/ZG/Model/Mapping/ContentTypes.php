<?php

/**
 * ZEND GROUP
 *
 * @name        ContentTypes.php
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
 * ContentTypes
 *
 * @ORM\Table(name="content_types")
 * @ORM\Entity(repositoryClass="ZG\Model\Repositories\ContentTypes")
 */
class ContentTypes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="content_type_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $contentTypeId;

    /**
     * @var string
     *
     * @ORM\Column(name="content_type_name", type="string", length=125, nullable=false)
     */
    private $contentTypeName;

    /**
     * @var string
     *
     * @ORM\Column(name="content_type_description", type="string", length=255, nullable=true)
     */
    private $contentTypeDescription;

    /**
     * @var boolean
     *
     * @ORM\Column(name="enable_expiry", type="boolean", nullable=true)
     */
    private $enableExpiry;

    /**
     * @var boolean
     *
     * @ORM\Column(name="enable_vote", type="boolean", nullable=true)
     */
    private $enableVote;

    /**
     * @var boolean
     *
     * @ORM\Column(name="enable_comment", type="boolean", nullable=true)
     */
    private $enableComment;

    /**
     * @var boolean
     *
     * @ORM\Column(name="enable_attachment", type="boolean", nullable=true)
     */
    private $enableAttachment;

    /**
     * @var boolean
     *
     * @ORM\Column(name="enable_media", type="boolean", nullable=true)
     */
    private $enableMedia;

    /**
     * @var boolean
     *
     * @ORM\Column(name="enable_tag", type="boolean", nullable=true)
     */
    private $enableTag;

    /**
     * @var boolean
     *
     * @ORM\Column(name="enable_schedule", type="boolean", nullable=true)
     */
    private $enableSchedule;


}
