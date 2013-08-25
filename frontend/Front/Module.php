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
use Zend\ModuleManager\ModuleManager;
use ZG\View\Helper\Editor;

class Module
{
    public function onBootstrap(MvcEvent $e)
    {
        $e->getApplication()->getServiceManager()->get('translator');
        $eventManager        = $e->getApplication()->getEventManager();
        $moduleRouteListener = new ModuleRouteListener();
        $moduleRouteListener->attach($eventManager);
        
//             $viewModel = $this->getEvent()->getViewModel();
//             $viewModel->setVariables(array(
//                     'testvar' => 'bla',
//             ));
        
        //$application        = $e->getParam('application');
        //$sharedEventManager = $application->events()->getSharedManager();
        //$sharedEventManager->attach(__NAMESPACE__, 'dispatch', array($this, 'onModuleDispatched'));
        
 //       $config    = $serviceManager->get('config');
//        $viewModel = $application->getMvcEvent()->getViewModel();
//        $viewModel->config = $config->google_key;

    }

//     public function onBootstrap($e)
//     {
//         $e->getApplication()->getEventManager()->getSharedManager()->attach('Zend\Mvc\Controller\AbstractActionController', 'dispatch', function($e) {
//             $controller = $e->getTarget();
//             $controllerClass = get_class($controller);
//             $moduleNamespace = substr($controllerClass, 0, strpos($controllerClass, '\\'));
//             $config = $e->getApplication()->getServiceManager()->get('config');

//             $routeMatch = $e->getRouteMatch();
//             $actionName = strtolower($routeMatch->getParam('action', 'not-found')); // get the action name
//             if (isset($config['module_layouts'][$moduleNamespace][$actionName])) {
//                 $controller->layout($config['module_layouts'][$moduleNamespace][$actionName]);
//             }elseif(isset($config['module_layouts'][$moduleNamespace]['default'])) {
//                 $controller->layout($config['module_layouts'][$moduleNamespace]['default']);
//             }


//         }, 100);
//     }
    public function init(ModuleManager $moduleManager)
    {
        $sharedEvents = $moduleManager->getEventManager()->getSharedManager();
        $sharedEvents->attach(__NAMESPACE__, 'dispatch', array($this, 'getLayoutConfig'), 100);
        
        $sharedEvents->attach(__NAMESPACE__, 'dispatch', array($this, 'addViewVariables'), 201);
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
    
    /**
     * pass variables to layout
     *
     * @param \Zend\EventManager\EventInterface $e
     */
    public function addViewVariables($e)
    {
        $route = $e->getRouteMatch();
        $viewModel = $e->getViewModel();
        $variables = $viewModel->getVariables();
        if (false === isset($variables['controller'])) {;
            $controllerName = strtolower(str_replace('Controller', '', array_pop(explode('\\', $route->getParam('controller')))));
            $viewModel->setVariable('controller', $controllerName);
            
        }
        if (false === isset($variables['action'])) {
            $viewModel->setVariable('action', $route->getParam('action'));
        }
    
        $viewModel->setVariable('module', strtolower(__NAMESPACE__));
    }
    
    public function getLayoutConfig($e) {
        // This event will only be fired when an ActionController under the MyModule namespace is dispatched.
        $config = $e->getApplication()->getServiceManager()->get('config');
        $controller = $e->getTarget();
        $controllerClass = get_class($controller);
    
        $arrTemporary = explode('\\', $controllerClass);
        $moduleNamespace = strtolower(array_shift($arrTemporary));
        $controllerName = strtolower(str_replace('Controller', '', array_pop($arrTemporary)));
    
        $routeMatch = $e->getRouteMatch();
        $actionName = strtolower($routeMatch->getParam('action', 'not-found')); // get the action name
        	
        if (isset($config['layout']) && $config['layout']['module_layouts']['enable'] == true) {
            $controller->layout($config['layout']['module_layouts'][$moduleNamespace]);
        } elseif (isset($config['layout']) && $config['layout']['controller_layouts']['enable'] == true) {
            $controller->layout('layout/'.$controllerName);
        } else {
            $controller->layout($controllerName.'/'.$actionName);
        }
    }
//    public function onModuleDispatched($e)
//    {
    	// This is only called if a controller within our module has been dispatched
    
    	// Set the layout template for every action in this module
//    	$viewModel = $e->getViewModel();
//    	$viewModel->setTemplate('layout/layout_2_column');
//    }
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
