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
     * @var string $albumCreateDate
     *
     * @ORM\Column(name="album_create_date", type="string", length=255, nullable=true)
     */
    private $albumCreateDate;

    /**
     * @var Gallery
     *
     * @ORM\ManyToOne(targetEntity="Gallery")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gallery_id", referencedColumnName="gallery_id")
     * })
     */
    private $gallery;


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
     * @param string $albumCreateDate
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
     * @return string 
     */
    public function getAlbumCreateDate()
    {
        return $this->albumCreateDate;
    }

    /**
     * Set gallery
     *
     * @param Gallery $gallery
     * @return Albums
     */
    public function setGallery(\Gallery $gallery = null)
    {
        $this->gallery = $gallery;
    
        return $this;
    }

    /**
     * Get gallery
     *
     * @return Gallery 
     */
    public function getGallery()
    {
        return $this->gallery;
    }
}
