<?php
/**
 * ZEND GROUP
 *
 * @name        ConvertMapping.php
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

use Doctrine\ORM\Tools\Export\ClassMetadataExporter;
use ZG\Doctrine\Tools\EntityGenerator;
use Doctrine\ORM\Tools\DisconnectedClassMetadataFactory;

use Doctrine\ORM\Mapping\Driver\DatabaseDriver;

class ConvertMapping
{
    protected $ns;
    protected $em;
    
    public function generate ($metadata, $modelPath)
    {
        $em = $this->getEntityManager();
        if ($em == null) {
            return "Please set entity manager first";
        }
        $ns = $this->getNamespace();
        if ($ns == null) {
            return "Please set namespace first";
        }
        $toType = strtolower('annotation');
        $extend = 'xml';
        $databaseDriver = new DatabaseDriver(
        			$em->getConnection()->getSchemaManager()
				);
        $databaseDriver->setNamespace($ns);
		$em->getConfiguration()->setMetadataDriverImpl($databaseDriver);
		
        $cmf = new DisconnectedClassMetadataFactory();
        $cmf->setEntityManager($em);
        $metadata = $cmf->getAllMetadata();
        //$metadata = MetadataFilter::filter($metadata, $input->getOption('filter'));
        
        // Process destination directory
        if ( ! is_dir($modelPath)) {
            mkdir($modelPath, 0777, true);
        }
        if ( ! file_exists($modelPath)) {
            throw new \InvalidArgumentException(
                    sprintf("Mapping destination directory '<info>%s</info>' does not exist.", $modelPath)
            );
        }
        
        if ( ! is_writable($modelPath)) {
            throw new \InvalidArgumentException(
                    sprintf("Mapping destination directory '<info>%s</info>' does not have write permissions.", $modelPath)
            );
        }
        
        
        
        $exporter = $this->getExporter($toType, $modelPath);
        $exporter->setOverwriteExistingFiles('force');
        
        $entityGenerator = new EntityGenerator();

        $exporter->setEntityGenerator($entityGenerator);
        
        //$entityGenerator->setNumSpaces($input->getOption('num-spaces'));
        
           
        //$entityGenerator->setClassToExtend($extend);
           
        
        
        if (count($metadata)) {
            $exporter->setMetadata($metadata);
            $exporter->export();
        }
           
    }
    
    /**
     * @param string $toType
     * @param string $destPath
     *
     * @return \Doctrine\ORM\Tools\Export\Driver\AbstractExporter
     */
    protected function getExporter($toType, $destPath)
    {
        $cme = new ClassMetadataExporter();
    
        return $cme->getExporter($toType, $destPath);
    }
    
    public function getEntityManager()
    {
        return $this->em;
    }
    
    public function getNamespace()
    {
        return $this->ns;
    }
    
    public function setEntityManager($em)
    {
        if (!isset($this->em))
        {
            $this->em = $em;
        }
        return $this;
    }
    
    public function setNamespace($ns)
    {
        if (!isset($this->ns))
        {
            $this->ns = $ns;
        }
        return $this;
    }
}