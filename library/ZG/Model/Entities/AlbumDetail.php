<?php

namespace ZG\Model\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * AlbumDetail
 *
 * @ORM\Table(name="album_detail")
 * @ORM\Entity(repositoryClass="ZG\Model\Repositories\AlbumDetailRepository")
 */
class AlbumDetail
{
    /**
     * @var integer $albumDetailId
     *
     * @ORM\Column(name="album_detail_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $albumDetailId;

    /**
     * @var string $imagesName
     *
     * @ORM\Column(name="images_name", type="string", length=255, nullable=true)
     */
    private $imagesName;

    /**
     * @var string $imagesPath
     *
     * @ORM\Column(name="images_path", type="string", length=255, nullable=true)
     */
    private $imagesPath;

    /**
     * @var Albums
     *
     * @ORM\ManyToOne(targetEntity="Albums")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="album_id", referencedColumnName="album_id")
     * })
     */
    private $album;


    /**
     * Get albumDetailId
     *
     * @return integer 
     */
    public function getAlbumDetailId()
    {
        return $this->albumDetailId;
    }

    /**
     * Set imagesName
     *
     * @param string $imagesName
     * @return AlbumDetail
     */
    public function setImagesName($imagesName)
    {
        $this->imagesName = $imagesName;
    
        return $this;
    }

    /**
     * Get imagesName
     *
     * @return string 
     */
    public function getImagesName()
    {
        return $this->imagesName;
    }

    /**
     * Set imagesPath
     *
     * @param string $imagesPath
     * @return AlbumDetail
     */
    public function setImagesPath($imagesPath)
    {
        $this->imagesPath = $imagesPath;
    
        return $this;
    }

    /**
     * Get imagesPath
     *
     * @return string 
     */
    public function getImagesPath()
    {
        return $this->imagesPath;
    }

    /**
     * Set album
     *
     * @param Albums $album
     * @return AlbumDetail
     */
    public function setAlbum(\Albums $album = null)
    {
        $this->album = $album;
    
        return $this;
    }

    /**
     * Get album
     *
     * @return Albums 
     */
    public function getAlbum()
    {
        return $this->album;
    }
}
