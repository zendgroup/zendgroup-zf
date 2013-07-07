<?php
namespace ZG;

use ZendServer\Exception;

class System {
   	
   	/**
     * @var \Zend\Config\Config
     */
    protected static $config;
    
	private $serverData;
	
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
	
	public function getServerVersion() {
		try {
			$version =  \Application\Module::config('package', 'version');
		} catch (Exception $e) {
			$version = _t('Unknown');
		}
		
		return $version;
	}
	
	public function getPHPVersion() {
		$serverData = $this->getServerData();
	
		return $serverData['phpversion'];
	}	
	
	public function getZendFramework1Version() {
		$serverData = $this->getServerData();
		
		return $serverData['zfversion'];
	}

	public function getZendFramework2Version() {
		$serverData = $this->getServerData();
	
		return $serverData['zf2version'];
	}
		
	private function getServerData() {
		if ($this->serverData) return $this->serverData;
		
		$edition = new Edition();
		$nodeId = $edition->getServerId();
		$taskId = \Application\Module::serviceManager()->get('Tasks\Db\Mapper')->setServerInfoTask($nodeId);
		return $this->serverData = \Application\Module::serviceManager()->get('Configuration\MapperReplies')->getServerInfoWithRetry($taskId);
	}
}
