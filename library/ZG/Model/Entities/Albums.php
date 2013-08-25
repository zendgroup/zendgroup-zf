<?php

namespace ZG\Model\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Albums
 *
 * @ORM\Table(name="albums")
 * @ORM\Entity(repositoryClass="ZG\Model\Repositories\AlbumsRepository")
 */
class Albums
{
    /**
     * @var integer $albumId
     *
     * @ORM\Column(name="album_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $albumId;

    /**
     * @var string $albumTitle
     *
     * @ORM\Column(name="album_title", type="string", length=255, nullable=true)
     */
    private $albumTitle;

    /**
     * @var integer $albumCreateDate
     *
     * @ORM\Column(name="album_create_date", type="integer", nullable=true)
     */
    private $albumCreateDate;

    /**
     * @var integer $galleryId
     *
     * @ORM\Column(name="gallery_id", type="integer", nullable=false)
     */
    private $galleryId;


    /**
     * Get albumId
     *
     * @return integer 
     */
    public function getAlbumId()
    {
        return $this->albumId;
    }

    /**
     * Set albumTitle
     *
     * @param string $albumTitle
     * @return Albums
     */
    public function setAlbumTitle($albumTitle)
    {
        $this->albumTitle = $albumTitle;
    
        return $this;
    }

    /**
     * Get albumTitle
     *
     * @return string 
     */
    public function getAlbumTitle()
    {
        return $this->albumTitle;
    }

    /**
     * Set albumCreateDate
     *
     * @param integer $albumCreateDate
     * @return Albums
     */
    public function setAlbumCreateDate($albumCreateDate)
    {
        $this->albumCreateDate = $albumCreateDate;
    
        return $this;
    }

    /**
     * Get albumCreateDate
     *
     * @return integer 
     */
    public function getAlbumCreateDate()
    {
        return $this->albumCreateDate;
    }

    /**
     * Set galleryId
     *
     * @param integer $galleryId
     * @return Albums
     */
    public function setGalleryId($galleryId)
    {
        $this->galleryId = $galleryId;
    
        return $this;
    }

    /**
     * Get galleryId
     *
     * @return integer 
     */
    public function getGalleryId()
    {
        return $this->galleryId;
    }
}
