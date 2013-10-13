<?php

/**
 * ZEND GROUP
 *
 * @name        Permissions.php
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
 * Permissions
 *
 * @ORM\Table(name="permissions", indexes={@ORM\Index(name="fk_group_role_idx", columns={"group_id"}), @ORM\Index(name="fk_role_group_idx", columns={"role_id"})})
 * @ORM\Entity(repositoryClass="ZG\Model\Repositories\Permissions")
 */
class Permissions
{
    /**
     * @var integer
     *
     * @ORM\Column(name="privilege_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $privilegeId;

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
     * @var \ZG\Model\Mapping\Roles
     *
     * @ORM\ManyToOne(targetEntity="ZG\Model\Mapping\Roles")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="role_id", referencedColumnName="role_id")
     * })
     */
    private $role;


}
