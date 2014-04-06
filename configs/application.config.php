<?php
<<<<<<< HEAD
$env = getenv('APP_ENV') ? : 'production';
=======

$env = getenv('APP_ENV') ?: 'production';
>>>>>>> upstream/master
$baseDir = dirname(dirname(__FILE__));
$cacheDir = $baseDir . '/data/cache';

// Use the $env value to determine which modules to load
$modules = array(
<<<<<<< HEAD
    'AdminCP',
    'Content',
    'Front',
    'Gallery',
    'Blogs',
    'Category',
    'Themes',
    'System',
    'Statistic',
    'DbProfiler',
    'DoctrineModule',
    'DoctrineORMModule',
    'SyntaxHighlight',
);
=======
        'AdminCP',
        'Content',
        'Front',
        'Users',
        'DbProfiler',
        'DoctrineModule',
        'DoctrineORMModule',
        'SyntaxHighlight',
    );
>>>>>>> upstream/master
if ($env == 'development') {
    $modules[] = 'ZendDeveloperTools';
}

return array(
    // This should be an array of module namespaces used in the application.
    'modules' => $modules,
<<<<<<< HEAD
=======

>>>>>>> upstream/master
    // These are various options for the listeners attached to the ModuleManager
    'module_listener_options' => array(
        // This should be an array of paths in which modules reside.
        // If a string key is provided, the listener will consider that a module
        // namespace, the value of that key the specific path to that module's
        // Module class.
        'module_paths' => array(
            './backend',
            './frontend',
            './modules',
            './vendor',
        ),
        // An array of paths from which to glob configuration files after
        // modules are loaded. These effectively overide configuration
        // provided by modules themselves. Paths may use GLOB_BRACE notation.
        'config_glob_paths' => array(
            'configs/autoload/{,*.}{global,local}.php',
        ),
        // Whether or not to enable a configuration cache.
        // If enabled, the merged configuration will be cached and used in
        // subsequent requests.
        'config_cache_enabled' => ($env == 'production'),
<<<<<<< HEAD
        // The key used to create the configuration cache file name.
        'config_cache_key' => 'zgs_cache',
=======

        // The key used to create the configuration cache file name.
        'config_cache_key' => 'zgs_cache',

>>>>>>> upstream/master
        // Whether or not to enable a module class map cache.
        // If enabled, creates a module class map cache which will be used
        // by in future requests, to reduce the autoloading process.
        'module_map_cache_enabled' => ($env == 'production'),
<<<<<<< HEAD
        // The key used to create the class map cache file name.
        'module_map_cache_key' => 'zgs_module_cache',
        // The path in which to cache merged configuration.
        'cache_dir' => $cacheDir,
=======

        // The key used to create the class map cache file name.
        'module_map_cache_key' => 'zgs_module_cache',

        // The path in which to cache merged configuration.
        'cache_dir' => $cacheDir,

>>>>>>> upstream/master
        // Whether or not to enable modules dependency checking.
        // Enabled by default, prevents usage of modules that depend on other modules
        // that weren't loaded.
        'check_dependencies' => ($env != 'production'),
    ),
// Used to create an own service manager. May contain one or more child arrays.
//'service_listener_options' => array(
//     array(
//         'service_manager' => $stringServiceManagerName,
//         'config_key'      => $stringConfigKey,
//         'interface'       => $stringOptionalInterface,
//         'method'          => $stringRequiredMethodName,
//     ),
// )

// Initial configuration with which to seed the ServiceManager.
// Should be compatible with Zend\ServiceManager\Config.
// 'service_manager' => array(),
);
