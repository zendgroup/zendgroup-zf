<?php
/**
 * ZEND GROUP
 *
 * @name        SidebarNavigationFactory.php
 * @category    ZG
 * @package 	Navigation
 * @subpackage  Navigation\Service
 * @author      Thuy Dinh Xuan <thuydx@zendgroup.vn>
 * @copyright   Copyright (c)2008-2010 ZEND GROUP. All rights reserved
 * @license     http://zendgroup.vn/license/
 * @version     $1.0$
 * Aug 25, 2013
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

namespace ZG\Navigation\Service;

use Zend\Navigation\Service\DefaultNavigationFactory;

class SidebarNavigationFactory extends DefaultNavigationFactory
{
	protected function getName()
	{
		return 'sidebar';
	}
	
// 	protected function getPages(ServiceLocatorInterface $serviceLocator)
// 	{
// 		$navigation = $config['navigation'][$this->getName()] = array();
	
		
// 		$mvcEvent = $serviceLocator->get('Application')->getMvcEvent();

// 		$routeMatch = $mvcEvent->getRouteMatch();
// 		$router     = $mvcEvent->getRouter();
// 		$pages      = $this->getPagesFromConfig($navigation);

// 		$this->pages = $this->injectComponents(
// 				$pages,
// 				$routeMatch,
// 				$router
// 		);
	
// 		return $this->pages;
// 	}	
}