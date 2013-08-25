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
            // The following is a route to simplify getting started creating
            // new controllers and actions without needing to create a new
            // module. Simply drop new controllers in, and you can access them
            // using the path /application/:controller/:action
            'home' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/',
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
            'tutorial' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/tutorial',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Front\Controller',
                        'controller'    => 'Tutorial',
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
                        'controller'    => 'About',
                        'action'        => 'license',
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
            'changelogs' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/changelogs',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Front\Controller',
                        'controller'    => 'About',
                        'action'        => 'changelogs',
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
                        'controller'    => 'About',
                        'action'        => 'contact',
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
            'ourteam' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/ourteam',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Front\Controller',
                        'controller'    => 'About',
                        'action'        => 'ourteam',
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
            'contributors' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/contributors',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Front\Controller',
                        'controller'    => 'About',
                        'action'        => 'contributors',
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
            'logos' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/logos',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Front\Controller',
                        'controller'    => 'About',
                        'action'        => 'logos',
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
            'faq' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/faq',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Front\Controller',
                        'controller'    => 'About',
                        'action'        => 'faq',
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
            'guide' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/guide',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Front\Controller',
                        'controller'    => 'About',
                        'action'        => 'guide',
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
    		'tutorial' => array(
    			'label' => 'Tutorial',
    			'route' => 'tutorial',
    			'pages' => array (
	    			'tutorial' => array(
	    				'label' => 'Overview',
	    				'route' => 'tutorial',
	    			),
    			),
    		),
    		'about' => array(
    			'label' => 'About',
    			'route' => 'about',
    			'pages' => array ( 
	    			'about' => array(
	    			        'label' => 'Overview',
	    			        'route' => 'about',
	    			),
	    			'license' => array(
	    			        'label' => 'License',
	    			        'route' => 'license',
	    			),
	    			'ourteam' => array(
	    			        'label' => 'Our Team',
	    			        'route' => 'ourteam',
	    			),
	    			'contributors' => array(
	    			        'label' => 'Contributors',
	    			        'route' => 'contributors',
	    			),
	    			'guide' => array(
	    			        'label' => 'Contributor Guide',
	    			        'route' => 'guide',
	    			),
	    			'contact' => array(
	    			    				'label' => 'Contact',
	    			    				'route' => 'contact'
	    			),
	    			'changelogs' => array(
	    			        'label' => 'Changelogs',
	    			        'route' => 'changelogs',
	    			),
	    			'faq' => array(
	    			        'label' => 'FAQ',
	    			        'route' => 'faq',
	    			),
	    			'logos' => array(
	    			        'label' => 'Logos',
	    			        'route' => 'logos',
	    			),
    			),
    		),
    	),
    	'sidebar' => array(
    		'about' => array(
    			'label' => 'Overview',
    			'route' => 'about',
    		),
    		'license' => array(
    			'label' => 'License',
    			'route' => 'license',
    		),
    		'ourteam' => array(
    			'label' => 'Our Team',
    			'route' => 'ourteam',
    		),
    		'contributors' => array(
    			'label' => 'Contributors',
    			'route' => 'contributors',
    		),
    		'guide' => array(
    			'label' => 'Contributor Guide',
    			'route' => 'guide',
    		),
    		'contact' => array(
    				'label' => 'Contact',
    				'route' => 'contact'
    		),
    		'changelogs' => array(
    			'label' => 'Changelogs',
    			'route' => 'changelogs',
    		),
    		'faq' => array(
    			'label' => 'FAQ',
    			'route' => 'faq',
    		),
    		'logos' => array(
    			'label' => 'Logos',
    			'route' => 'logos',
    		),
    	),    
    	'tutorial' => array(
    		'tutorial' => array(
    			'label' => 'Overview',
    			'route' => 'tutorial'
    		),
    	),	
    ),
    'service_manager' => array(
        'factories' => array(
            'translator' => 'Zend\I18n\Translator\TranslatorServiceFactory',
            'Navigation' => 'Zend\Navigation\Service\DefaultNavigationFactory',
            'Sidebar' => 'ZG\Navigation\Service\SidebarNavigationFactory',
            'Tutorial' => 'ZG\Navigation\Service\TutorialNavigationFactory',
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
            'front\Controller\Tutorial' => 'Front\Controller\TutorialController',
            'front\Controller\About' => 'Front\Controller\AboutController',
        ),
    ),
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'sidebar_1'								=> 'front/about/sidebar',
        'template_map' => array(
            'layout/layout'           				=> FRONT_TEMPLATES_PATH . 'layout/layout_1_column.phtml',
            'layout/layout_1_column'           		=> FRONT_TEMPLATES_PATH . 'layout/layout_1_column.phtml',
            'layout/layout_2_column'           		=> FRONT_TEMPLATES_PATH . 'layout/layout_2_column.phtml',
            'layout/index'           				=> FRONT_TEMPLATES_PATH . 'layout/layout_1_column.phtml',
            'layout/about'           				=> FRONT_TEMPLATES_PATH . 'layout/layout_2_column.phtml',
            'About/index'           				=> FRONT_TEMPLATES_PATH . 'layout/about/index.phtml',
            'About/ourteam'           				=> FRONT_TEMPLATES_PATH . 'layout/about/ourteam.phtml',
            'About/faq'           					=> FRONT_TEMPLATES_PATH . 'layout/about/faq.phtml',
            'layout/block/sidebar_right'          		=> FRONT_TEMPLATES_PATH . 'layout/block/sidebar_right.phtml',
            'front/index/index' 					=> __DIR__ . '/../view/front/index/index.phtml',
            'error/404'              				=> __DIR__ . '/../view/error/404.phtml',
            'error/index'             				=> __DIR__ . '/../view/error/index.phtml',	
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
    'layout' => array(
    	'module_layouts' => array(
    		'enable'=> true,
    		'front' => 'layout/layout',
    	),    	
    	'controller_layouts' => array(
//     		'enable'=> true,
    		'Index' =>  'layout/layout_1_column',
            'About' =>  'layout/layout_2_column',
            
    	),
    	'action_layouts' => array(
//     		'enable'=> true,    	
    		'About/index' => 'about/index',
    		'About/ourteam' => 'about/ourteam',
    		'About/faq' => 'about/faq',
    	),
    ),
    'doctrine' => array (
    	'driver' => array (
    		'ZG_Model_Entities' => array (
    			'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
    			'cache' => 'array',
    			'paths' => array(LIBRARY_PATH . 'ZG' . DS . 'Model' . DS .'Entities')
    		),
    		'orm_default' => array(
    			'drivers' => array (
    				'ZG\Model\Entities' => 'ZG_Model_Entities'
    			)
    		)
    	)
    )
);

