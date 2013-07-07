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
     * @var \DateTime $userPasswordDate
     *
     * @ORM\Column(name="user_password_date", type="date", nullable=true)
     */
    private $userPasswordDate;

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
     * @var \DateTime $userJoinDate
     *
     * @ORM\Column(name="user_join_date", type="date", nullable=true)
     */
    private $userJoinDate;

    /**
     * @var \DateTime $userLastVisit
     *
     * @ORM\Column(name="user_last_visit", type="date", nullable=true)
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
     * Set userPasswordDate
     *
     * @param \DateTime $userPasswordDate
     * @return Users
     */
    public function setUserPasswordDate($userPasswordDate)
    {
        $this->userPasswordDate = $userPasswordDate;
    
        return $this;
    }

    /**
     * Get userPasswordDate
     *
     * @return \DateTime 
     */
    public function getUserPasswordDate()
    {
        return $this->userPasswordDate;
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
     * Set userJoinDate
     *
     * @param \DateTime $userJoinDate
     * @return Users
     */
    public function setUserJoinDate($userJoinDate)
    {
        $this->userJoinDate = $userJoinDate;
    
        return $this;
    }

    /**
     * Get userJoinDate
     *
     * @return \DateTime 
     */
    public function getUserJoinDate()
    {
        return $this->userJoinDate;
    }

    /**
     * Set userLastVisit
     *
     * @param \DateTime $userLastVisit
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
     * @return \DateTime 
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
}
