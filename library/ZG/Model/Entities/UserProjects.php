<?php

/**
 *
 * ZEND GROUP
 *
 * @name        UserProjects.php
 * @category    Model
 * @package 	Entities
 * @subpackage  
 * @author      Thuy Dinh Xuan <thuydx@zendgroup.vn>
 * @link 		http://zendgroup.vn
 * @copyright   Copyright (c) 2012-2013 ZEND GROUP. All rights reserved (http://www.zendgroup.vn)
 * @license     http://zendgroup.vn/license/
 * @version     $0.1$
 * 3:52:05 AM - Apr 3, 2013
 *
 * LICENSE
 *
 * This source file is copyrighted by ZEND GROUP, full details in LICENSE.txt.
 * It is also available through the Internet at this URL:
 * http://zendgroup.vn/license/
 * If you did not receive a copy of the license and are unable to
 * obtain it through the Internet, please send an email
 * to license@zendgroup.vn so we can send you a copy immediately.
 */
            


use Doctrine\ORM\Mapping as ORM;

/**
 * UserProjects
 *
 * @ORM\Table(name="user_projects")
 * @ORM\Entity
 */
class UserProjects
{
    /**
     * @var integer $projectId
     *
     * @ORM\Column(name="project_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $projectId;

    /**
     * @var string $userPosition
     *
     * @ORM\Column(name="user_position", type="string", length=255, nullable=true)
     */
    private $userPosition;

    /**
     * @var string $projectName
     *
     * @ORM\Column(name="project_name", type="string", length=255, nullable=true)
     */
    private $projectName;

    /**
     * @var string $projectCode
     *
     * @ORM\Column(name="project_code", type="string", length=255, nullable=true)
     */
    private $projectCode;

    /**
     * @var string $projectDescription
     *
     * @ORM\Column(name="project_description", type="string", length=255, nullable=true)
     */
    private $projectDescription;

    /**
     * @var string $projectCustomer
     *
     * @ORM\Column(name="project_customer", type="string", length=255, nullable=true)
     */
    private $projectCustomer;

    /**
     * @var integer $projectStartDate
     *
     * @ORM\Column(name="project_start_date", type="integer", nullable=true)
     */
    private $projectStartDate;

    /**
     * @var integer $projectEndDate
     *
     * @ORM\Column(name="project_end_date", type="integer", nullable=true)
     */
    private $projectEndDate;

    /**
     * @var string $teamSize
     *
     * @ORM\Column(name="team_size", type="string", length=255, nullable=true)
     */
    private $teamSize;

    /**
     * @var string $projectScope
     *
     * @ORM\Column(name="project_scope", type="string", length=255, nullable=true)
     */
    private $projectScope;

    /**
     * @var string $developmentEnvironment
     *
     * @ORM\Column(name="development_environment", type="string", length=255, nullable=true)
     */
    private $developmentEnvironment;

    /**
     * @var string $database
     *
     * @ORM\Column(name="database", type="string", length=255, nullable=true)
     */
    private $database;

    /**
     * @var string $programmingLanguage
     *
     * @ORM\Column(name="programming_language", type="string", length=255, nullable=true)
     */
    private $programmingLanguage;

    /**
     * @var string $engineering
     *
     * @ORM\Column(name="engineering", type="string", length=255, nullable=true)
     */
    private $engineering;

    /**
     * @var string $tools
     *
     * @ORM\Column(name="tools", type="string", length=255, nullable=true)
     */
    private $tools;

    /**
     * @var string $specificTechnologies
     *
     * @ORM\Column(name="specific_technologies", type="string", length=255, nullable=true)
     */
    private $specificTechnologies;

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
     * @param Users $user
     * @return UserProjects
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