<?php

namespace ZG;

use Zend\Config\Config;

use Zend\Loader\StandardAutoloader;

use Zend\Session\Config\SessionConfig;

use Zend\Session\SessionManager;

use Zend\Uri\Uri;

use Zend\Mvc\ModuleRouteListener;

use Zend\EventManager\EventInterface;

use Zend\EventManager\EventManager;

use Zend\ServiceManager\Di\DiAbstractServiceFactory;

use Zend\ServiceManager\ServiceManager;

use Zend\ModuleManager\ModuleManagerInterface;

use Zend\ModuleManager\ModuleEvent;

use Zend\Mvc\MvcEvent,
	Zend\EventManager\Event as ManagerEvent;

use Zend\ModuleManager\Feature\ViewHelperProviderInterface;

use Zend\ModuleManager\Feature\ControllerPluginProviderInterface;

use Zend\ModuleManager\Feature\InitProviderInterface;

use Zend\ModuleManager\Feature\BootstrapListenerInterface;

use Zend\ModuleManager\Feature\ServiceProviderInterface;

use Zend\ModuleManager\Feature\ConfigProviderInterface;

use Zend\ModuleManager\Feature\AutoloaderProviderInterface;

use Logs\LogReader;

class Module implements ViewHelperProviderInterface, ControllerPluginProviderInterface, AutoloaderProviderInterface, ConfigProviderInterface, InitProviderInterface, BootstrapListenerInterface, ServiceProviderInterface
{
    
    const INI_PREFIX = 'zg';

    protected $view;
    /**
     * @var \Application\View\Listener
     */
    protected $viewListener;
    
    /**
     * @var \Zend\Config\Config
     */
    protected static $config;
    
    /**
     * @var \Zend\Log\Logger
     */
    protected static $log;
    
    /**
     *
     * @var \Zend\Navigation\Navigation
     */
    protected $navigation;
    
    /**
     *
     * @var \Zend\View\Model\ViewModel
     */
    protected $ViewModel;
    
    /**
     * @var ServiceManager
     */
    static protected $staticManager;
    
    /**
     * @var ServiceManager
     */
    protected $serviceManager = null;
    
    /**
     * @var EventManager
     */
    protected $sharedEvents = null;
    /**
     * @var \Zend\Mvc\Application
     */
    protected $application = null;
    
    public static function config() {
    	if (func_num_args() > 0) {
    		$steps = func_get_args();
    		$configLevel = static::$config;
    		$zend_gui = self::INI_PREFIX;
    		foreach ($steps as $step) {
    			if (isset($configLevel->$step)) {
    				$configLevel = $configLevel->$step;
    			} elseif (isset($configLevel->$zend_gui->$step)) {
    				$configLevel = $configLevel->$zend_gui->$step;
    			} else {
    				throw new \ZendServer\Exception("gui directive not found: ". implode('.', $steps));
    			}
    		}
    
    		if (isset($configLevel->$zend_gui) && $configLevel->$zend_gui) {
    			$configLevel = $configLevel->$zend_gui; // we don't want the surrounding section
    		}
    
    		return $configLevel;
    	}
    	 
    	return static::$config;
    }
    
    public static function log() {
    	return static::$log;
    }
    
    /**
     * @return ServiceManager
     */
    public static function serviceManager() {
    	return static::$staticManager;
    }
    
    public function getViewHelperConfig() {
    	return array(
    			'factories' => array()
    	);
    }
    
    public function getControllerPluginConfig() {
    	$module = $this;
    	return array(
    			'factories' => array()
    	);
    }
    
    public function getServiceConfig() {
    	$module = $this;
    	return array(
    			'aliases' => array(
    					'AuthAdapterSimple' => 'AuthAdapterDbTable',
    					'AuthAdapterExtended' => 'AuthAdapterLdap',
    			),
    			'invokables' => array(
    					'Configuration\License\ZemUtilsWrapper' => 'Configuration\License\ZemUtilsWrapper'
    			),
    			'factories' => array(
    					'Navigation' => function($sm) use ($module) {
    						$factory = new \ZendServer\Navigation\Service\DefaultNavigationFactory();
    						/// instantiators are not executed for factories
    						$factory->setAcl($sm->get('ZendServerAcl'));
    							
    						$license = $sm->get('Configuration\License\ZemUtilsWrapper')->getLicenseInfo(); /* @var $license License */
    						if ($license->isCloudLicense()) {
    							/// remove license entry page from navigation if the license never expires
    							$factory->setFilterPages(array(array('controller' => 'License')));
    						}
    							
    						$mapper = new ServersConfigurationMapper();
    						if (! $mapper->isClusterSupport()) {
    							// remove the sc settings page when the cluster isn't supported
    							$factory->setFilterPages(array(array('controller' => 'SessionClustering')));
    						}
    							
    						return $factory->createService($sm);
    					},
    					'Tasks\Db\Mapper' => function($sm) {
    						$mapper = new Mapper();
    						/// avoid circular dependency detection error
    						$mapper->setTableGateway($sm->get('Di')->get('zsdTasks_tg'));
    						return $mapper;
    					},
    					'Zend\Authentication\AuthenticationService' => function($sm) use ($module) {
    						$service = new AuthenticationService();
    						$sessionConfig = new SessionConfig();
    						$sessionConfig->setName('ZG1SESSID');
    						$manager = new SessionManager($sessionConfig);
    						$service->setStorage(new Session(null, null, $manager));
    						return $service;
    					},
    					'ZGAuthenticationAdapter' => function($sm) use ($module) {
    						if ($module->config('authentication', 'simple')) {
    							$adapter = $sm->get('AuthAdapterSimple');
    
    						} elseif ($module->config('authentication', 'adapter')) {
    							$adapter = $sm->get($module->config('authentication', 'adapter'));
    						} else {
    							$adapter = $sm->get('AuthAdapterExtended');
    						}
    
    						if (! $sm->has('ZGAuthenticationAdapter')) {
    							$sm->setService('ZGAuthenticationAdapter', $adapter);
    						}
    						return $adapter;
    					},
//     					'Bootstrap\Mapper' => function($sm) {
//     						$bootstrap = new \Bootstrap\Mapper();
//     						$bootstrap->setDirectivesMapper($sm->get('Configuration\MapperDirectives'));
//     						$bootstrap->setUsersMapper($sm->get('Users\Db\Mapper'));
//     						$bootstrap->setChangePassword(new ChangePassword());
//     						$bootstrap->setServersMapper($sm->get('Servers\Db\Mapper'));
//     						$bootstrap->setTasksMapper($sm->get('Tasks\Db\Mapper'));
//     						$bootstrap->setWebapiKeysMapper($sm->get('WebAPI\Db\Mapper'));
//     						$bootstrap->setProfilesMapper($sm->get('Snapshots\Mapper\Profile'));
//     						return $bootstrap;
//     					},
//     					'Users\Identity' => function($sm) use ($module) {
//     						$authService = $sm->get('Zend\Authentication\AuthenticationService');
//     						if ($authService->hasIdentity()) {
//     							return $authService->getIdentity();
//     						}
//     						$role = $module->isBootstrapCompleted() ? 'guest' : 'bootstrap';
//     						return new Identity('Unknown', $role);
//     					},
//     					'Acl\Db\Mapper' => function($sm) {
//     						$aclMapper = new \Acl\Db\Mapper();
//     						$aclMapper->setRolesTable($sm->get('aclRoles_tg'));
//     						$aclMapper->setResourcesTable($sm->get('aclResources_tg'));
//     						$aclMapper->setPrivilegesTable($sm->get('aclPrivileges_tg'));
//     						return $aclMapper;
//     					},
//     					'Acl\Db\MapperGroups' => function($sm) {
//     						return new \Acl\Db\MapperGroups($sm->get('aclGroupsMap_tg'));
//     					},
//     					'Acl\Form\GroupsMappingFactory' => function($sm) {
//     						$factory = new \Acl\Form\GroupsMappingFactory();
//     						$factory->setAclMapper($sm->get('Acl\Db\Mapper'));
//     						$factory->setDeploymentModel($sm->get('Deployment\Model'));
//     						$factory->setGroupsMapper($sm->get('Acl\Db\MapperGroups'));
//     						return $factory;
//     					},
//     					'Logs\LogReader' => function($sm) {
//     						$reader = new LogReader();
//     						$reader->setLogsDbMapper($sm->get('Logs\Db\Mapper'));
//     						return $reader;
//     					},
//     					'Logs\Db\Mapper' => function($sm) {
//     						$reader = new \Logs\Db\Mapper($sm->get('guiLogs_tg'));
//     						$reader->setDirectivesMapper($sm->get('Configuration\MapperDirectives'));
//     						return $reader;
//     					},
    
//     					'Users\Forms\ChangePassword' => function($sm) {
//     						$loginForm = new ChangePassword();
//     						$loginForm->setInputFilter($sm->get('Users\InputFilter\Credentials'));
//     						$loginForm->setValidationGroup('newPassword');
//     						return $loginForm;
//     					},
    
//     					'Application\Forms\Login' => function($sm) {
//     						$loginForm = new Login();
//     						$loginForm->setInputFilter($sm->get('Users\InputFilter\Credentials'));
//     						$loginForm->setValidationGroup('username', 'password');
//     						return $loginForm;
//     					},
//     					'Users\InputFilter\Credentials' => function($sm) use($module) {
//     						$inputFactory = new Factory();
    							
//     						$userValidator = new Regex('#^[[:graph:]]+$#');
//     						$userValidator->setMessage(_t('Username field can not contain whitespace characters'));
    							
//     						$passwordValidator = new Regex('#^[[:graph:]]+$#');
//     						$passwordValidator->setMessage(_t('Password field cannot contain whitespace characters'));
    							
//     						$passwordValidators = array(
//     								'validators' => array(
//     										array(
//     												'name'    => 'StringLength',
//     												'options' => array(
//     														'min' => $module->config('user', 'passwordLengthMin'),
//     														'max' => $module->config('user', 'passwordLengthMax')
//     												),
//     										),
//     										$passwordValidator
//     								));
    
//     						$validators = $inputFactory->createInputFilter(array(
//     								'username' => array('validators' => array(
//     										array(
//     												'name'    => 'StringLength',
//     												'options' => array(
//     														'min' => $module->config('user', 'usernameLengthMin'),
//     														'max' => $module->config('user', 'usernameLengthMax')
//     												),
//     										),
//     										$userValidator
//     								)),
//     								'password' => $passwordValidators,
//     								'newPassword' => $passwordValidators,
//     						));
    							
//     						return $validators;
//     					},
    			),
    	);
    }
    
    public function init(ModuleManagerInterface $manager = null) {
    	$this->sharedEvents = $events = $manager->getEventManager()->getSharedManager();
    	$manager->getEventManager()->attach(ModuleEvent::EVENT_LOAD_MODULES_POST, array($this, 'initializeConfig'));
    	$manager->getEventManager()->attach(ModuleEvent::EVENT_LOAD_MODULES_POST, array($this, 'initializeDependencies'));
    	$manager->getEventManager()->attach(ModuleEvent::EVENT_LOAD_MODULES_POST, array($this, 'initializeDebugMode'));
    
    }
    
    /**
     * @param MvcEvent $e
     */
    public function checkDependencies(MvcEvent $e) {
    	$dependencies = self::config('dependencies');
    
    	$booltrue = array(1,true,'1','on','yes');
    	$boolfalse = array(0,false,'0','off','no');
    
    	$directives = isset($dependencies['directives']) ? $dependencies['directives'] : array();
    	/// Translator and service manager have not been initialized yet, we cannot use _t here
    	/// expects: array('type' => <options|boolean|string>, 'required' => <array value|boolean value|string value>))
    	foreach ($directives->toArray() as $directive => $params) {
    		$required = isset($params['required']) ? $params['required'] : null;
    		if (is_null($required)) {
    			continue;
    		}
    
    		$ex = null;
    		switch (isset($params['type']) ? $params['type'] : '') {
    			case 'options':
    				if (! in_array(ini_get($directive), $required)) {
    					$ex = new DependencyException(vsprintf('Dependency failure: %s must be of (%s), \'%s\' found', array($directive, implode(',', $required), strval($directiveValue))), DependencyException::CODE_DIRECTIVE);
    				}
    				break;
    			case 'boolean':
    				if (is_string($required)) {
    					$required = strtolower($required);
    				}
    					
    				if (in_array($required, $booltrue)) {
    					$values = $booltrue;
    				} else {
    					$values = $boolfalse;
    				}
    					
    				$directiveValue = ini_get($directive);
    				if (is_string($directiveValue)) {
    					$directiveValue = strtolower($directiveValue);
    				}
    
    				if (! in_array($directiveValue, $values)) {
    					$ex = new DependencyException(vsprintf('Dependency failure: %s must be \'%s\', \'%s\' (or equivalent) found', array($directive, intval($required), intval($directiveValue))), DependencyException::CODE_DIRECTIVE);
    				}
    				break;
    			case 'string':
    			default:
    				$directiveValue = ini_get($directive);
    				if ($directiveValue != $required) {
    					$ex = new DependencyException(vsprintf('Dependency failure: %s must be \'%s\', \'%s\' found', array($directive, strval($required), strval($directiveValue))), DependencyException::CODE_DIRECTIVE);
    				}
    		}
    			
    		if ($ex instanceof DependencyException) {
    			$ex->setContext($directive);
    			throw $ex;
    		}
    	}
    
    	$extensions = isset($dependencies['extensions']) ? $dependencies['extensions'] : array();
    	$clusterServer = self::isClusterServer();
    	foreach ($extensions as $extension => $required) {
    		if (isset($required['clusteronly']) && $required['clusteronly'] && (! self::isCluster())) {
    			/// if the requirement is relevant to cluster only and we are NOT in a cluster
    			continue;
    		}
    			
    		if (! extension_loaded($extension)) {
    			$ex = new DependencyException(vsprintf('Dependency failure: %s extension must be loaded', array($extension)), DependencyException::CODE_EXTENSION);
    			$ex->setContext($extension);
    			throw $ex;
    		}
    	}
    	 
    }
    
    public function onBootstrap(EventInterface $e) {
    	$this->application = $e->getApplication();
    	$this->serviceManager = $this->application->getServiceManager();
    	self::$staticManager = $this->serviceManager;

    	$translate = $this->serviceManager->get('translator');
    	$eventsManager = $this->application->getEventManager();
    	$moduleRouteListener = new ModuleRouteListener();
    	$moduleRouteListener->attach($eventsManager);
    	 
    	 
    	$di = $this->serviceManager->get('Di');
    	$this->serviceManager->addAbstractFactory(new DiAbstractServiceFactory($di));
    	$serviceManager = $this->serviceManager;
    	 
    	$initializers = array(
    			function ($instance) use ($serviceManager) {
    				if (method_exists($instance, 'setAuthService')) {
    					$instance->setAuthService($serviceManager->get('Zend\Authentication\AuthenticationService'));
    				}
    			},

    	);
    	 
    	$serviceLocators = array(
    			$this->serviceManager,
    			$serviceManager->get('ControllerLoader'),
    			$serviceManager->get('ControllerPluginManager'),
    			$serviceManager->get('ViewHelperManager'),
    	);
    	 
    	foreach ($serviceLocators as $serviceLocator) {
    		foreach ($initializers as $initializer) {
    			$serviceLocator->addInitializer($initializer);
    		}
    	}
    	 
    	$app = $this->application;/* @var $app \Zend\Mvc\Application */
    	$baseUrl = static::config('baseUrl');
    	$app->getRequest()->setBaseUrl($baseUrl);
    	 
    	 
    	try {
    		$this->initializeLog($e);
    		$this->checkDependencies($e);
    		DbConnector::factory('gui');
    		$this->initializeACL($e);
    		$this->initializeRouter($e);
    		$this->initializeSessionControl($e);
    		$this->applyLicenseToAcl($e);
    		$this->initializeView($e);
    		$this->initializeWebAPI($e);
    		$this->initializeViewLayout($e);
    		$this->detectTimezone();
    	} catch (\Exception $ex) {
    		Log::err($ex);
    		$this->initializeLimitedACL($e);
    		$this->applyLicenseToAcl($e);
    		$this->initializeView($e);
    		$this->initializeWebAPI($e);
    		$this->initializeLimitedViewLayout($e);
    		$events = $this->application->getEventManager();
    		$error = $e;
    		$error->setError(\Zend\Mvc\Application::ERROR_EXCEPTION);
    		if ($ex instanceof \PDOException) {
    			$error->setParam('exception', new Exception(_t('Zend Server database error: %s', array($ex->getMessage())), null, $ex));
    		} else {
    			$error->setParam('exception', new Exception(_t('Zend Server failed during initialization: %s', array($ex->getMessage())), null, $ex));
    		}
    		$results = $events->trigger(MvcEvent::EVENT_DISPATCH_ERROR, $error);
    		$results->setStopped(true);
    		$e->stopPropagation(true);
    		$e->setResult($results);
    
    	}
    	 
    	if ((! self::config('authentication', 'simple'))
    			&& (! $this->getLocator()->get('ZendServerAcl')->isAllowed('service:Authentication', 'extended'))) {
    		/// we require extended authentication but are not authorized for it
    		Log::notice('Extended authentication override, not allowed');
    		self::config('authentication')->merge(new Config(array('simple' => true)));
    	}
    }
    
    public function initializeDependencies(ManagerEvent $e)
    {
    	// we want to override other session handlers here...
    	ini_set("session.save_handler", "files");
    	// we want to overwrite the display_errors
    	ini_set('display_errors', false);
    	// do not clean output, may wreck webapi and binary actions' output
    	ini_set('tidy.clean_output', false);
    	// preserve backtrack/recursion limit values
    	ini_set('pcre.backtrack_limit', 1000000);
    	ini_set('pcre.recursion_limit', 100000);
    	 
    	date_default_timezone_set(@date_default_timezone_get());
    }
    
    public function initializeConfig(ManagerEvent $e)
    {
    	static::$config = $config = $e->getConfigListener()->getMergedConfig();
    	
    }
    
    
    public function initializeDebugMode(ManagerEvent $e) {
    
    	//if (static::config('debugMode', 'debugModeEnabled')) return; // if working in debug, then we will not silence monitor/codetracing etc..
    
    }
    /**
     * @param MvcEvent $e
     */
    public function initializeLog(MvcEvent $e) {
    	$writer = new \Zend\Log\Writer\Stream(dirname(ini_get('error_log')) . DIRECTORY_SEPARATOR . 'zend_server_ui.log', 'a+');
    	if (static::config('debugMode', 'debugModeEnabled')) {
    		$formatter = new Simple('%timestamp% %priorityName% (%priority%) [%uri%]: %message% %extra%');
    		$uri = new Uri($e->getRequest()->getServer()->get('REQUEST_URI'));
    		$formatter->setUri(str_replace(static::config('baseUrl'), '', $uri->getPath()));
    		$writer->setFormatter($formatter);
    	}
    	$logger = new Logger();
    	$logger->addWriter($writer);
    	Logger::registerErrorHandler($logger);
    	// fix for ZF2 RC7 issue with its exception handler
    	// http://framework.zend.com/issues/browse/ZF2-520, https://github.com/zendframework/zf2/issues/2555
    	Log::registerExceptionHandler($logger);
    	 
    	Log::init($logger, self::config('logging', 'logVerbosity'));
    	Log::debug('log initialized');
    }


    public function initializeRouter(ManagerEvent $e) {
    	$app = $this->application;
    	$router = $app->getMvcEvent()->getRouter(); /* @var $router \Zend\Mvc\Router\Http\TreeRouteStack */
    	
    	if ($this->isBootstrapCompleted()) {
    		
    			/// empty all regular UI routes
    			$router->setRoutes(array());
    		
    			$app->getEventManager()->attach('route', function (MvcEvent $e) {
    				$routeMatch = $e->getRouteMatch(); /* @var $routeMatch \Zend\Mvc\Router\Http\RouteMatch */
    
    				$controller = $routeMatch->getParam('controller', '');
    				$action = $routeMatch->getParam('action', '');
    
    				if ($controller != 'Login' && $controller != 'Api') {
    					$routeMatch->setParam('controller', 'Expired');
    					$routeMatch->setParam('action', 'Index');
    					Log::debug('License expired, router result is overriden');
    				}
    			});
    		
    	} else {
    		$app->getEventManager()->attach('route', function (MvcEvent $e) {
    			$routeMatch = $e->getRouteMatch(); /* @var $routeMatch \Zend\Mvc\Router\Http\RouteMatch */
    			$routeMatch->setParam('controller', 'Bootstrap');
    			Log::debug('Bootstrap needed, router result is overriden');
    		});
    	}
    	 
    	Log::debug('Router initialised');
    }
    
    public function initializeSessionControl(ManagerEvent $e) {
    	if (self::config('sessionControl', 'sessionControlEnabled')) {
    		$app = $e->getParam('application'); /* @var $app \Zend\Mvc\Application */
    		/**
    		 * @todo do something to manager session
    		 */
    	}
    }
    
    public function initializeView(ManagerEvent $e)
    {
    	$app = $this->application;/* @var $app \Zend\Mvc\Application */
    	$locator = $this->getLocator();
    	 
    	$baseUrl = $app->getRequest()->getBaseUrl();
    
    	$role = $this->getUserRole($app->getMvcEvent());
    
    	$app->getEventManager()->attach('route', array($this, 'setRouteParams'));
    	 
    	/// add form view helpers
    	$renderer = $locator->get ( 'ViewManager' )->getRenderer(); /* @var $renderer \ZendServer\View\Renderer\PhpRenderer */
    
    	$pathStack = $this->serviceManager->get('ViewTemplatePathStack'); /* @var $viewManager \Zend\View\Resolver\TemplatePathStack */
    	$templatePathStack = new TemplatePathStack();
    	$templatePathStack->setPaths($pathStack->getPaths());
    	 
    	if ($this->detectWebAPIRequest($app)) {
    		$pathStack->setDefaultSuffix("p{$this->parsedWebAPIOutput}.phtml");
    
    		/// add the webapi path resolver
    		$templatePathStack->setWebapiVersion($this->parsedWebAPIVersion);
    		$templatePathStack->setDefaultSuffix("p{$this->parsedWebAPIOutput}.phtml");
    
    		$locator            = $this->serviceManager;
    		$events            = $app->getEventManager();
    		$noRouteStrategy   = $locator->get('Zend\Mvc\View\Http\RouteNotFoundStrategy');
    		$exceptionStrategy = $locator->get('Zend\Mvc\View\Http\ExceptionStrategy');
    		$noRouteStrategy->detach($events);
    		$exceptionStrategy->detach($events);
    		$noRouteStrategy   = $locator->get('WebAPI\Mvc\View\Http\RouteNotFoundStrategy');
    		$exceptionStrategy = $locator->get('WebAPI\Mvc\View\Http\ExceptionStrategy');
    		$events->attachAggregate($noRouteStrategy);
    		$events->attachAggregate($exceptionStrategy);
    	} else {
    
    		/// add the webapi path resolver
    
    		$templatePathStack->setWebapiVersion(self::WEBAPI_CURRENT_VERSION);
    		$templatePathStack->setDefaultSuffix("pjson.phtml");
    		 
    		$renderer->plugin ( 'url' )->setRouter ( $app->getMvcEvent()->getRouter () );
    		$renderer->doctype ()->setDoctype ( 'HTML5' );
    		$renderer->plugin ( 'basePath' )->setBasePath ( $baseUrl );
    
    		$view = $renderer; /* @var $view \ZendServer\View\Renderer\PhpRenderer */
    		 
    		$view->plugin ( 'headLink' )->appendStylesheet ( $baseUrl . '/css/style.css' );
    		$view->plugin ( 'headLink' )->appendStylesheet ( $baseUrl . '/js/simplemodal/assets/css/simplemodal.css' );
    		$view->plugin ( 'headLink' )->appendStylesheet ( $baseUrl . '/css/simplemodal.css' );
    		$view->plugin ( 'headLink' )->appendStylesheet ( $baseUrl . '/css/wizard.css' );
    		$view->plugin ( 'headLink' )->appendStylesheet ( $baseUrl . '/css/configuration.css' );
    		$view->plugin ( 'headLink' )->appendStylesheet ( $baseUrl . '/css/toast.css' );
    		$view->plugin ( 'headLink' )->appendStylesheet ( $baseUrl . '/css/spinner.css' );
    		$view->plugin ( 'headScript' )->appendFile ( $baseUrl . '/js/mootools.js' );
    		$view->plugin ( 'headScript' )->appendFile ( $baseUrl . '/js/mootools-more.js' );
    		$view->plugin ( 'headScript' )->appendFile ( $baseUrl . '/js/zswebapi.js' );
    		$view->plugin ( 'headScript' )->appendFile ( $baseUrl . '/js/general.js' );
    		$view->plugin ( 'headScript' )->appendFile ( $baseUrl . '/js/placeholder.js' );
    		$view->plugin ( 'headScript' )->appendFile ( $baseUrl . '/js/notificationCenter.js' );
    		$view->plugin ( 'headScript' )->appendFile ( $baseUrl . '/js/persistantHeaders.js' );
    		$view->plugin ( 'headScript' )->appendFile ( $baseUrl . '/js/ellipsis.js' );
    		$view->plugin ( 'headScript' )->appendFile ( $baseUrl . '/js/floatingtips.js' );
    		$view->plugin ( 'headScript' )->appendFile ( $baseUrl . '/js/simplemodal/simple-modal.js' );
    		$view->plugin ( 'headScript' )->appendFile ( $baseUrl . '/js/FormWizard.js' );
    		$view->plugin ( 'headScript' )->appendFile ( $baseUrl . '/js/toast.js' );
    		 
    		$view->headLink ( array (
    				'rel' => 'shortcut icon',
    				'type' => 'image/vnd.microsoft.icon',
    				'href' => $baseUrl . '/images/favicon.png'
    		) );
    		 
    		$view->doctype ()->setDoctype ( 'HTML5' );
    		$view->plugin ( 'basePath' )->setBasePath ( $baseUrl );
    	}
    	 
    	$this->serviceManager()->setAllowOverride(true);
    	$this->serviceManager()->setService('ViewTemplatePathStackWebAPI', $templatePathStack);
    	$this->serviceManager()->setAllowOverride(false);
    	 
    	$resolver = $this->serviceManager->get('ViewResolver'); /* @var $viewResolver \Zend\View\Resolver\AggregateResolver */
    	$resolver->attach($templatePathStack);
    	 
    	$renderer->setAcl($this->serviceManager->get('ZendServerAcl'));
    	 
    	Log::debug('View initialized');
    }
    
    public function initializeLimitedViewLayout($e) {
    	$app = $e->getApplication();
//     	$acl = $this->getLocator()->get('ZGAcl');
    
    	$this->getViewModel($app)->setVariables(array('role' => ''));
    	$this->getViewModel($app)->setVariables(array('userRole' => ''));
    	$this->getViewModel($app)->setVariables(array('timezoneOffset' => 0));
    	$viewModel = $this->getViewModel()->setVariables(array(
    			'notificationCenter' => false,
    			'isAllowedToRestart' => false,
    			'isAllowedToDismiss' => false,
    			'acl' => $acl,
    			'feedbackUrl' => self::config('feedback', 'email'),
    			'logoutTimeout' => self::config('logout', 'timeout'),
    	));
    }
    
    public function initializeViewLayout($e) {
    	$app = $e->getApplication();
//     	$role = $this->getUserRole($e);
    	$this->getViewModel($app)->setVariables(array('userRole' => $role));
    
    	$this->detectTimezone();
    	$tz = @date_default_timezone_get();
    	$tz = $this->getTimezoneOffset($tz);
    	 
    	$this->getViewModel($app)->setVariables(array('timezoneOffset' => $tz));
    	 
    	$locator = $this->serviceManager;
//     	$acl = $locator->get('ZGAcl'); 
    	
    	$manager = new Manager();
    	$viewModel = $this->getViewModel()->setVariables(array(
    			'notificationCenter' => true,
    			'notificationCenterLockedRestart' => self::config('notifications', 'zg', 'lockUiOnRestart'),
//     			'role' => $role,
//     			'acl' => $acl,
    			'feedbackUrl' => self::config('feedback', 'email'),
    			'logoutTimeout' => self::config('logout', 'timeout'),
    	));
    	 
    	$role = $this->getUserRole($app->getMvcEvent());
    	 
    }
    public function getConfig()
    {
    	return include __DIR__ . '/config/module.config.php';
    }
    
    public static function setConfig($config) { // TODO - added this function temporarily for mock
    	static::$config = $config;
    }
        
	public function getAutoloaderConfig()
	{
		return array(
				'Zend\Loader\StandardAutoloader' => array(
						StandardAutoloader::LOAD_NS => array(
								__NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,  
						),
				),
		);
	}
	

	private function getTimezoneOffset($tz) {
		$dt = new \DateTime(null, new \DateTimeZone($tz));
		return $dt->getOffset()/60/60;
	}
	
	/**
	 *
	 * @param MvcEvent $e
	 */
	public function setRouteParams(MvcEvent $e) {
		$routeMatch = $e->getRouteMatch(); /* @var $routeMatch \Zend\Mvc\Router\Http\RouteMatch */
	
		$variables = array (	'controller'	=> $routeMatch->getParam('controller', ''),
				'action' 		=> $routeMatch->getParam('action', ''),
				'isAjaxRequest' => $e->getRequest()->isXmlHttpRequest()
		);
		 
		$this->getViewModel()->setVariables($variables + (array) $this->getViewModel()->getVariables()); // otherwise, previous variables are removed
	}
	
	// Protected function from here
	
	public static function isBootstrapCompleted() {
		return self::config('bootstrap', 'completed');
	}
	
	/**
	 * @return ServiceManager
	 */
	protected function getLocator() {
		return $this->serviceManager;
	}
	

	/**
	 *
	 * @param \Zend\View\Model\ViewModel $viewModel
	 */
	private function setViewModel($viewModel) {
		$this->ViewModel = $viewModel;
	}
	
	/**
	 *
	 * @param \Zend\Mvc\Application $app
	 */
	private function getViewModel($app = null) {
		if ($this->ViewModel) return $this->ViewModel;
		if (!$app instanceof \Zend\Mvc\Application) return null;
	
		return $this->ViewModel = $app->getMvcEvent()->getViewModel();
	}
	
	/**
	 * @param array $versions
	 * @return array
	 */
	private function sortVersions(array $versions) {
		uasort($versions, function ($a, $b) {
			return version_compare($a, $b, '<');
		});
		return $versions;
	}
	
	private function offsetToStr($offset) {
	
		$offset = (int) $offset;
		$offset = $offset / 3600;
		Log::debug("Timezone offset: $offset");
		 
		$idsList = timezone_identifiers_list();
		foreach ($idsList as $id) {
			$dt = new \DateTime(null, new \DateTimeZone($id));
			$dtOffset = $dt->getOffset()/60/60;
			if ($dtOffset == $offset) {
				return $id;
			}
		}
		 
		return null;
	}
	

	private function detectTimezone() {
		static $sessionStorage = null;
	
		if (is_null($sessionStorage) || !($sessionStorage instanceof SessionStorage)) {
			$sessionStorage = new SessionStorage();
		}
		 
		if (!$sessionStorage->hasTimezone()) {
	
			$phpTz = @date_default_timezone_get();
	
			$dbConn = DbConnector::factory('gui');
			if (self::isSingleServer()) {
				Log::debug("Detecting single server timezone");
				$res = $dbConn->query('SELECT strftime(\'%s\', \'now\') - strftime(\'%s\', \'now\',  \'utc\')');
				foreach ($res as $row) {
					$offset = (string) array_pop($row);
					$tz = $this->offsetToStr($offset);
					break;
				}
	
			} else {
				Log::debug("Detecting cluster timezone");
				$res = $dbConn->query('SELECT UNIX_TIMESTAMP(NOW()) - UNIX_TIMESTAMP(UTC_TIMESTAMP())');
				foreach ($res as $row) {
					$offset = (string) array_pop($row);
					$tz = $this->offsetToStr($offset);
					break;
				}
			}
			 
			if ($phpTz) {
				Log::debug("PHP detected timezone - $phpTz");
				$phpDt = new \DateTime(null, new \DateTimeZone($phpTz));
				$calculatedDt = new \DateTime(null, new \DateTimeZone($tz));
	
				if ($phpDt->getOffset() == $calculatedDt->getOffset()) {
					Log::debug("PHP detected timezone matches server offset");
					$tz = $phpTz;
				}
			} else if (!$tz) {
				Log::warn("Could not detect timezone. Reverting to PHP settings...");
				$tz = @date_default_timezone_get();
			}
	
			$sessionStorage->setTimezone($tz);
		}
	
		Log::debug("Timezone detected - " . $sessionStorage->getTimezone());
		date_default_timezone_set($sessionStorage->getTimezone());
	}
	
}