<?php

namespace ZG\Doctrine\Tools;

class EntityRepositoryGenerator
{

    protected static $_template =
    '<?php
    
namespace <namespace>;
    
use Doctrine\ORM\EntityRepository;
    
/**
 *
 * ZEND GROUP
 *
 * @name        <className>.php
 * @category    Model
 * @package 	Repositories
 * @subpackage  
 * @author      Thuy Dinh Xuan <thuydx@zendgroup.vn>
 * @link 		http://zendgroup.vn
 * @copyright   Copyright (c) 2012-2013 ZEND GROUP. All rights reserved (http://www.zendgroup.vn)
 * @license     http://zendgroup.vn/license/
 * @version     $0.1$
 * 3:52:05 AM - Apr 3, 2013
 *
 * LICENSE
 *
 * This source file is copyrighted by ZEND GROUP, full details in LICENSE.txt.
 * It is also available through the Internet at this URL:
 * http://zendgroup.vn/license/
 * If you did not receive a copy of the license and are unable to
 * obtain it through the Internet, please send an email
 * to license@zendgroup.vn so we can send you a copy immediately.
 */
class <className> extends EntityRepository
{
}
';

    public function generateEntityRepositoryClass($namespace, $fullClassName)
    {
    	//$namespace = substr($fullClassName, 0, strrpos($fullClassName, '\\'));
    	//$className = substr($fullClassName, strrpos($fullClassName, '\\') + 1, strlen($fullClassName));
    
    	$variables = array(
    			'<namespace>' => $namespace,
    			'<className>' => $fullClassName
    	);
    	return str_replace(array_keys($variables), array_values($variables), self::$_template);
    }
    
    public function writeEntityRepositoryClass($namespace, $fullClassName, $outputDirectory)
    {
    	$code = self::generateEntityRepositoryClass($namespace, $fullClassName);
    
    	$path = $outputDirectory . DIRECTORY_SEPARATOR
    	. str_replace('\\', \DIRECTORY_SEPARATOR, $fullClassName) . '.php';
    	$dir = dirname($path);
    
    	if ( ! is_dir($dir)) {
    		mkdir($dir, 0777, true);
    	}
    
    	if ( ! file_exists($path)) {
    		file_put_contents($path, $code);
    	}
    }
}