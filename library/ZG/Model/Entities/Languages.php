<?php

namespace ZG\Model\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Languages
 *
 * @ORM\Table(name="languages")
 * @ORM\Entity(repositoryClass="ZG\Model\Repositories\LanguagesRepository")
 */
class Languages
{
    /**
     * @var integer $languageId
     *
     * @ORM\Column(name="language_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $languageId;

    /**
     * @var string $languageName
     *
     * @ORM\Column(name="language_name", type="string", length=125, nullable=true)
     */
    private $languageName;

    /**
     * @var string $languageCode
     *
     * @ORM\Column(name="language_code", type="string", length=5, nullable=true)
     */
    private $languageCode;

    /**
     * @var string $languageDefault
     *
     * @ORM\Column(name="language_default", type="string", length=125, nullable=true)
     */
    private $languageDefault;


    /**
     * Get languageId
     *
     * @return integer 
     */
    public function getLanguageId()
    {
        return $this->languageId;
    }

    /**
     * Set languageName
     *
     * @param string $languageName
     * @return Languages
     */
    public function setLanguageName($languageName)
    {
        $this->languageName = $languageName;
    
        return $this;
    }

    /**
     * Get languageName
     *
     * @return string 
     */
    public function getLanguageName()
    {
        return $this->languageName;
    }

    /**
     * Set languageCode
     *
     * @param string $languageCode
     * @return Languages
     */
    public function setLanguageCode($languageCode)
    {
        $this->languageCode = $languageCode;
    
        return $this;
    }

    /**
     * Get languageCode
     *
     * @return string 
     */
    public function getLanguageCode()
    {
        return $this->languageCode;
    }

    /**
     * Set languageDefault
     *
     * @param string $languageDefault
     * @return Languages
     */
    public function setLanguageDefault($languageDefault)
    {
        $this->languageDefault = $languageDefault;
    
        return $this;
    }

    /**
     * Get languageDefault
     *
     * @return string 
     */
    public function getLanguageDefault()
    {
        return $this->languageDefault;
    }
}
