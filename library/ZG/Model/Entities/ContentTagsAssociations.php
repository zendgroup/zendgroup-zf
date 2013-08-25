<?php

namespace ZG\Model\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContentTagsAssociations
 *
 * @ORM\Table(name="content_tags_associations")
 * @ORM\Entity(repositoryClass="ZG\Model\Repositories\ContentTagsAssociationsRepository")
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
     * @var ContentDetail
     *
     * @ORM\ManyToOne(targetEntity="ContentDetail")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="content_detail_id", referencedColumnName="content_detail_id")
     * })
     */
    private $contentDetail;

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
     * Get tagsAssociationId
     *
     * @return integer 
     */
    public function getTagsAssociationId()
    {
        return $this->tagsAssociationId;
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
}
