<?php

namespace ZG\Model\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tags
 *
 * @ORM\Table(name="tags")
 * @ORM\Entity(repositoryClass="ZG\Model\Repositories\TagsRepository")
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
