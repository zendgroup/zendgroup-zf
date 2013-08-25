<?php
/**
 * ZEND GROUP
 *
 * @name        IndexController.php
 * @category    Module
 * @package 	Front
 * @subpackage  Controller
 * @author      Thuy Dinh Xuan <thuydx@zendgroup.vn>
 * @link 		http://www.thuydx.com
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
 *
 */

namespace Front\Controller;

use ZG\Utilities\ModelGenerator;

use Zend\View\Model\ViewModel;
use ZG\Mvc\Controller\ActionController;

class IndexController extends ActionController
{
    public function indexAction()
    {
//         ModelGenerator::setModelPath(LIBRARY_PATH . 'ZG' . DS . 'Model' . DS . '');
//         ModelGenerator::setNamespace('ZG\Model\Repositories');
//         ModelGenerator::general();
    	
//     	$serviceLocator = $this->getServiceLocator()->get('Application');
//     	$routeMatch  = $serviceLocator->getMvcEvent()->getRouteMatch();
//     	$router      = $serviceLocator->getMvcEvent()->getRouter();
//     	// retrieve param from route match
//     	$routeMatch = $this->getEvent()->getRouteMatch();
//     	$paramValue = $routeMatch->getParam('a_param');
//     	$this->layout('layout/layout_1_column');
    	// retrieve param from request
//     	$request = $this->getEvent()->getRequest();
//     	$paramValue = $request->query()->get('a_param');
    	
//     	$result = new ViewModel(array('a_param' => $paramValue));
//     	return $result;
    	
        $objectManager = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');


//         $user = new \ZG\Model\Entities\Users();
//         $user->setUserName('thuydx');
//         $user->setUserPassword('1234567');
//         $objectManager->persist($user);
//         $objectManager->flush();
		//$objectManager->getEntity($user);
//         echo '<pre>'; var_dump($user->getUserName()); die();

// $user =  $objectManager->find('ZG\Model\Entities\Users',1);
// echo $user->getUserName();

			return new ViewModel();
    }
}
