<?php

namespace ZG\Utils;

use ZG\Doctrine\Tools\EntityGenerator;
use ZG\Doctrine\Tools\EntityRepositoryGenerator;

class ModelGenerator
{
    public static $_model_path = __DIR__;
    public static $_ns = 'ZG\Model';
    
  	public static function general()
    {
        ini_set("display_errors", "On");
        // Set this to where you have doctrine2 installed
        
        $namespace = self::getNamespace();
        $outputDirectory = self::getModelPath();
        
        // autoloaders
        require_once DT2_LIBRARY . '/Doctrine/Common/ClassLoader.php';
        
        $classLoader = new \Doctrine\Common\ClassLoader('Doctrine', DT2_LIBRARY);
        $classLoader->register();
        
        $classLoader = new \Doctrine\Common\ClassLoader('Entities', $outputDirectory);
        $classLoader->register();
        
        $classLoader = new \Doctrine\Common\ClassLoader('Proxies', $outputDirectory);
        $classLoader->register();
        
        // config
        $config = new \Doctrine\ORM\Configuration();
        $config->setMetadataDriverImpl($config->newDefaultAnnotationDriver($outputDirectory . '/Entities'));
        $config->setMetadataCacheImpl(new \Doctrine\Common\Cache\ArrayCache);
        $config->setProxyDir($outputDirectory . '/Proxies');
        $config->setProxyNamespace('Proxies');
        
        $connectionParams = array(
        		'driver' => 'pdo_mysql',
        		'host' => 'localhost',
        		'port' => '3306',
        		'user' => 'root',
        		'password' => '#xuan@thuy85',
        		'dbname' => 'zg_site',
        		'charset' => 'utf8',
        );
        
        $em = \Doctrine\ORM\EntityManager::create($connectionParams, $config);
        
        // custom datatypes (not mapped for reverse engineering)
        $em->getConnection()->getDatabasePlatform()->registerDoctrineTypeMapping('set', 'string');
        $em->getConnection()->getDatabasePlatform()->registerDoctrineTypeMapping('enum', 'string');
        
        // fetch metadata
        $driver = new \Doctrine\ORM\Mapping\Driver\DatabaseDriver(
        		$em->getConnection()->getSchemaManager()
        );
        $em->getConfiguration()->setMetadataDriverImpl($driver);
        $cmf = new \Doctrine\ORM\Tools\DisconnectedClassMetadataFactory($em);
        $cmf->setEntityManager($em);
        $classes = $driver->getAllClassNames();
        $metadata = $cmf->getAllMetadata();
        $generator = new EntityGenerator();
        $generator->setUpdateEntityIfExists(true);
        $generator->setGenerateStubMethods(true);
        $generator->setGenerateAnnotations(true);
        
        $generator->generate($metadata, $outputDirectory . '/Entities');

        
        /**
         * General Repositories from Entities was generated
         */
        
        $generatorRepository = new EntityRepositoryGenerator();
        
        foreach (glob($outputDirectory . '/Entities/*.php') as $fullFileName)
        {
            // remove file ext .php from path
            $file = explode('.', $fullFileName);
                        
            // explode path to get file name
            $pathFile = explode('/', $file[0]);
            
            // get last item in array. That is file name
            $fullClassName = array_pop($pathFile);
            
            // create an instance of EntityRepositoryGenerator
            $generatorRepository->writeEntityRepositoryClass($namespace . '\Repositories', $fullClassName, $outputDirectory . '/Repositories');
        }
    }
    
    /**
     * @return the $_model_path
     */
    public static function getModelPath() {
    	return self::$_model_path;
    }
    
    /**
     * @return the $_namespace
     */
    public static function getNamespace() {
    	return self::$_ns;
    }
    
    /**
     * @param field_type $_model_path
     */
    public static function setModelPath($model_path) {
    	self::$_model_path = $model_path;
    }
    
    /**
     * @param field_type $_namespace
     */
    public static function setNamespace($namespace) {
    	self::$_ns = $namespace;
    }
}