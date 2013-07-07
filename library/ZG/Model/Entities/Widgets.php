<?php

namespace ZG\Model\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Widgets
 *
 * @ORM\Table(name="widgets")
 * @ORM\Entity(repositoryClass="ZG\Model\Repositories\WidgetsRepository")
 */
class Widgets
{
    /**
     * @var integer $widgetId
     *
     * @ORM\Column(name="widget_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $widgetId;

    /**
     * @var string $widgetName
     *
     * @ORM\Column(name="widget_name", type="string", length=45, nullable=true)
     */
    private $widgetName;

    /**
     * @var string $widgetFile
     *
     * @ORM\Column(name="widget_file", type="string", length=255, nullable=true)
     */
    private $widgetFile;

    /**
     * @var Template
     *
     * @ORM\ManyToOne(targetEntity="Template")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="template_id", referencedColumnName="template_id")
     * })
     */
    private $template;


    /**
     * Get widgetId
     *
     * @return integer 
     */
    public function getWidgetId()
    {
        return $this->widgetId;
    }

    /**
     * Set widgetName
     *
     * @param string $widgetName
     * @return Widgets
     */
    public function setWidgetName($widgetName)
    {
        $this->widgetName = $widgetName;
    
        return $this;
    }

    /**
     * Get widgetName
     *
     * @return string 
     */
    public function getWidgetName()
    {
        return $this->widgetName;
    }

    /**
     * Set widgetFile
     *
     * @param string $widgetFile
     * @return Widgets
     */
    public function setWidgetFile($widgetFile)
    {
        $this->widgetFile = $widgetFile;
    
        return $this;
    }

    /**
     * Get widgetFile
     *
     * @return string 
     */
    public function getWidgetFile()
    {
        return $this->widgetFile;
    }

    /**
     * Set template
     *
     * @param Template $template
     * @return Widgets
     */
    public function setTemplate(\Template $template = null)
    {
        $this->template = $template;
    
        return $this;
    }

    /**
     * Get template
     *
     * @return Template 
     */
    public function getTemplate()
    {
        return $this->template;
    }
}
