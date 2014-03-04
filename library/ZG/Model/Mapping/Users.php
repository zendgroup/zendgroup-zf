<?php

/**
 * ZEND GROUP
 *
 * @name        Users.php
 * @category    ZG
 * @package 	Model
 * @subpackage  Model\Entities
 * @author      Thuy Dinh Xuan <thuydx@zendgroup.vn>
 * @copyright   Copyright (c)2008-2010 ZEND GROUP. All rights reserved
 * @license     http://zendgroup.vn/license/
 * @version     $1.0$
 *
 * LICENSE
 *
 * This source file is copyrighted by ZEND GROUP, full details in LICENSE.txt.
 * It is also available through the Internet at this URL:
 * http://zendgroup.vn/license/
 * If you did not receive a copy of the license and are unable to
 * obtain it through the Internet, please send an email
 * to license@zendgroup.vn so we can send you a copy immediately.
 *
 */

namespace ZG\Model\Mapping;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 *
 * @ORM\Table(name="users")
 * @ORM\Entity(repositoryClass="ZG\Model\Repositories\Users")
 */
class Users
{
    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="user_name", type="string", length=45, nullable=false)
     */
    private $userName;

    /**
     * @var string
     *
     * @ORM\Column(name="user_password", type="string", length=45, nullable=false)
     */
    private $userPassword;

    /**
     * @var integer
     *
     * @ORM\Column(name="password_modify_date", type="integer", nullable=true)
     */
    private $passwordModifyDate;

    /**
     * @var string
     *
     * @ORM\Column(name="user_email", type="string", length=125, nullable=true)
     */
    private $userEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="user_title", type="string", length=45, nullable=true)
     */
    private $userTitle;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_last_visit", type="integer", nullable=true)
     */
    private $userLastVisit;

    /**
     * @var boolean
     *
     * @ORM\Column(name="user_activity", type="boolean", nullable=true)
     */
    private $userActivity;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_post_count", type="integer", nullable=true)
     */
    private $userPostCount;

    /**
     * @var string
     *
     * @ORM\Column(name="user_ip_address", type="string", length=45, nullable=true)
     */
    private $userIpAddress;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_language_id", type="integer", nullable=true)
     */
    private $userLanguageId;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_template_id", type="integer", nullable=true)
     */
    private $userTemplateId;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_skin_id", type="integer", nullable=true)
     */
    private $userSkinId;

    /**
     * @var string
     *
     * @ORM\Column(name="first_name", type="string", length=45, nullable=true)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=45, nullable=true)
     */
    private $lastName;

    /**
     * @var integer
     *
     * @ORM\Column(name="date_of_birth", type="integer", nullable=true)
     */
    private $dateOfBirth;

    /**
     * @var integer
     *
     * @ORM\Column(name="created", type="integer", nullable=true)
     */
    private $created;

    /**
     * @var integer
     *
     * @ORM\Column(name="modified", type="integer", nullable=true)
     */
    private $modified;

    /**
     * @var string
     *
     * @ORM\Column(name="website", type="string", length=255, nullable=true)
     */
    private $website;

    /**
     * @var string
     *
     * @ORM\Column(name="gender", type="string", nullable=true)
     */
    private $gender;

    /**
     * @var string
     *
     * @ORM\Column(name="marital_status", type="string", nullable=true)
     */
    private $maritalStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=45, nullable=true)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="mobile_phone", type="string", length=45, nullable=true)
     */
    private $mobilePhone;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_name", type="string", length=45, nullable=true)
     */
    private $contactName;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_address", type="string", length=255, nullable=true)
     */
    private $contactAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_telephone", type="string", length=45, nullable=true)
     */
    private $contactTelephone;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_phone", type="string", length=255, nullable=true)
     */
    private $contactPhone;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_email", type="string", length=125, nullable=true)
     */
    private $contactEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_fax", type="string", length=45, nullable=true)
     */
    private $contactFax;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_city", type="string", length=125, nullable=true)
     */
    private $contactCity;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_county", type="string", length=125, nullable=true)
     */
    private $contactCounty;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_state", type="string", length=125, nullable=true)
     */
    private $contactState;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_country", type="string", length=125, nullable=true)
     */
    private $contactCountry;

    /**
     * @var string
     *
     * @ORM\Column(name="user_params", type="text", nullable=true)
     */
    private $userParams;


}
