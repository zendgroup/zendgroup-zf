<?php
/**
 * Created by Inditel Meedia OÜ
 * User: Oliver Leisalu
 */

namespace DbProfiler\Db\Adapter;


use DbProfiler\Db\Profiler\Profiler;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class ProfilingAdapterFactory implements FactoryInterface
{

    /**
     * @param ServiceLocatorInterface $serviceLocator
     * @return mixed
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $config = $serviceLocator->get('Configuration');
        $dbParams = $config['db'];
        $adapter = new ProfilingAdapter($dbParams);

        $adapter->setProfiler(new Profiler);
        if (isset($dbParams['options']) && is_array($dbParams['options'])) {
            $options = $dbParams['options'];
        } else {
            $options = array();
        }
        $adapter->injectProfilingStatementPrototype($options);
        return $adapter;
    }
}