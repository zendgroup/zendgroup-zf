<?php

/**
 * ZEND GROUP
 *
 * @name        Setup.php
 * @category    ZG
 * @package 	Doctrine
 * @subpackage  Doctrine\Tools
 * @author      Thuy Dinh Xuan <thuydx@zendgroup.vn>
 * @copyright   Copyright (c)2008-2010 ZEND GROUP. All rights reserved
 * @license     http://zendgroup.vn/license/
 * @version     $1.0$
 * Sep 10, 2013
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

namespace ZG\Doctrine\Tools;

use Doctrine\Common\ClassLoader;
use Doctrine\Common\Cache\Cache;
use Doctrine\Common\Cache\ArrayCache;
use Doctrine\ORM\Configuration;
use Doctrine\ORM\Mapping\Driver\XmlDriver;
use Doctrine\ORM\Mapping\Driver\YamlDriver;

/**
 * Convenience class for setting up Doctrine from different installations and configurations.
 *
 * @author Benjamin Eberlei <kontakt@beberlei.de>
 */
class Setup
{
    /**
     * Use this method to register all autoloads for a downloaded Doctrine library.
     * Pick the directory the library was uncompressed into.
     *
     * @param string $directory
     *
     * @return void
     */
    public static function registerAutoloadDirectory($directory)
    {
        if (!class_exists('Doctrine\Common\ClassLoader', false)) {
            require_once $directory . "/Doctrine/Common/ClassLoader.php";
        }

        $loader = new ClassLoader("Doctrine", $directory);
        $loader->register();
    }

    /**
     * Creates a configuration with an annotation metadata driver.
     *
     * @param array   $paths
     * @param boolean $isDevMode
     * @param string  $proxyDir
     * @param Cache   $cache
     * @param bool    $useSimpleAnnotationReader
     *
     * @return Configuration
     */
    public static function createAnnotationMetadataConfiguration(array $paths, $isDevMode = false, $proxyDir = null, Cache $cache = null, $useSimpleAnnotationReader = true)
    {
        $config = self::createConfiguration($isDevMode, $proxyDir, $cache);
        $config->setMetadataDriverImpl($config->newDefaultAnnotationDriver($paths, $useSimpleAnnotationReader));

        return $config;
    }

    /**
     * Creates a configuration with a xml metadata driver.
     *
     * @param array   $paths
     * @param boolean $isDevMode
     * @param string  $proxyDir
     * @param Cache   $cache
     *
     * @return Configuration
     */
    public static function createXMLMetadataConfiguration(array $paths, $isDevMode = false, $proxyDir = null, Cache $cache = null)
    {
        $config = self::createConfiguration($isDevMode, $proxyDir, $cache);
        $config->setMetadataDriverImpl(new XmlDriver($paths));

        return $config;
    }

    /**
     * Creates a configuration with a yaml metadata driver.
     *
     * @param array   $paths
     * @param boolean $isDevMode
     * @param string  $proxyDir
     * @param Cache   $cache
     *
     * @return Configuration
     */
    public static function createYAMLMetadataConfiguration(array $paths, $isDevMode = false, $proxyDir = null, Cache $cache = null)
    {
        $config = self::createConfiguration($isDevMode, $proxyDir, $cache);
        $config->setMetadataDriverImpl(new YamlDriver($paths));

        return $config;
    }

    /**
     * Creates a configuration without a metadata driver.
     *
     * @param bool   $isDevMode
     * @param string $proxyDir
     * @param Cache  $cache
     *
     * @return Configuration
     */
    public static function createConfiguration($isDevMode = false, $proxyDir = null, Cache $cache = null)
    {
        $proxyDir = $proxyDir ?: sys_get_temp_dir();

        if ($isDevMode === false && $cache === null) {
            if (extension_loaded('apc')) {
                $cache = new \Doctrine\Common\Cache\ApcCache();
            } elseif (extension_loaded('xcache')) {
                $cache = new \Doctrine\Common\Cache\XcacheCache();
            } elseif (extension_loaded('memcache')) {
                $memcache = new \Memcache();
                $memcache->connect('127.0.0.1');
                $cache = new \Doctrine\Common\Cache\MemcacheCache();
                $cache->setMemcache($memcache);
            } elseif (extension_loaded('redis')) {
                $redis = new \Redis();
                $redis->connect('127.0.0.1');
                $cache = new \Doctrine\Common\Cache\RedisCache();
                $cache->setRedis($redis);
            } else {
                $cache = new ArrayCache();
            }
        } elseif ($cache === null) {
            $cache = new ArrayCache();
        }

        $cache->setNamespace("dc2_" . md5($proxyDir) . "_"); // to avoid collisions

        $config = new Configuration();
        $config->setMetadataCacheImpl($cache);
        $config->setQueryCacheImpl($cache);
        $config->setResultCacheImpl($cache);
        $config->setProxyDir($proxyDir);
        $config->setProxyNamespace('DoctrineProxies');
        $config->setAutoGenerateProxyClasses($isDevMode);

        return $config;
    }
}
