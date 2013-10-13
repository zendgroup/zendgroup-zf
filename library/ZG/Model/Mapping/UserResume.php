<?php

/**
 * ZEND GROUP
 *
 * @name        UserResume.php
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
 * UserResume
 *
 * @ORM\Table(name="user_resume", indexes={@ORM\Index(name="fk_user_resume_idx", columns={"user_id"})})
 * @ORM\Entity(repositoryClass="ZG\Model\Repositories\UserResume")
 */
class UserResume
{
    /**
     * @var integer
     *
     * @ORM\Column(name="resume_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $resumeId;

    /**
     * @var string
     *
     * @ORM\Column(name="current_position", type="string", length=255, nullable=true)
     */
    private $currentPosition;

    /**
     * @var string
     *
     * @ORM\Column(name="position_expectation", type="string", length=255, nullable=true)
     */
    private $positionExpectation;

    /**
     * @var string
     *
     * @ORM\Column(name="job_description", type="string", length=255, nullable=true)
     */
    private $jobDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="resume_language", type="string", length=255, nullable=true)
     */
    private $resumeLanguage;

    /**
     * @var string
     *
     * @ORM\Column(name="education", type="string", length=255, nullable=true)
     */
    private $education;

    /**
     * @var string
     *
     * @ORM\Column(name="certificate", type="string", length=255, nullable=true)
     */
    private $certificate;

    /**
     * @var string
     *
     * @ORM\Column(name="programming_skill", type="string", length=255, nullable=true)
     */
    private $programmingSkill;

    /**
     * @var string
     *
     * @ORM\Column(name="analysis_skill", type="string", length=255, nullable=true)
     */
    private $analysisSkill;

    /**
     * @var string
     *
     * @ORM\Column(name="sdmk", type="string", length=255, nullable=true)
     */
    private $sdmk;

    /**
     * @var string
     *
     * @ORM\Column(name="sdpk", type="string", length=255, nullable=true)
     */
    private $sdpk;

    /**
     * @var string
     *
     * @ORM\Column(name="engineering_skill", type="string", length=255, nullable=true)
     */
    private $engineeringSkill;

    /**
     * @var string
     *
     * @ORM\Column(name="communication_skill", type="string", length=255, nullable=true)
     */
    private $communicationSkill;

    /**
     * @var string
     *
     * @ORM\Column(name="problem_solving", type="string", length=255, nullable=true)
     */
    private $problemSolving;

    /**
     * @var string
     *
     * @ORM\Column(name="teamwork", type="string", length=255, nullable=true)
     */
    private $teamwork;

    /**
     * @var string
     *
     * @ORM\Column(name="practical_experience", type="string", length=255, nullable=true)
     */
    private $practicalExperience;

    /**
     * @var string
     *
     * @ORM\Column(name="hardware_platforms", type="string", length=255, nullable=true)
     */
    private $hardwarePlatforms;

    /**
     * @var string
     *
     * @ORM\Column(name="programming_language", type="string", length=255, nullable=true)
     */
    private $programmingLanguage;

    /**
     * @var string
     *
     * @ORM\Column(name="software_tools", type="string", length=255, nullable=true)
     */
    private $softwareTools;

    /**
     * @var string
     *
     * @ORM\Column(name="methodlogics", type="string", length=255, nullable=true)
     */
    private $methodlogics;

    /**
     * @var string
     *
     * @ORM\Column(name="programming_language_detail", type="string", length=255, nullable=true)
     */
    private $programmingLanguageDetail;

    /**
     * @var string
     *
     * @ORM\Column(name="reference", type="string", length=45, nullable=true)
     */
    private $reference;

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
