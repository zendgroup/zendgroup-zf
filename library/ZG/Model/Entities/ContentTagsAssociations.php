<?php

/**
 *
 * ZEND GROUP
 *
 * @name        ContentTagsAssociations.php
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
 * ContentTagsAssociations
 *
 * @ORM\Table(name="content_tags_associations")
 * @ORM\Entity
 */
class ContentTagsAssociations
{
    /**
     * @var integer $tagsAssociationId
     *
     * @ORM\Column(name="tags_association_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tagsAssociationId;

    /**
     * @var Tags
     *
     * @ORM\ManyToOne(targetEntity="Tags")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tag_id", referencedColumnName="tag_id")
     * })
     */
    private $tag;

    /**
     * @var ContentDetail
     *
     * @ORM\ManyToOne(targetEntity="ContentDetail")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="content_detail_id", referencedColumnName="content_detail_id")
     * })
     */
    private $contentDetail;


    /**
     * Get tagsAssociationId
     *
     * @return integer 
     */
    public function getTagsAssociationId()
    {
        return $this->tagsAssociationId;
    }

    /**
     * Set tag
     *
     * @param Tags $tag
     * @return ContentTagsAssociations
     */
    public function setTag(\Tags $tag = null)
    {
        $this->tag = $tag;
        return $this;
    }

    /**
     * Get tag
     *
     * @return Tags 
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * Set contentDetail
     *
     * @param ContentDetail $contentDetail
     * @return ContentTagsAssociations
     */
    public function setContentDetail(\ContentDetail $contentDetail = null)
    {
        $this->contentDetail = $contentDetail;
        return $this;
    }

    /**
     * Get contentDetail
     *
     * @return ContentDetail 
     */
    public function getContentDetail()
    {
        return $this->contentDetail;
    }
}