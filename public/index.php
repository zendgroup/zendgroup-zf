<?php
/**
 * This makes our life easier when dealing with paths. Everything is relative
 * to the application root now.
 */
chdir(dirname(__DIR__));

// Setup autoloading
include 'vendors/Autoload/definition.php';
require 'init_autoloader.php';
// Run the application!
Zend\Mvc\Application::init(require 'configs/application.config.php')->run();
