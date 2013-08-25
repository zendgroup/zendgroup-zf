<?php

namespace ZG\Navigation\Service;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use	ZG\Navigation\Service\SidebarNavigationFactory;

class __SidebarNavigationSerivce implements FactoryInterface
{
	public function createService(ServiceLocatorInterface $serviceLocator)
	{
		$sidebarNavigation = new SidebarNavigationFactory($serviceLocator);
		return $navigation->createService($sidebarNavigation);
	}
	
}
