<?php
/**
 * ZEND GROUP
 *
 * @name        module.config.php
 * @category    frontend
 * @package 	Front
 * @subpackage  Controller
 * @author      Thuy Dinh Xuan <thuydx@zendgroup.vn>
 * @link 		http://www.thuydx.com
 * @copyright   Copyright (c) 2012-2013 ZEND GROUP. All rights reserved (http://www.zendgroup.vn)
 * @license     http://zendgroup.vn/license/
 * @version     $$
 * 4:09:38 AM - Apr 3, 2013
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

return array(
    'router' => array(
        'routes' => array(
            'default' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/',
                    'defaults' => array(
                        'controller' => 'Front\Controller\Index',
                        'action'     => 'index',
                    ),
                ),
            ),
//             'about' => array(
//                	'type' => 'Zend\Mvc\Router\Http\Literal',
//                	'options' => array(
//                		'route'    => '/about',
//                		'defaults' => array(
//                			'controller' => 'Front\Controller\About',
//                			'action'     => 'index',
//                		),
//                		'may_terminate' => true,
//                		'child_routes' => array(
//                			'default' => array(
//                				'type'    => 'Segment',
//                				'options' => array(
//                					'route'    => '/[:controller[/:action]]',
//                					'constraints' => array(
//                						'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
//                						'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
//                						'param1' => '[a-zA-Z][a-zA-Z0-9_-]*',
//                						'param2' => '[a-zA-Z][a-zA-Z0-9_-]*',
//                					),
//                					'defaults' => array(
//                						'controller' => 'Front\Controller\About',
//                						'action'     => 'index',
//                						'param1' => 'value1',
//                						'param2' => 'value2',
//                					),
//                				),
//                				'may_terminate' => true,
//                				'child_routes' => array(
//                					'wildcard' => array(
//                						'type' => 'Wildcard',
//                					),
//                				),
//                			),
//                   		),
//                	),
//             ),
//             'contact' => array(
//                	'type' => 'Zend\Mvc\Router\Http\Literal',
//                	'options' => array(
//                		'route'    => '/contact',
//                		'defaults' => array(
//                		'controller' => 'Front\Controller\Contact',
//             		'action'     => 'index',
//             		),
//             	),
//             ),
            // The following is a route to simplify getting started creating
            // new controllers and actions without needing to create a new
            // module. Simply drop new controllers in, and you can access them
            // using the path /application/:controller/:action
            'home' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/home',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Front\Controller',
                        'controller'    => 'Index',
                        'action'        => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '/[:controller[/:action]]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ),
                            'defaults' => array(
                            ),
                        ),
                    ),
                ),
            ),
            'about' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/about',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Front\Controller',
                        'controller'    => 'About',
                        'action'        => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '/[:controller[/:action]]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ),
                            'defaults' => array(
                            ),
                        ),
                    ),
                ),
            ),
            'license' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/license',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Front\Controller',
                        'controller'    => 'License',
                        'action'        => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '/[:controller[/:action]]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ),
                            'defaults' => array(
                            ),
                        ),
                    ),
                ),
            ),
            'changelog' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/changelog',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Front\Controller',
                        'controller'    => 'Changelog',
                        'action'        => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '/[:controller[/:action]]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ),
                            'defaults' => array(
                            ),
                        ),
                    ),
                ),
            ),
            'contact' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/contact',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Front\Controller',
                        'controller'    => 'Contact',
                        'action'        => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '/[:controller[/:action]]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ),
                            'defaults' => array(
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
    'navigation' => array(
    	// The DefaultNavigationFactory we configured in (1) uses 'default' as the sitemap key
    	'default' => array(
    		// And finally, here is where we define our page hierarchy
    		'home' => array(
    			'label' => 'Home',
    			'route' => 'home',
    		),
    		'about' => array(
    			'label' => 'About',
    			'route' => 'about',
    		),
    		'license' => array(
    			'label' => 'License',
    			'route' => 'license',
    		),
    		'Changelog' => array(
    			'label' => 'Changelog',
    			'route' => 'changelog',
    		),
    		'contact' => array(
    			'label' => 'Contact',
    			'route' => 'contact'
    		),
    	),
    ),
    'service_manager' => array(
        'factories' => array(
            'translator' => 'Zend\I18n\Translator\TranslatorServiceFactory',
            'Navigation' => 'Zend\Navigation\Service\DefaultNavigationFactory',
        ),
    ),
    'translator' => array(
        'locale' => 'en_US',
        'translation_file_patterns' => array(
            array(
                'type'     => 'gettext',
                'base_dir' => __DIR__ . '/../language',
                'pattern'  => '%s.mo',
            ),
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'front\Controller\Index' => 'Front\Controller\IndexController',
            'front\Controller\Changelog' => 'Front\Controller\ChangelogController',
            'front\Controller\License' => 'Front\Controller\LicenseController',
            'front\Controller\About' => 'Front\Controller\AboutController',
            'front\Controller\Contact' => 'Front\Controller\ContactController'
        ),
    ),
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => array(
            'layout/layout'           		=> FRONT_TEMPLATES_PATH . 'layout/layout_2_column.phtml',
            'layout/sidebar_right'          => FRONT_TEMPLATES_PATH . 'layout/sidebar_right.phtml',
            'front/index/index' => __DIR__ . '/../view/front/index/index.phtml',
            'error/404'               => __DIR__ . '/../view/error/404.phtml',
            'error/index'             => __DIR__ . '/../view/error/index.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
//     'doctrine' => array (
//     	'driver' => array (
//     		'ZGlib_model_entities' => array (
//     			'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
//     			'cache' => 'array',
//     			'paths' => array(LIBRARY_PATH . 'ZG' . DS . 'Model' . DS .'Entities')
//     		),
//     		'orm_default' => array(
//     			'drivers' => array (
//     				'ZGlib\Model\Entities' => 'ZG_model_entities'
//     			)
//     		)
//     	)
//     )
);

