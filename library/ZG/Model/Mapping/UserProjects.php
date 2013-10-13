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

namespace ZG\Model\Mapping;

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
     * @var \ZG\Model\Mapping\Users
     *
     * @ORM\ManyToOne(targetEntity="ZG\Model\Mapping\Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="user_id")
     * })
     */
    private $user;


}
