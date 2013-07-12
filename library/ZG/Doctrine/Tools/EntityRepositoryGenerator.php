<?php

namespace ZG\Doctrine\Tools;

class EntityRepositoryGenerator
{

    protected static $_template =
    '<?php
    
namespace <namespace>;
    
use Doctrine\ORM\EntityRepository;
    
/**
 * <className>
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
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