<?php

/**
 * ZEND GROUP
 *
 * @name        ContentTagsAssociations.php
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
 * ContentTagsAssociations
 *
 * @ORM\Table(name="content_tags_associations", indexes={@ORM\Index(name="fk_content_tag_idx", columns={"content_detail_id"}), @ORM\Index(name="fk_detail_tag_idx", columns={"tag_id"})})
 * @ORM\Entity(repositoryClass="ZG\Model\Repositories\ContentTagsAssociations")
 */
class ContentTagsAssociations
{
    /**
     * @var integer
     *
     * @ORM\Column(name="tags_association_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tagsAssociationId;

    /**
     * @var \ZG\Model\Mapping\ContentDetail
     *
     * @ORM\ManyToOne(targetEntity="ZG\Model\Mapping\ContentDetail")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="content_detail_id", referencedColumnName="content_detail_id")
     * })
     */
    private $contentDetail;

    /**
     * @var \ZG\Model\Mapping\Tags
     *
     * @ORM\ManyToOne(targetEntity="ZG\Model\Mapping\Tags")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tag_id", referencedColumnName="tag_id")
     * })
     */
    private $tag;


}
