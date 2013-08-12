<?php

/**
 *
 * ZEND GROUP
 *
 * @name        Tags.php
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
 * Tags
 *
 * @ORM\Table(name="tags")
 * @ORM\Entity
 */
class Tags
{
    /**
     * @var integer $tagId
     *
     * @ORM\Column(name="tag_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tagId;

    /**
     * @var string $tagText
     *
     * @ORM\Column(name="tag_text", type="string", length=45, nullable=true)
     */
    private $tagText;

    /**
     * @var TagGroup
     *
     * @ORM\ManyToOne(targetEntity="TagGroup")
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
     * @param TagGroup $tagGroup
     * @return Tags
     */
    public function setTagGroup(\TagGroup $tagGroup = null)
    {
        $this->tagGroup = $tagGroup;
        return $this;
    }

    /**
     * Get tagGroup
     *
     * @return TagGroup 
     */
    public function getTagGroup()
    {
        return $this->tagGroup;
    }
}