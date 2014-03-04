<?php

/**
 * ZEND GROUP
 *
 * @name        Module.php
 * @category
 * @package
 * @subpackage
 * @author      Thuy Dinh Xuan <thuydx@zendgroup.vn>
 * @link        http://www.thuydx.com
 * @copyright   Copyright (c) 2012-2013 ZEND GROUP. All rights reserved (http://www.zendgroup.vn)
 * @license     http://zendgroup.vn/license/
 * @version     $$
 * Mar 4, 2014
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

namespace SyntaxHighlight;

use SyntaxHighlight\GeShi;
use Zend\View\Helper\AbstractHelper;

class Module extends AbstractHelper
{

//     public function getConfig()
//     {
//         return include __DIR__ . '/config/module.config.php';
//     }

//     public function getAutoloaderConfig()
//     {
//         return array(
//             'Zend\Loader\StandardAutoloader' => array(
//                 'namespaces' => array(
//                     __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
//                 ),
//             ),
//         );
//     }

    public function getViewHelperConfig()
    {
    	return array('services' => array('hightlight' => $this));
    }

    public function __invoke($source = null, $language = null, $path = null)
    {
    	require_once __DIR__ . '/geshi.php';
    	$hightLight = new GeShi($source, $language, $path);
    	return $hightLight;
    }
}
