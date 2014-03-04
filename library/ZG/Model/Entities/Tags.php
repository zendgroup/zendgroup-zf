<?php

/**
 * ZEND GROUP
 *
 * @name        Tags.php
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
 * Tags
 *
 * @ORM\Table(name="tags", indexes={@ORM\Index(name="fk_group_tag_idx", columns={"tag_group_id"})})
 * @ORM\Entity(repositoryClass="ZG\Model\Repositories\Tags")
 */
class Tags
{
    /**
     * @var integer
     *
     * @ORM\Column(name="tag_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tagId;

    /**
     * @var string
     *
     * @ORM\Column(name="tag_text", type="string", length=45, nullable=true)
     */
    private $tagText;

    /**
     * @var \ZG\Model\Entities\TagGroup
     *
     * @ORM\ManyToOne(targetEntity="ZG\Model\Entities\TagGroup")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tag_group_id", referencedColumnName="tag_group_id")
     * })
     */
    private $tagGroup;


    /**
     * Get tagId
     *
     * @return integer 
     */
    public function getTagId()
    {
        return $this->tagId;
    }

    /**
     * Set tagText
     *
     * @param string $tagText
     *
     * @return Tags
     */
    public function setTagText($tagText)
    {
        $this->tagText = $tagText;
    
        return $this;
    }

    /**
     * Get tagText
     *
     * @return string 
     */
    public function getTagText()
    {
        return $this->tagText;
    }

    /**
     * Set tagGroup
     *
     * @param \ZG\Model\Entities\TagGroup $tagGroup
     *
     * @return Tags
     */
    public function setTagGroup(\ZG\Model\Entities\TagGroup $tagGroup = null)
    {
        $this->tagGroup = $tagGroup;
    
        return $this;
    }

    /**
     * Get tagGroup
     *
     * @return \ZG\Model\Entities\TagGroup 
     */
    public function getTagGroup()
    {
        return $this->tagGroup;
    }
}
