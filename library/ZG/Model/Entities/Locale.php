<?php

namespace ZG\Model\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Locale
 *
 * @ORM\Table(name="locale")
 * @ORM\Entity(repositoryClass="ZG\Model\Repositories\LocaleRepository")
 */
class Locale
{
    /**
     * @var integer $localeId
     *
     * @ORM\Column(name="locale_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $localeId;

    /**
     * @var string $localeName
     *
     * @ORM\Column(name="locale_name", type="string", length=125, nullable=true)
     */
    private $localeName;

    /**
     * @var string $localeCode
     *
     * @ORM\Column(name="locale_code", type="string", length=5, nullable=true)
     */
    private $localeCode;

    /**
     * @var string $localeDefault
     *
     * @ORM\Column(name="locale_default", type="string", length=125, nullable=true)
     */
    private $localeDefault;


    /**
     * Get localeId
     *
     * @return integer 
     */
    public function getLocaleId()
    {
        return $this->localeId;
    }

    /**
     * Set localeName
     *
     * @param string $localeName
     * @return Locale
     */
    public function setLocaleName($localeName)
    {
        $this->localeName = $localeName;
    
        return $this;
    }

    /**
     * Get localeName
     *
     * @return string 
     */
    public function getLocaleName()
    {
        return $this->localeName;
    }

    /**
     * Set localeCode
     *
     * @param string $localeCode
     * @return Locale
     */
    public function setLocaleCode($localeCode)
    {
        $this->localeCode = $localeCode;
    
        return $this;
    }

    /**
     * Get localeCode
     *
     * @return string 
     */
    public function getLocaleCode()
    {
        return $this->localeCode;
    }

    /**
     * Set localeDefault
     *
     * @param string $localeDefault
     * @return Locale
     */
    public function setLocaleDefault($localeDefault)
    {
        $this->localeDefault = $localeDefault;
    
        return $this;
    }

    /**
     * Get localeDefault
     *
     * @return string 
     */
    public function getLocaleDefault()
    {
        return $this->localeDefault;
    }
}
