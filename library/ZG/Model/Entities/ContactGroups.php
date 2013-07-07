<?php

namespace ZG\Model\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContactGroups
 *
 * @ORM\Table(name="contact_groups")
 * @ORM\Entity(repositoryClass="ZG\Model\Repositories\ContactGroupsRepository")
 */
class ContactGroups
{
    /**
     * @var integer $contactGroupId
     *
     * @ORM\Column(name="contact_group_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $contactGroupId;

    /**
     * @var string $contactGroupName
     *
     * @ORM\Column(name="contact_group_name", type="string", length=45, nullable=true)
     */
    private $contactGroupName;

    /**
     * @var string $contactGroupDescription
     *
     * @ORM\Column(name="contact_group_description", type="string", length=255, nullable=true)
     */
    private $contactGroupDescription;

    /**
     * @var string $contactGroupAddress
     *
     * @ORM\Column(name="contact_group_address", type="string", length=125, nullable=true)
     */
    private $contactGroupAddress;

    /**
     * @var string $contactGroupPhone
     *
     * @ORM\Column(name="contact_group_phone", type="string", length=45, nullable=true)
     */
    private $contactGroupPhone;

    /**
     * @var string $contactGroupTelephone
     *
     * @ORM\Column(name="contact_group_telephone", type="string", length=45, nullable=true)
     */
    private $contactGroupTelephone;

    /**
     * @var string $contactGroupFax
     *
     * @ORM\Column(name="contact_group_fax", type="string", length=45, nullable=true)
     */
    private $contactGroupFax;


    /**
     * Get contactGroupId
     *
     * @return integer 
     */
    public function getContactGroupId()
    {
        return $this->contactGroupId;
    }

    /**
     * Set contactGroupName
     *
     * @param string $contactGroupName
     * @return ContactGroups
     */
    public function setContactGroupName($contactGroupName)
    {
        $this->contactGroupName = $contactGroupName;
    
        return $this;
    }

    /**
     * Get contactGroupName
     *
     * @return string 
     */
    public function getContactGroupName()
    {
        return $this->contactGroupName;
    }

    /**
     * Set contactGroupDescription
     *
     * @param string $contactGroupDescription
     * @return ContactGroups
     */
    public function setContactGroupDescription($contactGroupDescription)
    {
        $this->contactGroupDescription = $contactGroupDescription;
    
        return $this;
    }

    /**
     * Get contactGroupDescription
     *
     * @return string 
     */
    public function getContactGroupDescription()
    {
        return $this->contactGroupDescription;
    }

    /**
     * Set contactGroupAddress
     *
     * @param string $contactGroupAddress
     * @return ContactGroups
     */
    public function setContactGroupAddress($contactGroupAddress)
    {
        $this->contactGroupAddress = $contactGroupAddress;
    
        return $this;
    }

    /**
     * Get contactGroupAddress
     *
     * @return string 
     */
    public function getContactGroupAddress()
    {
        return $this->contactGroupAddress;
    }

    /**
     * Set contactGroupPhone
     *
     * @param string $contactGroupPhone
     * @return ContactGroups
     */
    public function setContactGroupPhone($contactGroupPhone)
    {
        $this->contactGroupPhone = $contactGroupPhone;
    
        return $this;
    }

    /**
     * Get contactGroupPhone
     *
     * @return string 
     */
    public function getContactGroupPhone()
    {
        return $this->contactGroupPhone;
    }

    /**
     * Set contactGroupTelephone
     *
     * @param string $contactGroupTelephone
     * @return ContactGroups
     */
    public function setContactGroupTelephone($contactGroupTelephone)
    {
        $this->contactGroupTelephone = $contactGroupTelephone;
    
        return $this;
    }

    /**
     * Get contactGroupTelephone
     *
     * @return string 
     */
    public function getContactGroupTelephone()
    {
        return $this->contactGroupTelephone;
    }

    /**
     * Set contactGroupFax
     *
     * @param string $contactGroupFax
     * @return ContactGroups
     */
    public function setContactGroupFax($contactGroupFax)
    {
        $this->contactGroupFax = $contactGroupFax;
    
        return $this;
    }

    /**
     * Get contactGroupFax
     *
     * @return string 
     */
    public function getContactGroupFax()
    {
        return $this->contactGroupFax;
    }
}
