<?php
/**
 * ZEND GROUP
 *
 * @name        Module.php
 * @category    frontend
 * @package     Users
 * @subpackage
 * @author      Thuy Dinh Xuan <thuydx@zendgroup.vn>
 * @copyright   Copyright (c)2008-2010 ZEND GROUP. All rights reserved
 * @license     http://zendgroup.vn/license/
 * @version     $1.0$
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
// use Options\ModuleOptions;
class Module {

    public function onBootstrap(MvcEvent $e) {}

    public function init(ModuleManager $moduleManager) {}

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
            'Zend\Loader\ClassMapAutoloader' => array(
                __DIR__ . '/autoload_classmap.php',
            ),
        );
    }

    public function getControllerPluginConfig() {

        return array(
            'factories' => array(
                'userAuthentication' => function ($sm) {
                    $serviceLocator = $sm->getServiceLocator();
                    $authService = $serviceLocator->get('users_auth_service');
                    $authAdapter = $serviceLocator
                        ->get('Users\Authentication\Adapter\AdapterChain');
                    $controllerPlugin = new Controller\Plugin\UserAuthentication;
                    $controllerPlugin->setAuthService($authService);
                    $controllerPlugin->setAuthAdapter($authAdapter);
                    return $controllerPlugin;
                },
            ),
        );
    }

    public function getViewHelperConfig() {

        return array(
            'factories' => array(
                'userDisplayName' => function ($sm) {
                    $locator = $sm->getServiceLocator();
                    $viewHelper = new View\Helper\UserDisplayName;
                    $viewHelper
                        ->setAuthService($locator->get('users_auth_service'));
                    return $viewHelper;
                },
                'userIdentity' => function ($sm) {
                    $locator = $sm->getServiceLocator();
                    $viewHelper = new View\Helper\UserIdentity;
                    $viewHelper
                        ->setAuthService($locator->get('users_auth_service'));
                    return $viewHelper;
                },
                'userLoginWidget' => function ($sm) {
                    $locator = $sm->getServiceLocator();
                    $viewHelper = new View\Helper\UserLoginWidget;
                    $viewHelper
                        ->setViewTemplate(
                            $locator->get('user_module_options')
                                ->getUserLoginWidgetViewTemplate());
                    $viewHelper
                        ->setLoginForm($locator->get('users_login_form'));
                    return $viewHelper;
                },
            ),
        );
    }

    public function getServiceConfig() {

        return array(
            'invokables' => array(
                //                 'Users\Authentication\Adapter\Db' => 'Users\Authentication\Adapter\Db',
                //                 'Users\Authentication\Storage\Db' => 'Users\Authentication\Storage\Db',
                'Users\Form\Login' => 'Users\Form\Login',
                'users_user_service' => 'Users\Service\User',
                'users_register_form_hydrator' => 'Zend\Stdlib\Hydrator\ClassMethods',
            ),
            'factories' => array(
                //                 'users_module_options' => function ($sm) {
                //                     $config = $sm->get('Config');
                //                     $userConfig = isset($config['user']) ? $config['user']
                //                         : array();
                //                     return new Options\ModuleOptions($userConfig);
                //                 },
                // We alias this one because it's Users's instance of
                // Zend\Authentication\AuthenticationService. We don't want to
                // hog the FQCN service alias for a Zend\* class.
                'users_auth_service' => function ($sm) {
                    return new \Zend\Authentication\AuthenticationService(
                        $sm->get('Users\Authentication\Storage\Db'),
                        $sm->get('Users\Authentication\Adapter\AdapterChain'));
                },
                'Users\Authentication\Adapter\AdapterChain' => 'Users\Authentication\Adapter\AdapterChainServiceFactory',
                'users_login_form' => function ($sm) {
                    //                     $options = $sm->get('users_module_options');
                    $options = null;
                    $form = new Form\Login(null, $options);
                    //                     $form->setInputFilter(new Form\LoginFilter($options));
                    return $form;
                },
                'users_register_form' => function ($sm) {
                    //                     $options = $sm->get('users_module_options');
                    $options = null;
                    $form = new Form\Register(null, $options);
                    //$form->setCaptchaElement($sm->get('users_captcha_element'));
                    //                     $form
                    //                         ->setInputFilter(
                    //                             new Form\RegisterFilter(
                    //                                 new Validator\NoRecordExists(
                    //                                     array(
                    //                                         'mapper' => $sm
                    //                                             ->get('users_user_mapper'),
                    //                                         'key' => 'email'
                    //                                     )),
                    //                                 new Validator\NoRecordExists(
                    //                                     array(
                    //                                         'mapper' => $sm
                    //                                             ->get('users_user_mapper'),
                    //                                         'key' => 'username'
                    //                                     )), $options));
                    return $form;
                },
                'users_change_password_form' => function ($sm) {
                    //                     $options = $sm->get('users_module_options');
                    $options = null;
                    $form = new Form\ChangePassword(null, $options);
                    $form
                        ->setInputFilter(
                            new Form\ChangePasswordFilter($options));
                    return $form;
                },
                'users_change_email_form' => function ($sm) {
                    //                     $options = $sm->get('users_module_options');
                    $options = null;
                    $form = new Form\ChangeEmail(null, $options);
                    //                     $form
                    //                         ->setInputFilter(
                    //                             new Form\ChangeEmailFilter($options,
                    //                                 new Validator\NoRecordExists(
                    //                                     array(
                    //                                         'mapper' => $sm
                    //                                             ->get('users_user_mapper'),
                    //                                         'key' => 'email'
                    //                                     ))));
                    return $form;
                },
                'users_user_hydrator' => function ($sm) {
                    $hydrator = new \Zend\Stdlib\Hydrator\ClassMethods();
                    return $hydrator;
                },
            //                 'users_user_mapper' => function ($sm) {
            //                     $options = $sm->get('users_module_options');
            //                     $mapper = new Mapper\User();
            //                     $mapper->setDbAdapter($sm->get('users_zend_db_adapter'));
            //                     $entityClass = $options->getUserEntityClass();
            //                     $mapper->setEntityPrototype(new $entityClass);
            //                     $mapper->setHydrator(new Mapper\UserHydrator());
            //                     $mapper->setTableName($options->getTableName());
            //                     return $mapper;
            //                 },
            ),
        );
    }
}
