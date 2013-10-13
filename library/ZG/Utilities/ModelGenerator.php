<?php

namespace ZG\Utilities;

use ZG\Doctrine\Tools\Setup;
use ZG\Doctrine\Tools\EntityGenerator;
use ZG\Doctrine\Tools\EntityRepositoryGenerator;
use Doctrine\Common\Cache\ArrayCache;
use Doctrine\ORM\Tools\Export\ClassMetadataExporter;
use Doctrine\ORM\Tools\DisconnectedClassMetadataFactory;
use Doctrine\ORM\Mapping\Driver\DatabaseDriver;
use Doctrine\ORM\EntityManager;
class ModelGenerator
{
    protected static $_nsModel;
    protected static $_nsMapping;
    protected static $_nsEntities;
    protected static $_nsRepositories;
    protected static $_nsProxies;
    protected static $_nsCache;
    protected static $_modelPath;
    protected static $_mappingPath;
    protected static $_entitiesPath;
    protected static $_repositoriesPath;
    protected static $_proxiesPath;
    protected static $_cachePath;
    
  	public function general()
    {
        ini_set("display_errors", "On");
        self::setNamespace('Model');
        self::setNamespace('Mapping');
        self::setNamespace('Entities');
        self::setNamespace('Repositories');
        self::setNamespace('Proxies');
        self::setNamespace('Cache');
        
        self::setPath('Model');
        self::setPath('Mapping');
        self::setPath('Entities');
        self::setPath('Repositories');
        self::setPath('Proxies');
        self::setPath('Cache');
        return $this;
	}
	/**
     * @return field_type $_ns
     */
    public function getNamespace ($ns)
    {
        $name = ucfirst($ns);
        $nsName = "_ns{$name}";
        return self::$$nsName;
    }

	/**
     * @param string $_ns
     * custom namespace. Using default namespace if that null
     * default ZG\Model
     */
    public function setNamespace ($ns)
    {
        $nsName = '_ns'.ucfirst($ns);
        if (!isset(self::$$nsName) || self::$$nsName == NULL) 
        {
			if (ucfirst($ns) !== 'Model') {
			    return self::$$nsName = "ZG\Model\\".ucfirst($ns);
			} else {
			    return self::$$nsName = "ZG\Model";
			}
        }
    }
	/**
     * @param string $pathName
     * that are name of path. $pathName in (Entities, Repositories, Proxies, Cache)
     */
    public function setPath ($pathName)
    {
        $name = strtolower($pathName);
        $path = "_{$name}Path";
        if (!isset(self::$$path) || self::$$path == NULL)
        {
            if (ucfirst($pathName) !== 'Model') {
				return self::$$path = realpath(dirname((__DIR__))) 
						. DIRECTORY_SEPARATOR . 'Model'
				        . DIRECTORY_SEPARATOR . ucfirst($pathName);
            } else {
				return self::$$path = realpath(dirname((__DIR__)) 
				        . DIRECTORY_SEPARATOR . ucfirst($pathName));
            }
        }
    }
    public function getConnectParam() {
        return array(
                'driver' => 'pdo_mysql',
                'host' => 'localhost',
                'port' => '3306',
                'user' => 'root',
                'password' => '#xuan@thuy85',
                'dbname' => 'zendgroup_cms',
                'charset' => 'utf8',
        );
    }
    public function getConfigParam() {
        $setup = new Setup();
        $setup->registerAutoloadDirectory(DT2_LIBRARY);
        $config = $setup->createAnnotationMetadataConfiguration(array(self::$_modelPath), $isDevMode = false, self::$_proxiesPath);
        $config->setMetadataDriverImpl($config->newDefaultAnnotationDriver(self::$_entitiesPath));
        $config->setMetadataCacheImpl(new ArrayCache());
        $config->setProxyNamespace('Proxies');
        $config->setAutoGenerateProxyClasses(true);
        return $config;
    }
    public function generateEntity()
    {
        $config = $this->getConfigParam();
        $config->setEntityNamespaces(array(self::$_nsEntities));
        $connectionParams = $this->getConnectParam();
        
        $em = EntityManager::create($connectionParams, $config);
        $em->getConnection()->getDatabasePlatform()->registerDoctrineTypeMapping('set', 'string');
        $em->getConnection()->getDatabasePlatform()->registerDoctrineTypeMapping('enum', 'string');
        

        $driver = new DatabaseDriver(
                $em->getConnection()->getSchemaManager()
        );
        $driver->setNamespace(self::$_nsEntities .'\\');
        
        $em->getConfiguration()->setMetadataDriverImpl($driver);
        
        $cmf = new DisconnectedClassMetadataFactory($em);
        $cmf->setEntityManager($em);

        $metadata = $cmf->getAllMetadata();
        
        $generator = new EntityGenerator();
        $generator->setUpdateEntityIfExists(true);
        $generator->setGenerateStubMethods(true);
        $generator->setGenerateAnnotations(true);
        $generator->setCustomRepositoryNamespace(self::$_nsRepositories);
        $generator->generate($metadata, self::$_entitiesPath);
        return $this;
    }
    public function generateMapping()
    {
        $toType = strtolower('annotation');
        $config = $this->getConfigParam();
        $config->setEntityNamespaces(array(self::$_nsMapping));
        $connectionParams = $this->getConnectParam();
        
        $emMapping = EntityManager::create($connectionParams, $config);
        $emMapping->getConnection()->getDatabasePlatform()->registerDoctrineTypeMapping('set', 'string');
        $emMapping->getConnection()->getDatabasePlatform()->registerDoctrineTypeMapping('enum', 'string');
        
        $driverMapping = new DatabaseDriver(
                $emMapping->getConnection()->getSchemaManager()
        );
        $driverMapping->setNamespace(self::$_nsMapping.'\\');
        
        $emMapping->getConfiguration()->setMetadataDriverImpl($driverMapping);
        
        $cmf = new DisconnectedClassMetadataFactory($emMapping);
        $cmf->setEntityManager($emMapping);
        
        $metadataMapping = $cmf->getAllMetadata();
        
        $generatorMapping = new EntityGenerator();
        $generatorMapping->setUpdateEntityIfExists(true);
        $generatorMapping->setGenerateStubMethods(true);
        $generatorMapping->setGenerateAnnotations(true);
        $generatorMapping->setCustomRepositoryNamespace(self::$_nsRepositories);
        
        $cme = new ClassMetadataExporter();
        $exporter = $cme->getExporter($toType, LIBRARY_PATH);
        $exporter->setOverwriteExistingFiles('force');
        $exporter->setEntityGenerator($generatorMapping);
        $exporter->setMetadata($metadataMapping);
        
        $exporter->export();
        return $this;
    }
    
    public function generateRepository()
    {
        $generatorRepository = new EntityRepositoryGenerator();
        $entityFiles = glob(self::$_entitiesPath . DIRECTORY_SEPARATOR .'*.php');
        foreach ($entityFiles as $fullFileName)
        {
            // remove file ext .php from path
            $file = explode('.', $fullFileName);
        
            // explode path to get file name
            $pathFile = explode(DIRECTORY_SEPARATOR, $file[0]);
        
            // get last item in array. That is file name
            $fullClassName = array_pop($pathFile);
        
            // create an instance of EntityRepositoryGenerator
            $generatorRepository->writeEntityRepositoryClass(self::$_nsRepositories .'\\'. $fullClassName, self::$_repositoriesPath);
        }
        return $this;
    }

}