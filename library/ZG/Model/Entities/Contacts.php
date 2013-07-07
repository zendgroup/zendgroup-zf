<?php

namespace ZG\Model\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contacts
 *
 * @ORM\Table(name="contacts")
 * @ORM\Entity(repositoryClass="ZG\Model\Repositories\ContactsRepository")
 */
class Contacts
{
    /**
     * @var integer $contactId
     *
     * @ORM\Column(name="contact_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $contactId;

    /**
     * @var string $contactName
     *
     * @ORM\Column(name="contact_name", type="string", length=45, nullable=false)
     */
    private $contactName;

    /**
     * @var string $contactAddress
     *
     * @ORM\Column(name="contact_address", type="string", length=255, nullable=true)
     */
    private $contactAddress;

    /**
     * @var string $contactTelephone
     *
     * @ORM\Column(name="contact_telephone", type="string", length=45, nullable=true)
     */
    private $contactTelephone;

    /**
     * @var string $contactPhone
     *
     * @ORM\Column(name="contact_phone", type="string", length=45, nullable=true)
     */
    private $contactPhone;

    /**
     * @var string $contactEmail
     *
     * @ORM\Column(name="contact_email", type="string", length=125, nullable=true)
     */
    private $contactEmail;

    /**
     * @var string $contactFax
     *
     * @ORM\Column(name="contact_fax", type="string", length=45, nullable=true)
     */
    private $contactFax;

    /**
     * @var string $contactCity
     *
     * @ORM\Column(name="contact_city", type="string", length=125, nullable=true)
     */
    private $contactCity;

    /**
     * @var string $contactCounty
     *
     * @ORM\Column(name="contact_county", type="string", length=125, nullable=true)
     */
    private $contactCounty;

    /**
     * @var string $contactState
     *
     * @ORM\Column(name="contact_state", type="string", length=125, nullable=true)
     */
    private $contactState;

    /**
     * @var string $contactCountry
     *
     * @ORM\Column(name="contact_country", type="string", length=125, nullable=true)
     */
    private $contactCountry;

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
     * Get contactId
     *
     * @return integer 
     */
    public function getContactId()
    {
        return $this->contactId;
    }

    /**
     * Set contactName
     *
     * @param string $contactName
     * @return Contacts
     */
    public function setContactName($contactName)
    {
        $this->contactName = $contactName;
    
        return $this;
    }

    /**
     * Get contactName
     *
     * @return string 
     */
    public function getContactName()
    {
        return $this->contactName;
    }

    /**
     * Set contactAddress
     *
     * @param string $contactAddress
     * @return Contacts
     */
    public function setContactAddress($contactAddress)
    {
        $this->contactAddress = $contactAddress;
    
        return $this;
    }

    /**
     * Get contactAddress
     *
     * @return string 
     */
    public function getContactAddress()
    {
        return $this->contactAddress;
    }

    /**
     * Set contactTelephone
     *
     * @param string $contactTelephone
     * @return Contacts
     */
    public function setContactTelephone($contactTelephone)
    {
        $this->contactTelephone = $contactTelephone;
    
        return $this;
    }

    /**
     * Get contactTelephone
     *
     * @return string 
     */
    public function getContactTelephone()
    {
        return $this->contactTelephone;
    }

    /**
     * Set contactPhone
     *
     * @param string $contactPhone
     * @return Contacts
     */
    public function setContactPhone($contactPhone)
    {
        $this->contactPhone = $contactPhone;
    
        return $this;
    }

    /**
     * Get contactPhone
     *
     * @return string 
     */
    public function getContactPhone()
    {
        return $this->contactPhone;
    }

    /**
     * Set contactEmail
     *
     * @param string $contactEmail
     * @return Contacts
     */
    public function setContactEmail($contactEmail)
    {
        $this->contactEmail = $contactEmail;
    
        return $this;
    }

    /**
     * Get contactEmail
     *
     * @return string 
     */
    public function getContactEmail()
    {
        return $this->contactEmail;
    }

    /**
     * Set contactFax
     *
     * @param string $contactFax
     * @return Contacts
     */
    public function setContactFax($contactFax)
    {
        $this->contactFax = $contactFax;
    
        return $this;
    }

    /**
     * Get contactFax
     *
     * @return string 
     */
    public function getContactFax()
    {
        return $this->contactFax;
    }

    /**
     * Set contactCity
     *
     * @param string $contactCity
     * @return Contacts
     */
    public function setContactCity($contactCity)
    {
        $this->contactCity = $contactCity;
    
        return $this;
    }

    /**
     * Get contactCity
     *
     * @return string 
     */
    public function getContactCity()
    {
        return $this->contactCity;
    }

    /**
     * Set contactCounty
     *
     * @param string $contactCounty
     * @return Contacts
     */
    public function setContactCounty($contactCounty)
    {
        $this->contactCounty = $contactCounty;
    
        return $this;
    }

    /**
     * Get contactCounty
     *
     * @return string 
     */
    public function getContactCounty()
    {
        return $this->contactCounty;
    }

    /**
     * Set contactState
     *
     * @param string $contactState
     * @return Contacts
     */
    public function setContactState($contactState)
    {
        $this->contactState = $contactState;
    
        return $this;
    }

    /**
     * Get contactState
     *
     * @return string 
     */
    public function getContactState()
    {
        return $this->contactState;
    }

    /**
     * Set contactCountry
     *
     * @param string $contactCountry
     * @return Contacts
     */
    public function setContactCountry($contactCountry)
    {
        $this->contactCountry = $contactCountry;
    
        return $this;
    }

    /**
     * Get contactCountry
     *
     * @return string 
     */
    public function getContactCountry()
    {
        return $this->contactCountry;
    }

    /**
     * Set user
     *
     * @param Users $user
     * @return Contacts
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
