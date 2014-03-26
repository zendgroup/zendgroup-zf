<?php
namespace Gallery;
return array(
    'router' => array(
        'routes' => array(
            'gallery' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/content',
                    'defaults' => array(
                        'controller' => 'Gallery\Controller\Index',
                        'action'     => 'index',
                    ),
                ),
            ),
            'index' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/gallery',
                        'defaults' => array(
                            '__NAMESPACE__' => 'Gallery\Controller',
                            'controller'    => 'index',
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
                            'defaults' => array(),
                        ),
                    ),
                ),
            ),
        ),
    ),
    'service_manager' => array(
        'factories' => array(
            'translator' => 'Zend\I18n\Translator\TranslatorServiceFactory',
        ),
    ),
    'translator' => array(
        'locale' => 'en_US',
        'translation_patterns' => array(
            array(
                'type'     => 'gettext',
                'base_dir' => __DIR__ . '/../language',
                'pattern'  => '%s.mo',
            ),
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'Gallery\Controller\Index' => 'Gallery\Controller\IndexController',
        ),
    ),
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => array(
            'layout/admin_layout'     => BACKEND_TEMPLATES_PATH .'layout/layout.phtml',
            'layout/doctype'          => BACKEND_TEMPLATES_PATH .'layout/doctype.phtml',
            'layout/header'           => BACKEND_TEMPLATES_PATH .'layout/header.phtml',
            'layout/footer'           => BACKEND_TEMPLATES_PATH .'layout/footer.phtml',
            'layout/script'           => BACKEND_TEMPLATES_PATH .'layout/script.phtml',
            'layout/sidebar'          => BACKEND_TEMPLATES_PATH .'layout/sidebar.phtml',
            'layout/breadcrumb'       => BACKEND_TEMPLATES_PATH .'layout/breadcrumb.phtml',
            'content/index/index'       => __DIR__ . '/../view/content/index/index.phtml',
            'content/category/index'       => __DIR__ . '/../view/content/category/index.phtml',
            'error/404'               => __DIR__ . '/../view/error/404.phtml',
            'error/index'             => __DIR__ . '/../view/error/index.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
    'module_layouts' => array(
                __NAMESPACE__ => 'layout/admin_layout'
    ),
);
