<?php

/**
 * ZEND GROUP
 *
 * @name        Template.php
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
 * Template
 *
 * @ORM\Table(name="template")
 * @ORM\Entity(repositoryClass="ZG\Model\Repositories\Template")
 */
class Template
{
    /**
     * @var integer
     *
     * @ORM\Column(name="template_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $templateId;

    /**
     * @var string
     *
     * @ORM\Column(name="template_name", type="string", length=45, nullable=true)
     */
    private $templateName;

    /**
     * @var string
     *
     * @ORM\Column(name="template_path", type="string", length=255, nullable=true)
     */
    private $templatePath;

    /**
     * @var integer
     *
     * @ORM\Column(name="template_default", type="integer", nullable=true)
     */
    private $templateDefault;

    /**
     * @var string
     *
     * @ORM\Column(name="template_author", type="string", length=45, nullable=true)
     */
    private $templateAuthor;

    /**
     * @var string
     *
     * @ORM\Column(name="template_version", type="string", length=45, nullable=true)
     */
    private $templateVersion;


}
