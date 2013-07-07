<?php

namespace ZG\Model\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * TagGroup
 *
 * @ORM\Table(name="tag_group")
 * @ORM\Entity(repositoryClass="ZG\Model\Repositories\TagGroupRepository")
 */
class TagGroup
{
    /**
     * @var integer $tagGroupId
     *
     * @ORM\Column(name="tag_group_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tagGroupId;

    /**
     * @var string $tagGroupTitle
     *
     * @ORM\Column(name="tag_group_title", type="string", length=125, nullable=true)
     */
    private $tagGroupTitle;


    /**
     * Get tagGroupId
     *
     * @return integer 
     */
    public function getTagGroupId()
    {
        return $this->tagGroupId;
    }

    /**
     * Set tagGroupTitle
     *
     * @param string $tagGroupTitle
     * @return TagGroup
     */
    public function setTagGroupTitle($tagGroupTitle)
    {
        $this->tagGroupTitle = $tagGroupTitle;
    
        return $this;
    }

    /**
     * Get tagGroupTitle
     *
     * @return string 
     */
    public function getTagGroupTitle()
    {
        return $this->tagGroupTitle;
    }
}
