<?php
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