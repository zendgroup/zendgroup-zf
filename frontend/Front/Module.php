<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Front;

use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;
use ZG\View\Helper\Editor;
class Module
{
    public function onBootstrap(MvcEvent $e)
    {
        $e->getApplication()->getServiceManager()->get('translator');
        $eventManager        = $e->getApplication()->getEventManager();
        $moduleRouteListener = new ModuleRouteListener();
        $moduleRouteListener->attach($eventManager);
    }

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }

    public function getViewHelperConfig()
    {
    	return array(
    			'factories' => array(
    					// the array key here is the name you will call the view helper by in your view scripts
    					'editor' => function($sm) {
    						$locator = $sm->getServiceLocator(); // $sm is the view helper manager, so we need to fetch the main service manager
    						return new Editor();
    					},
    			),
    			'invokables' => array(
    					'editor'        => 'ZG\View\Helper\Editor',
    					//'tablist'        => 'ZG\View\Helper\TabList',
    			),
    	);
    }
// 	public function getViewHelperConfig()   {
// 	    return array(
// 	        'invokables' => array(
// 	            'Tinymce' => 'ZG\View\Helper\Tinymce',
// 	         ),

// 		    'factories' => array(
// 	    		'Tinymce' => function ($helperPluginManager) {
// 	    			$serviceLocator = $helperPluginManager->getServiceLocator();
// 	    			$viewHelper = new Tinymce();
// 	    			$viewHelper->setServiceLocator($serviceLocator);
// 	    			return $viewHelper;
// 	    		}
// 		    )
// 		);
// 	}
}
