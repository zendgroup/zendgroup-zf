<?php

namespace ZG\Model\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 *
 * @ORM\Table(name="users")
 * @ORM\Entity(repositoryClass="ZG\Model\Repositories\UsersRepository")
 */
class Users
{
    /**
     * @var integer $userId
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userId;

    /**
     * @var string $userName
     *
     * @ORM\Column(name="user_name", type="string", length=45, nullable=false)
     */
    private $userName;

    /**
     * @var string $userPassword
     *
     * @ORM\Column(name="user_password", type="string", length=45, nullable=false)
     */
    private $userPassword;

    /**
     * @var integer $passwordModifyDate
     *
     * @ORM\Column(name="password_modify_date", type="integer", nullable=true)
     */
    private $passwordModifyDate;

    /**
     * @var string $userEmail
     *
     * @ORM\Column(name="user_email", type="string", length=125, nullable=true)
     */
    private $userEmail;

    /**
     * @var string $userTitle
     *
     * @ORM\Column(name="user_title", type="string", length=45, nullable=true)
     */
    private $userTitle;

    /**
     * @var integer $userLastVisit
     *
     * @ORM\Column(name="user_last_visit", type="integer", nullable=true)
     */
    private $userLastVisit;

    /**
     * @var boolean $userActivity
     *
     * @ORM\Column(name="user_activity", type="boolean", nullable=true)
     */
    private $userActivity;

    /**
     * @var integer $userPostCount
     *
     * @ORM\Column(name="user_post_count", type="integer", nullable=true)
     */
    private $userPostCount;

    /**
     * @var string $userIpAddress
     *
     * @ORM\Column(name="user_ip_address", type="string", length=45, nullable=true)
     */
    private $userIpAddress;

    /**
     * @var integer $userLanguageId
     *
     * @ORM\Column(name="user_language_id", type="integer", nullable=true)
     */
    private $userLanguageId;

    /**
     * @var integer $userTemplateId
     *
     * @ORM\Column(name="user_template_id", type="integer", nullable=true)
     */
    private $userTemplateId;

    /**
     * @var integer $userSkinId
     *
     * @ORM\Column(name="user_skin_id", type="integer", nullable=true)
     */
    private $userSkinId;

    /**
     * @var string $firstName
     *
     * @ORM\Column(name="first_name", type="string", length=45, nullable=true)
     */
    private $firstName;

    /**
     * @var string $lastName
     *
     * @ORM\Column(name="last_name", type="string", length=45, nullable=true)
     */
    private $lastName;

    /**
     * @var integer $dateOfBirth
     *
     * @ORM\Column(name="date_of_birth", type="integer", nullable=true)
     */
    private $dateOfBirth;

    /**
     * @var integer $created
     *
     * @ORM\Column(name="created", type="integer", nullable=true)
     */
    private $created;

    /**
     * @var integer $modified
     *
     * @ORM\Column(name="modified", type="integer", nullable=true)
     */
    private $modified;

    /**
     * @var string $website
     *
     * @ORM\Column(name="website", type="string", length=255, nullable=true)
     */
    private $website;

    /**
     * @var string $gender
     *
     * @ORM\Column(name="gender", type="string", nullable=true)
     */
    private $gender;

    /**
     * @var string $maritalStatus
     *
     * @ORM\Column(name="marital_status", type="string", nullable=true)
     */
    private $maritalStatus;

    /**
     * @var string $telephone
     *
     * @ORM\Column(name="telephone", type="string", length=45, nullable=true)
     */
    private $telephone;

    /**
     * @var string $mobilePhone
     *
     * @ORM\Column(name="mobile_phone", type="string", length=45, nullable=true)
     */
    private $mobilePhone;

    /**
     * @var string $contactName
     *
     * @ORM\Column(name="contact_name", type="string", length=45, nullable=true)
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
     * @ORM\Column(name="contact_phone", type="string", length=255, nullable=true)
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
     * @var string $userParams
     *
     * @ORM\Column(name="user_params", type="text", nullable=true)
     */
    private $userParams;


    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set userName
     *
     * @param string $userName
     * @return Users
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
    
        return $this;
    }

    /**
     * Get userName
     *
     * @return string 
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * Set userPassword
     *
     * @param string $userPassword
     * @return Users
     */
    public function setUserPassword($userPassword)
    {
        $this->userPassword = $userPassword;
    
        return $this;
    }

    /**
     * Get userPassword
     *
     * @return string 
     */
    public function getUserPassword()
    {
        return $this->userPassword;
    }

    /**
     * Set passwordModifyDate
     *
     * @param integer $passwordModifyDate
     * @return Users
     */
    public function setPasswordModifyDate($passwordModifyDate)
    {
        $this->passwordModifyDate = $passwordModifyDate;
    
        return $this;
    }

    /**
     * Get passwordModifyDate
     *
     * @return integer 
     */
    public function getPasswordModifyDate()
    {
        return $this->passwordModifyDate;
    }

    /**
     * Set userEmail
     *
     * @param string $userEmail
     * @return Users
     */
    public function setUserEmail($userEmail)
    {
        $this->userEmail = $userEmail;
    
        return $this;
    }

    /**
     * Get userEmail
     *
     * @return string 
     */
    public function getUserEmail()
    {
        return $this->userEmail;
    }

    /**
     * Set userTitle
     *
     * @param string $userTitle
     * @return Users
     */
    public function setUserTitle($userTitle)
    {
        $this->userTitle = $userTitle;
    
        return $this;
    }

    /**
     * Get userTitle
     *
     * @return string 
     */
    public function getUserTitle()
    {
        return $this->userTitle;
    }

    /**
     * Set userLastVisit
     *
     * @param integer $userLastVisit
     * @return Users
     */
    public function setUserLastVisit($userLastVisit)
    {
        $this->userLastVisit = $userLastVisit;
    
        return $this;
    }

    /**
     * Get userLastVisit
     *
     * @return integer 
     */
    public function getUserLastVisit()
    {
        return $this->userLastVisit;
    }

    /**
     * Set userActivity
     *
     * @param boolean $userActivity
     * @return Users
     */
    public function setUserActivity($userActivity)
    {
        $this->userActivity = $userActivity;
    
        return $this;
    }

    /**
     * Get userActivity
     *
     * @return boolean 
     */
    public function getUserActivity()
    {
        return $this->userActivity;
    }

    /**
     * Set userPostCount
     *
     * @param integer $userPostCount
     * @return Users
     */
    public function setUserPostCount($userPostCount)
    {
        $this->userPostCount = $userPostCount;
    
        return $this;
    }

    /**
     * Get userPostCount
     *
     * @return integer 
     */
    public function getUserPostCount()
    {
        return $this->userPostCount;
    }

    /**
     * Set userIpAddress
     *
     * @param string $userIpAddress
     * @return Users
     */
    public function setUserIpAddress($userIpAddress)
    {
        $this->userIpAddress = $userIpAddress;
    
        return $this;
    }

    /**
     * Get userIpAddress
     *
     * @return string 
     */
    public function getUserIpAddress()
    {
        return $this->userIpAddress;
    }

    /**
     * Set userLanguageId
     *
     * @param integer $userLanguageId
     * @return Users
     */
    public function setUserLanguageId($userLanguageId)
    {
        $this->userLanguageId = $userLanguageId;
    
        return $this;
    }

    /**
     * Get userLanguageId
     *
     * @return integer 
     */
    public function getUserLanguageId()
    {
        return $this->userLanguageId;
    }

    /**
     * Set userTemplateId
     *
     * @param integer $userTemplateId
     * @return Users
     */
    public function setUserTemplateId($userTemplateId)
    {
        $this->userTemplateId = $userTemplateId;
    
        return $this;
    }

    /**
     * Get userTemplateId
     *
     * @return integer 
     */
    public function getUserTemplateId()
    {
        return $this->userTemplateId;
    }

    /**
     * Set userSkinId
     *
     * @param integer $userSkinId
     * @return Users
     */
    public function setUserSkinId($userSkinId)
    {
        $this->userSkinId = $userSkinId;
    
        return $this;
    }

    /**
     * Get userSkinId
     *
     * @return integer 
     */
    public function getUserSkinId()
    {
        return $this->userSkinId;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     * @return Users
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    
        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return Users
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    
        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set dateOfBirth
     *
     * @param integer $dateOfBirth
     * @return Users
     */
    public function setDateOfBirth($dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;
    
        return $this;
    }

    /**
     * Get dateOfBirth
     *
     * @return integer 
     */
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    /**
     * Set created
     *
     * @param integer $created
     * @return Users
     */
    public function setCreated($created)
    {
        $this->created = $created;
    
        return $this;
    }

    /**
     * Get created
     *
     * @return integer 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set modified
     *
     * @param integer $modified
     * @return Users
     */
    public function setModified($modified)
    {
        $this->modified = $modified;
    
        return $this;
    }

    /**
     * Get modified
     *
     * @return integer 
     */
    public function getModified()
    {
        return $this->modified;
    }

    /**
     * Set website
     *
     * @param string $website
     * @return Users
     */
    public function setWebsite($website)
    {
        $this->website = $website;
    
        return $this;
    }

    /**
     * Get website
     *
     * @return string 
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Set gender
     *
     * @param string $gender
     * @return Users
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    
        return $this;
    }

    /**
     * Get gender
     *
     * @return string 
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set maritalStatus
     *
     * @param string $maritalStatus
     * @return Users
     */
    public function setMaritalStatus($maritalStatus)
    {
        $this->maritalStatus = $maritalStatus;
    
        return $this;
    }

    /**
     * Get maritalStatus
     *
     * @return string 
     */
    public function getMaritalStatus()
    {
        return $this->maritalStatus;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     * @return Users
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    
        return $this;
    }

    /**
     * Get telephone
     *
     * @return string 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set mobilePhone
     *
     * @param string $mobilePhone
     * @return Users
     */
    public function setMobilePhone($mobilePhone)
    {
        $this->mobilePhone = $mobilePhone;
    
        return $this;
    }

    /**
     * Get mobilePhone
     *
     * @return string 
     */
    public function getMobilePhone()
    {
        return $this->mobilePhone;
    }

    /**
     * Set contactName
     *
     * @param string $contactName
     * @return Users
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
     * @return Users
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
     * @return Users
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
     * @return Users
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
     * @return Users
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
     * @return Users
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
     * @return Users
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
     * @return Users
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
     * @return Users
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
     * @return Users
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
     * Set userParams
     *
     * @param string $userParams
     * @return Users
     */
    public function setUserParams($userParams)
    {
        $this->userParams = $userParams;
    
        return $this;
    }

    /**
     * Get userParams
     *
     * @return string 
     */
    public function getUserParams()
    {
        return $this->userParams;
    }
}
