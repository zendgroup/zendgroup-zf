<?php

namespace ZG\Model\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * FileTypes
 *
 * @ORM\Table(name="file_types")
 * @ORM\Entity(repositoryClass="ZG\Model\Repositories\FileTypesRepository")
 */
class FileTypes
{
    /**
     * @var integer $fileTypeId
     *
     * @ORM\Column(name="file_type_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $fileTypeId;

    /**
     * @var string $fileTypeName
     *
     * @ORM\Column(name="file_type_name", type="string", length=45, nullable=true)
     */
    private $fileTypeName;

    /**
     * @var string $fileTypeExtension
     *
     * @ORM\Column(name="file_type_extension", type="string", length=3, nullable=true)
     */
    private $fileTypeExtension;

    /**
     * @var string $fileTypeMinetype
     *
     * @ORM\Column(name="file_type_minetype", type="string", length=255, nullable=true)
     */
    private $fileTypeMinetype;

    /**
     * @var string $pathPrefix
     *
     * @ORM\Column(name="path_prefix", type="string", length=255, nullable=true)
     */
    private $pathPrefix;


    /**
     * Get fileTypeId
     *
     * @return integer 
     */
    public function getFileTypeId()
    {
        return $this->fileTypeId;
    }

    /**
     * Set fileTypeName
     *
     * @param string $fileTypeName
     * @return FileTypes
     */
    public function setFileTypeName($fileTypeName)
    {
        $this->fileTypeName = $fileTypeName;
    
        return $this;
    }

    /**
     * Get fileTypeName
     *
     * @return string 
     */
    public function getFileTypeName()
    {
        return $this->fileTypeName;
    }

    /**
     * Set fileTypeExtension
     *
     * @param string $fileTypeExtension
     * @return FileTypes
     */
    public function setFileTypeExtension($fileTypeExtension)
    {
        $this->fileTypeExtension = $fileTypeExtension;
    
        return $this;
    }

    /**
     * Get fileTypeExtension
     *
     * @return string 
     */
    public function getFileTypeExtension()
    {
        return $this->fileTypeExtension;
    }

    /**
     * Set fileTypeMinetype
     *
     * @param string $fileTypeMinetype
     * @return FileTypes
     */
    public function setFileTypeMinetype($fileTypeMinetype)
    {
        $this->fileTypeMinetype = $fileTypeMinetype;
    
        return $this;
    }

    /**
     * Get fileTypeMinetype
     *
     * @return string 
     */
    public function getFileTypeMinetype()
    {
        return $this->fileTypeMinetype;
    }

    /**
     * Set pathPrefix
     *
     * @param string $pathPrefix
     * @return FileTypes
     */
    public function setPathPrefix($pathPrefix)
    {
        $this->pathPrefix = $pathPrefix;
    
        return $this;
    }

    /**
     * Get pathPrefix
     *
     * @return string 
     */
    public function getPathPrefix()
    {
        return $this->pathPrefix;
    }
}
