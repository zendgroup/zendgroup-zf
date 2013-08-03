<?php

use Zend\View\Helper\AbstractHelper;
use ZG\Finder\Finder;
class Finder extends AbstractHelper
{
    public function __invoke($name, $value = "", $config = array(), $events = array())
    {
    	//return $this->editor($name, $value, $config, $events);
    }

    public function initFinder() {
        $finder = new Finder();
    }
}