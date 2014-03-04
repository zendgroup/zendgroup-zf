<?php

$dbParams = array(
        'database'  => 'zendgroup_cms',
        'username'  => 'root',
        'password'  => '#xuan@thuy85',
        'hostname'  => 'localhost',
        // buffer_results - only for mysqli buffered queries, skip for others
        'options' => array('buffer_results' => true)
);

return array(
        'service_manager' => array(
                'factories' => array(
                        'Zend\Db\Adapter\Adapter' => function ($sm) use ($dbParams) {
                            $adapter = new DbProfiler\Db\Adapter\ProfilingAdapter(array(
                                    'driver'    => 'pdo',
                                    'dsn'       => 'mysql:dbname='.$dbParams['database'].';host='.$dbParams['hostname'],
                                    'database'  => $dbParams['database'],
                                    'username'  => $dbParams['username'],
                                    'password'  => $dbParams['password'],
                                    'hostname'  => $dbParams['hostname'],
                            ));
                            if (php_sapi_name() == 'cli') {
                                $logger = new Zend\Log\Logger();
                                // write queries profiling info to stdout in CLI mode
                                $writer = new Zend\Log\Writer\Stream('php://output');
                                $logger->addWriter($writer, Zend\Log\Logger::DEBUG);
                                $adapter->setProfiler(new DbProfiler\Db\Profiler\LoggingProfiler($logger));
                            } else {
                                $adapter->setProfiler(new DbProfiler\Db\Profiler\Profiler());
                            }
                            if (isset($dbParams['options']) && is_array($dbParams['options'])) {
                                $options = $dbParams['options'];
                            } else {
                                $options = array();
                            }
                            $adapter->injectProfilingStatementPrototype($options);
                            return $adapter;
                        },
                ),
        ),
);

// return array(
// 	'service_manager' => array(
// 		'factories' => array(
// 			'Zend\Db\Adapter\Adapter' => function ($sm) {
// 				$config = $sm->get('Configuration');
				
// 				if(!isset($config['db'])){				   
// 					return false;
// 				}
// 				if(class_exists('DbProfiler\Db\Adapter\ProfilingAdapter')){
// 				   $adapter = new DbProfiler\Db\Adapter\ProfilingAdapter($config['db']);
// 					$adapter->setProfiler(new DbProfiler\Db\Profiler\Profiler);
// 					if (isset($config['db']['options']) && is_array($config['db']['options'])) {
// 						$options = $config['db']['options'];
// 					} else {
// 						$options = array();
// 					}
// 					$adapter->injectProfilingStatementPrototype($options);
// 				} else {
// 					$adapter = new Zend\Db\Adapter\Adapter($config['db']);
// 				}
// 				return $adapter;
// 			},
// 		),
// 	),
// );
