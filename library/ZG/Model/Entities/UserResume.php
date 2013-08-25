<?php

namespace ZG\Model\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserResume
 *
 * @ORM\Table(name="user_resume")
 * @ORM\Entity(repositoryClass="ZG\Model\Repositories\UserResumeRepository")
 */
class UserResume
{
    /**
     * @var integer $resumeId
     *
     * @ORM\Column(name="resume_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $resumeId;

    /**
     * @var string $currentPosition
     *
     * @ORM\Column(name="current_position", type="string", length=255, nullable=true)
     */
    private $currentPosition;

    /**
     * @var string $positionExpectation
     *
     * @ORM\Column(name="position_expectation", type="string", length=255, nullable=true)
     */
    private $positionExpectation;

    /**
     * @var string $jobDescription
     *
     * @ORM\Column(name="job_description", type="string", length=255, nullable=true)
     */
    private $jobDescription;

    /**
     * @var string $resumeLanguage
     *
     * @ORM\Column(name="resume_language", type="string", length=255, nullable=true)
     */
    private $resumeLanguage;

    /**
     * @var string $education
     *
     * @ORM\Column(name="education", type="string", length=255, nullable=true)
     */
    private $education;

    /**
     * @var string $certificate
     *
     * @ORM\Column(name="certificate", type="string", length=255, nullable=true)
     */
    private $certificate;

    /**
     * @var string $programmingSkill
     *
     * @ORM\Column(name="programming_skill", type="string", length=255, nullable=true)
     */
    private $programmingSkill;

    /**
     * @var string $analysisSkill
     *
     * @ORM\Column(name="analysis_skill", type="string", length=255, nullable=true)
     */
    private $analysisSkill;

    /**
     * @var string $sdmk
     *
     * @ORM\Column(name="sdmk", type="string", length=255, nullable=true)
     */
    private $sdmk;

    /**
     * @var string $sdpk
     *
     * @ORM\Column(name="sdpk", type="string", length=255, nullable=true)
     */
    private $sdpk;

    /**
     * @var string $engineeringSkill
     *
     * @ORM\Column(name="engineering_skill", type="string", length=255, nullable=true)
     */
    private $engineeringSkill;

    /**
     * @var string $communicationSkill
     *
     * @ORM\Column(name="communication_skill", type="string", length=255, nullable=true)
     */
    private $communicationSkill;

    /**
     * @var string $problemSolving
     *
     * @ORM\Column(name="problem_solving", type="string", length=255, nullable=true)
     */
    private $problemSolving;

    /**
     * @var string $teamwork
     *
     * @ORM\Column(name="teamwork", type="string", length=255, nullable=true)
     */
    private $teamwork;

    /**
     * @var string $practicalExperience
     *
     * @ORM\Column(name="practical_experience", type="string", length=255, nullable=true)
     */
    private $practicalExperience;

    /**
     * @var string $hardwarePlatforms
     *
     * @ORM\Column(name="hardware_platforms", type="string", length=255, nullable=true)
     */
    private $hardwarePlatforms;

    /**
     * @var string $programmingLanguage
     *
     * @ORM\Column(name="programming_language", type="string", length=255, nullable=true)
     */
    private $programmingLanguage;

    /**
     * @var string $softwareTools
     *
     * @ORM\Column(name="software_tools", type="string", length=255, nullable=true)
     */
    private $softwareTools;

    /**
     * @var string $methodlogics
     *
     * @ORM\Column(name="methodlogics", type="string", length=255, nullable=true)
     */
    private $methodlogics;

    /**
     * @var string $programmingLanguageDetail
     *
     * @ORM\Column(name="programming_language_detail", type="string", length=255, nullable=true)
     */
    private $programmingLanguageDetail;

    /**
     * @var string $reference
     *
     * @ORM\Column(name="reference", type="string", length=45, nullable=true)
     */
    private $reference;

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
     * Get resumeId
     *
     * @return integer 
     */
    public function getResumeId()
    {
        return $this->resumeId;
    }

    /**
     * Set currentPosition
     *
     * @param string $currentPosition
     * @return UserResume
     */
    public function setCurrentPosition($currentPosition)
    {
        $this->currentPosition = $currentPosition;
    
        return $this;
    }

    /**
     * Get currentPosition
     *
     * @return string 
     */
    public function getCurrentPosition()
    {
        return $this->currentPosition;
    }

    /**
     * Set positionExpectation
     *
     * @param string $positionExpectation
     * @return UserResume
     */
    public function setPositionExpectation($positionExpectation)
    {
        $this->positionExpectation = $positionExpectation;
    
        return $this;
    }

    /**
     * Get positionExpectation
     *
     * @return string 
     */
    public function getPositionExpectation()
    {
        return $this->positionExpectation;
    }

    /**
     * Set jobDescription
     *
     * @param string $jobDescription
     * @return UserResume
     */
    public function setJobDescription($jobDescription)
    {
        $this->jobDescription = $jobDescription;
    
        return $this;
    }

    /**
     * Get jobDescription
     *
     * @return string 
     */
    public function getJobDescription()
    {
        return $this->jobDescription;
    }

    /**
     * Set resumeLanguage
     *
     * @param string $resumeLanguage
     * @return UserResume
     */
    public function setResumeLanguage($resumeLanguage)
    {
        $this->resumeLanguage = $resumeLanguage;
    
        return $this;
    }

    /**
     * Get resumeLanguage
     *
     * @return string 
     */
    public function getResumeLanguage()
    {
        return $this->resumeLanguage;
    }

    /**
     * Set education
     *
     * @param string $education
     * @return UserResume
     */
    public function setEducation($education)
    {
        $this->education = $education;
    
        return $this;
    }

    /**
     * Get education
     *
     * @return string 
     */
    public function getEducation()
    {
        return $this->education;
    }

    /**
     * Set certificate
     *
     * @param string $certificate
     * @return UserResume
     */
    public function setCertificate($certificate)
    {
        $this->certificate = $certificate;
    
        return $this;
    }

    /**
     * Get certificate
     *
     * @return string 
     */
    public function getCertificate()
    {
        return $this->certificate;
    }

    /**
     * Set programmingSkill
     *
     * @param string $programmingSkill
     * @return UserResume
     */
    public function setProgrammingSkill($programmingSkill)
    {
        $this->programmingSkill = $programmingSkill;
    
        return $this;
    }

    /**
     * Get programmingSkill
     *
     * @return string 
     */
    public function getProgrammingSkill()
    {
        return $this->programmingSkill;
    }

    /**
     * Set analysisSkill
     *
     * @param string $analysisSkill
     * @return UserResume
     */
    public function setAnalysisSkill($analysisSkill)
    {
        $this->analysisSkill = $analysisSkill;
    
        return $this;
    }

    /**
     * Get analysisSkill
     *
     * @return string 
     */
    public function getAnalysisSkill()
    {
        return $this->analysisSkill;
    }

    /**
     * Set sdmk
     *
     * @param string $sdmk
     * @return UserResume
     */
    public function setSdmk($sdmk)
    {
        $this->sdmk = $sdmk;
    
        return $this;
    }

    /**
     * Get sdmk
     *
     * @return string 
     */
    public function getSdmk()
    {
        return $this->sdmk;
    }

    /**
     * Set sdpk
     *
     * @param string $sdpk
     * @return UserResume
     */
    public function setSdpk($sdpk)
    {
        $this->sdpk = $sdpk;
    
        return $this;
    }

    /**
     * Get sdpk
     *
     * @return string 
     */
    public function getSdpk()
    {
        return $this->sdpk;
    }

    /**
     * Set engineeringSkill
     *
     * @param string $engineeringSkill
     * @return UserResume
     */
    public function setEngineeringSkill($engineeringSkill)
    {
        $this->engineeringSkill = $engineeringSkill;
    
        return $this;
    }

    /**
     * Get engineeringSkill
     *
     * @return string 
     */
    public function getEngineeringSkill()
    {
        return $this->engineeringSkill;
    }

    /**
     * Set communicationSkill
     *
     * @param string $communicationSkill
     * @return UserResume
     */
    public function setCommunicationSkill($communicationSkill)
    {
        $this->communicationSkill = $communicationSkill;
    
        return $this;
    }

    /**
     * Get communicationSkill
     *
     * @return string 
     */
    public function getCommunicationSkill()
    {
        return $this->communicationSkill;
    }

    /**
     * Set problemSolving
     *
     * @param string $problemSolving
     * @return UserResume
     */
    public function setProblemSolving($problemSolving)
    {
        $this->problemSolving = $problemSolving;
    
        return $this;
    }

    /**
     * Get problemSolving
     *
     * @return string 
     */
    public function getProblemSolving()
    {
        return $this->problemSolving;
    }

    /**
     * Set teamwork
     *
     * @param string $teamwork
     * @return UserResume
     */
    public function setTeamwork($teamwork)
    {
        $this->teamwork = $teamwork;
    
        return $this;
    }

    /**
     * Get teamwork
     *
     * @return string 
     */
    public function getTeamwork()
    {
        return $this->teamwork;
    }

    /**
     * Set practicalExperience
     *
     * @param string $practicalExperience
     * @return UserResume
     */
    public function setPracticalExperience($practicalExperience)
    {
        $this->practicalExperience = $practicalExperience;
    
        return $this;
    }

    /**
     * Get practicalExperience
     *
     * @return string 
     */
    public function getPracticalExperience()
    {
        return $this->practicalExperience;
    }

    /**
     * Set hardwarePlatforms
     *
     * @param string $hardwarePlatforms
     * @return UserResume
     */
    public function setHardwarePlatforms($hardwarePlatforms)
    {
        $this->hardwarePlatforms = $hardwarePlatforms;
    
        return $this;
    }

    /**
     * Get hardwarePlatforms
     *
     * @return string 
     */
    public function getHardwarePlatforms()
    {
        return $this->hardwarePlatforms;
    }

    /**
     * Set programmingLanguage
     *
     * @param string $programmingLanguage
     * @return UserResume
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
     * Set softwareTools
     *
     * @param string $softwareTools
     * @return UserResume
     */
    public function setSoftwareTools($softwareTools)
    {
        $this->softwareTools = $softwareTools;
    
        return $this;
    }

    /**
     * Get softwareTools
     *
     * @return string 
     */
    public function getSoftwareTools()
    {
        return $this->softwareTools;
    }

    /**
     * Set methodlogics
     *
     * @param string $methodlogics
     * @return UserResume
     */
    public function setMethodlogics($methodlogics)
    {
        $this->methodlogics = $methodlogics;
    
        return $this;
    }

    /**
     * Get methodlogics
     *
     * @return string 
     */
    public function getMethodlogics()
    {
        return $this->methodlogics;
    }

    /**
     * Set programmingLanguageDetail
     *
     * @param string $programmingLanguageDetail
     * @return UserResume
     */
    public function setProgrammingLanguageDetail($programmingLanguageDetail)
    {
        $this->programmingLanguageDetail = $programmingLanguageDetail;
    
        return $this;
    }

    /**
     * Get programmingLanguageDetail
     *
     * @return string 
     */
    public function getProgrammingLanguageDetail()
    {
        return $this->programmingLanguageDetail;
    }

    /**
     * Set reference
     *
     * @param string $reference
     * @return UserResume
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
    
        return $this;
    }

    /**
     * Get reference
     *
     * @return string 
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set user
     *
     * @param Users $user
     * @return UserResume
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
