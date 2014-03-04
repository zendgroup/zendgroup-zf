<?php

/**
 * ZEND GROUP
 *
 * @name		Module.php
 * @category	frontend
 * @package 	Users
 * @subpackage  
 * @author	  Thuy Dinh Xuan <thuydx@zendgroup.vn>
 * @copyright   Copyright (c)2008-2010 ZEND GROUP. All rights reserved
 * @license	 http://zendgroup.vn/license/
 * @version	 $1.0$
 * Sep 7, 2013
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

namespace Users;

use Zend\Mvc\MvcEvent;
use Zend\ModuleManager\ModuleManager;

class Module
{
	public function onBootstrap(MvcEvent $e)
	{
		
	}
	
	public function init(ModuleManager $moduleManager) 
	{
		
	}
	
	public function getConfig()
	{
		return include __DIR__ . '/../../config/module.config.php';
	}
	
	public function getAutoloaderConfig()
	{
		return array(
			'Zend\Loader\StandardAutoloader' => array(
				'namespaces' => array(
						__NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
				),
			),
			'Zend\Loader\ClassMapAutoloader' => array(
				__DIR__ . '/../../autoload_classmap.php',
		),
		'Zend\Loader\StandardAutoloader' => array(
				'namespaces' => array(
						__NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
				),
			),
		);
		
	}
}