<?php

namespace ZG\Model\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Groups
 *
 * @ORM\Table(name="groups")
 * @ORM\Entity(repositoryClass="ZG\Model\Repositories\GroupsRepository")
 */
class Groups
{
    /**
     * @var integer $groupId
     *
     * @ORM\Column(name="group_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $groupId;

    /**
     * @var string $groupTitle
     *
     * @ORM\Column(name="group_title", type="string", length=45, nullable=true)
     */
    private $groupTitle;

    /**
     * @var string $groupDescription
     *
     * @ORM\Column(name="group_description", type="string", length=255, nullable=true)
     */
    private $groupDescription;


    /**
     * Get groupId
     *
     * @return integer 
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * Set groupTitle
     *
     * @param string $groupTitle
     * @return Groups
     */
    public function setGroupTitle($groupTitle)
    {
        $this->groupTitle = $groupTitle;
    
        return $this;
    }

    /**
     * Get groupTitle
     *
     * @return string 
     */
    public function getGroupTitle()
    {
        return $this->groupTitle;
    }

    /**
     * Set groupDescription
     *
     * @param string $groupDescription
     * @return Groups
     */
    public function setGroupDescription($groupDescription)
    {
        $this->groupDescription = $groupDescription;
    
        return $this;
    }

    /**
     * Get groupDescription
     *
     * @return string 
     */
    public function getGroupDescription()
    {
        return $this->groupDescription;
    }
}
