<?php

/**
 * ZEND GROUP
 *
 * @name        BlogEntries.php
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
 * BlogEntries
 *
 * @ORM\Table(name="blog_entries", indexes={@ORM\Index(name="fk_blog_entry_idx", columns={"blog_id"})})
 * @ORM\Entity(repositoryClass="ZG\Model\Repositories\BlogEntries")
 */
class BlogEntries
{
    /**
     * @var integer
     *
     * @ORM\Column(name="entry_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $entryId;

    /**
     * @var string
     *
     * @ORM\Column(name="entry_title", type="string", length=255, nullable=true)
     */
    private $entryTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="entry_summary", type="string", length=255, nullable=true)
     */
    private $entrySummary;

    /**
     * @var string
     *
     * @ORM\Column(name="entry_content", type="text", nullable=true)
     */
    private $entryContent;

    /**
     * @var \ZG\Model\Mapping\Blogs
     *
     * @ORM\ManyToOne(targetEntity="ZG\Model\Mapping\Blogs")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="blog_id", referencedColumnName="blog_id")
     * })
     */
    private $blog;


}
