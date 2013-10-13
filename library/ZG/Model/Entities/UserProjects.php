<?php

/**
 * ZEND GROUP
 *
 * @name        UserProjects.php
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

namespace ZG\Model\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserProjects
 *
 * @ORM\Table(name="user_projects", indexes={@ORM\Index(name="fk_project_user_idx", columns={"user_id"})})
 * @ORM\Entity(repositoryClass="ZG\Model\Repositories\UserProjects")
 */
class UserProjects
{
    /**
     * @var integer
     *
     * @ORM\Column(name="project_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $projectId;

    /**
     * @var string
     *
     * @ORM\Column(name="user_position", type="string", length=255, nullable=true)
     */
    private $userPosition;

    /**
     * @var string
     *
     * @ORM\Column(name="project_name", type="string", length=255, nullable=true)
     */
    private $projectName;

    /**
     * @var string
     *
     * @ORM\Column(name="project_code", type="string", length=255, nullable=true)
     */
    private $projectCode;

    /**
     * @var string
     *
     * @ORM\Column(name="project_description", type="string", length=255, nullable=true)
     */
    private $projectDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="project_customer", type="string", length=255, nullable=true)
     */
    private $projectCustomer;

    /**
     * @var integer
     *
     * @ORM\Column(name="project_start_date", type="integer", nullable=true)
     */
    private $projectStartDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="project_end_date", type="integer", nullable=true)
     */
    private $projectEndDate;

    /**
     * @var string
     *
     * @ORM\Column(name="team_size", type="string", length=255, nullable=true)
     */
    private $teamSize;

    /**
     * @var string
     *
     * @ORM\Column(name="project_scope", type="string", length=255, nullable=true)
     */
    private $projectScope;

    /**
     * @var string
     *
     * @ORM\Column(name="development_environment", type="string", length=255, nullable=true)
     */
    private $developmentEnvironment;

    /**
     * @var string
     *
     * @ORM\Column(name="database", type="string", length=255, nullable=true)
     */
    private $database;

    /**
     * @var string
     *
     * @ORM\Column(name="programming_language", type="string", length=255, nullable=true)
     */
    private $programmingLanguage;

    /**
     * @var string
     *
     * @ORM\Column(name="engineering", type="string", length=255, nullable=true)
     */
    private $engineering;

    /**
     * @var string
     *
     * @ORM\Column(name="tools", type="string", length=255, nullable=true)
     */
    private $tools;

    /**
     * @var string
     *
     * @ORM\Column(name="specific_technologies", type="string", length=255, nullable=true)
     */
    private $specificTechnologies;

    /**
     * @var \ZG\Model\Entities\Users
     *
     * @ORM\ManyToOne(targetEntity="ZG\Model\Entities\Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="user_id")
     * })
     */
    private $user;


    /**
     * Get projectId
     *
     * @return integer 
     */
    public function getProjectId()
    {
        return $this->projectId;
    }

    /**
     * Set userPosition
     *
     * @param string $userPosition
     *
     * @return UserProjects
     */
    public function setUserPosition($userPosition)
    {
        $this->userPosition = $userPosition;
    
        return $this;
    }

    /**
     * Get userPosition
     *
     * @return string 
     */
    public function getUserPosition()
    {
        return $this->userPosition;
    }

    /**
     * Set projectName
     *
     * @param string $projectName
     *
     * @return UserProjects
     */
    public function setProjectName($projectName)
    {
        $this->projectName = $projectName;
    
        return $this;
    }

    /**
     * Get projectName
     *
     * @return string 
     */
    public function getProjectName()
    {
        return $this->projectName;
    }

    /**
     * Set projectCode
     *
     * @param string $projectCode
     *
     * @return UserProjects
     */
    public function setProjectCode($projectCode)
    {
        $this->projectCode = $projectCode;
    
        return $this;
    }

    /**
     * Get projectCode
     *
     * @return string 
     */
    public function getProjectCode()
    {
        return $this->projectCode;
    }

    /**
     * Set projectDescription
     *
     * @param string $projectDescription
     *
     * @return UserProjects
     */
    public function setProjectDescription($projectDescription)
    {
        $this->projectDescription = $projectDescription;
    
        return $this;
    }

    /**
     * Get projectDescription
     *
     * @return string 
     */
    public function getProjectDescription()
    {
        return $this->projectDescription;
    }

    /**
     * Set projectCustomer
     *
     * @param string $projectCustomer
     *
     * @return UserProjects
     */
    public function setProjectCustomer($projectCustomer)
    {
        $this->projectCustomer = $projectCustomer;
    
        return $this;
    }

    /**
     * Get projectCustomer
     *
     * @return string 
     */
    public function getProjectCustomer()
    {
        return $this->projectCustomer;
    }

    /**
     * Set projectStartDate
     *
     * @param integer $projectStartDate
     *
     * @return UserProjects
     */
    public function setProjectStartDate($projectStartDate)
    {
        $this->projectStartDate = $projectStartDate;
    
        return $this;
    }

    /**
     * Get projectStartDate
     *
     * @return integer 
     */
    public function getProjectStartDate()
    {
        return $this->projectStartDate;
    }

    /**
     * Set projectEndDate
     *
     * @param integer $projectEndDate
     *
     * @return UserProjects
     */
    public function setProjectEndDate($projectEndDate)
    {
        $this->projectEndDate = $projectEndDate;
    
        return $this;
    }

    /**
     * Get projectEndDate
     *
     * @return integer 
     */
    public function getProjectEndDate()
    {
        return $this->projectEndDate;
    }

    /**
     * Set teamSize
     *
     * @param string $teamSize
     *
     * @return UserProjects
     */
    public function setTeamSize($teamSize)
    {
        $this->teamSize = $teamSize;
    
        return $this;
    }

    /**
     * Get teamSize
     *
     * @return string 
     */
    public function getTeamSize()
    {
        return $this->teamSize;
    }

    /**
     * Set projectScope
     *
     * @param string $projectScope
     *
     * @return UserProjects
     */
    public function setProjectScope($projectScope)
    {
        $this->projectScope = $projectScope;
    
        return $this;
    }

    /**
     * Get projectScope
     *
     * @return string 
     */
    public function getProjectScope()
    {
        return $this->projectScope;
    }

    /**
     * Set developmentEnvironment
     *
     * @param string $developmentEnvironment
     *
     * @return UserProjects
     */
    public function setDevelopmentEnvironment($developmentEnvironment)
    {
        $this->developmentEnvironment = $developmentEnvironment;
    
        return $this;
    }

    /**
     * Get developmentEnvironment
     *
     * @return string 
     */
    public function getDevelopmentEnvironment()
    {
        return $this->developmentEnvironment;
    }

    /**
     * Set database
     *
     * @param string $database
     *
     * @return UserProjects
     */
    public function setDatabase($database)
    {
        $this->database = $database;
    
        return $this;
    }

    /**
     * Get database
     *
     * @return string 
     */
    public function getDatabase()
    {
        return $this->database;
    }

    /**
     * Set programmingLanguage
     *
     * @param string $programmingLanguage
     *
     * @return UserProjects
     */
    public function setProgrammingLanguage($programmingLanguage)
    {
        $this->programmingLanguage = $programmingLanguage;
    
        return $this;
    }

    /**
     * Get programmingLanguage
     *
     * @return string 
     */
    public function getProgrammingLanguage()
    {
        return $this->programmingLanguage;
    }

    /**
     * Set engineering
     *
     * @param string $engineering
     *
     * @return UserProjects
     */
    public function setEngineering($engineering)
    {
        $this->engineering = $engineering;
    
        return $this;
    }

    /**
     * Get engineering
     *
     * @return string 
     */
    public function getEngineering()
    {
        return $this->engineering;
    }

    /**
     * Set tools
     *
     * @param string $tools
     *
     * @return UserProjects
     */
    public function setTools($tools)
    {
        $this->tools = $tools;
    
        return $this;
    }

    /**
     * Get tools
     *
     * @return string 
     */
    public function getTools()
    {
        return $this->tools;
    }

    /**
     * Set specificTechnologies
     *
     * @param string $specificTechnologies
     *
     * @return UserProjects
     */
    public function setSpecificTechnologies($specificTechnologies)
    {
        $this->specificTechnologies = $specificTechnologies;
    
        return $this;
    }

    /**
     * Get specificTechnologies
     *
     * @return string 
     */
    public function getSpecificTechnologies()
    {
        return $this->specificTechnologies;
    }

    /**
     * Set user
     *
     * @param \ZG\Model\Entities\Users $user
     *
     * @return UserProjects
     */
    public function setUser(\ZG\Model\Entities\Users $user = null)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return \ZG\Model\Entities\Users 
     */
    public function getUser()
    {
        return $this->user;
    }
}
