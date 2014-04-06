<?php

namespace Blogs;

use Zend\Mvc\ModuleRouteListener;
use Zend\EventManager\EventInterface;
use ZG\Module as ZGModule;

class Module extends ZGModule {

    public function onBootstrap(EventInterface $e) {
        $e->getApplication()->getServiceManager()->get('translator');
        $eventManager = $e->getApplication()->getEventManager();
        $moduleRouteListener = new ModuleRouteListener();
        $moduleRouteListener->attach($eventManager);

        $app = $e->getParam('application');
        $sm = $app->getServiceManager();
        $app = $e->getParam('application');
        //         $locator = $app->getServiceLocator();
        //         $aclService = $locator->get('ZfcAcl\Service\Acl');
        //         $renderer    = $locator->get('Zend\View\Renderer\PhpRenderer');

        $e->getApplication()->getEventManager()->getSharedManager()
            ->attach('Zend\Mvc\Controller\AbstractActionController','dispatch',
                function ($e) { // Xử lý event
                    $controller = $e->getTarget();
                    $controllerClass = get_class($controller);
                    $moduleNamespace = substr($controllerClass,0,
                        strpos($controllerClass,'\\'));

                    $config = $e->getApplication()->getServiceManager()
                        ->get('config'); // Lấy config
                    if (isset($config['module_layouts'][$moduleNamespace])) {
                        $controller
                            ->layout(
                                $config['module_layouts'][$moduleNamespace]);
                    }
                },100);

    }

    public function getConfig() {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig() {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }
}
