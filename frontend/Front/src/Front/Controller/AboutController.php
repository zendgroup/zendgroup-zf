<?php

/**
 * ZEND GROUP
 *
 * @name        AboutController.php
 * @category    Module
 * @package 	Front
 * @subpackage  Controller
 * @author      Thuy Dinh Xuan <thuydx@zendgroup.vn>
 * @copyright   Copyright (c)2008-2010 ZEND GROUP. All rights reserved
 * @license     http://zendgroup.vn/license/
 * @version     $1.0$
 * Aug 12, 2013
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
use Zend\Mvc\MvcEvent;
use Zend\View\Model\ViewModel;
use ZG\Mvc\Controller\ActionController;
use Zend\View\Resolver\ResolverInterface;


class AboutController extends ActionController
{
	public function indexAction()
	{
		return new ViewModel();
	}
	
	public function contactAction()
	{
		return new ViewModel();
	}
	
	public function ourteamAction()
	{
		return new ViewModel();
	}
	
	public function contributorsAction()
	{
		return new ViewModel();
	}
	
	public function licenseAction()
	{
		return new ViewModel();
	}
	
	public function changelogsAction()
	{
		return new ViewModel();
	}
	
	public function logosAction()
	{
		return new ViewModel();
	}
	
	public function guideAction()
	{
		return new ViewModel();
	}
	
	public function faqAction()
	{
		return new ViewModel();
	}

	public function onDispatch(MvcEvent $e)
	{
// 	    $model   = new ViewModel();
// 	    $matches = $e->getRouteMatch();
	    //$page    = $matches->getParam('page', false);
// 	    $action = strtolower($matches->getParam('action', 'not-found'));
// 	    $controller = array_pop(explode('\\', $matches->getParam('controller')));
// 	    echo '<pre>';
// 	    print_r($controller);
// 	    die();
// 	    if (!$page) {
// 	        return $this->return404Page($model, $e->getResponse());
// 	    }
	
	    //$page = 'page-controller/' . $page;
	    //if (!$this->resolver->resolve($page)) {
	        //return $this->return404Page($model, $e->getResponse());
	    //}
	
// 	    $model->setTemplate($page);
// 	    $e->setResult($model);
// 	    return $model;
	}	
}
