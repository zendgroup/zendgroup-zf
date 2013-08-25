<?php

namespace ZG\Model\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gallery
 *
 * @ORM\Table(name="gallery")
 * @ORM\Entity(repositoryClass="ZG\Model\Repositories\GalleryRepository")
 */
class Gallery
{
    /**
     * @var integer $galleryId
     *
     * @ORM\Column(name="gallery_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $galleryId;

    /**
     * @var integer $galleryName
     *
     * @ORM\Column(name="gallery_name", type="integer", nullable=true)
     */
    private $galleryName;

    /**
     * @var Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="user_id")
     * })
     */
    private $user;


    /**
     * Get galleryId
     *
     * @return integer 
     */
    public function getGalleryId()
    {
        return $this->galleryId;
    }

    /**
     * Set galleryName
     *
     * @param integer $galleryName
     * @return Gallery
     */
    public function setGalleryName($galleryName)
    {
        $this->galleryName = $galleryName;
    
        return $this;
    }

    /**
     * Get galleryName
     *
     * @return integer 
     */
    public function getGalleryName()
    {
        return $this->galleryName;
    }

    /**
     * Set user
     *
     * @param Users $user
     * @return Gallery
     */
    public function setUser(\Users $user = null)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return Users 
     */
    public function getUser()
    {
        return $this->user;
    }
}
