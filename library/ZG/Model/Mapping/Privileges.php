<?php

/**
 * ZEND GROUP
 *
 * @name        Privileges.php
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
 * Privileges
 *
 * @ORM\Table(name="privileges", indexes={@ORM\Index(name="fk_group_user_idx", columns={"group_id"}), @ORM\Index(name="fk_user_group_idx", columns={"user_id"})})
 * @ORM\Entity(repositoryClass="ZG\Model\Repositories\Privileges")
 */
class Privileges
{
    /**
     * @var integer
     *
     * @ORM\Column(name="permission_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $permissionId;

    /**
     * @var integer
     *
     * @ORM\Column(name="assignment_date", type="integer", nullable=false)
     */
    private $assignmentDate;

    /**
     * @var \ZG\Model\Mapping\Groups
     *
     * @ORM\ManyToOne(targetEntity="ZG\Model\Mapping\Groups")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="group_id", referencedColumnName="group_id")
     * })
     */
    private $group;

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
