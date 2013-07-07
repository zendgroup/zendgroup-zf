<?php

namespace ZG\Model\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContactAssociations
 *
 * @ORM\Table(name="contact_associations")
 * @ORM\Entity(repositoryClass="ZG\Model\Repositories\ContactAssociationsRepository")
 */
class ContactAssociations
{
    /**
     * @var integer $contactAssociationId
     *
     * @ORM\Column(name="contact_association_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $contactAssociationId;

    /**
     * @var ContactGroups
     *
     * @ORM\ManyToOne(targetEntity="ContactGroups")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="contact_group_id", referencedColumnName="contact_group_id")
     * })
     */
    private $contactGroup;

    /**
     * @var Contacts
     *
     * @ORM\ManyToOne(targetEntity="Contacts")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="contact_id", referencedColumnName="contact_id")
     * })
     */
    private $contact;


    /**
     * Get contactAssociationId
     *
     * @return integer 
     */
    public function getContactAssociationId()
    {
        return $this->contactAssociationId;
    }

    /**
     * Set contactGroup
     *
     * @param ContactGroups $contactGroup
     * @return ContactAssociations
     */
    public function setContactGroup(\ContactGroups $contactGroup = null)
    {
        $this->contactGroup = $contactGroup;
    
        return $this;
    }

    /**
     * Get contactGroup
     *
     * @return ContactGroups 
     */
    public function getContactGroup()
    {
        return $this->contactGroup;
    }

    /**
     * Set contact
     *
     * @param Contacts $contact
     * @return ContactAssociations
     */
    public function setContact(\Contacts $contact = null)
    {
        $this->contact = $contact;
    
        return $this;
    }

    /**
     * Get contact
     *
     * @return Contacts 
     */
    public function getContact()
    {
        return $this->contact;
    }
}
