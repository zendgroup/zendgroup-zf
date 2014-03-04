<?php

/**
 * ZEND GROUP
 *
 * @name        IndexController.php
 * @category    frontend
 * @package 	Users
 * @subpackage  Users\Controller
 * @author      Thuy Dinh Xuan <thuydx@zendgroup.vn>
 * @copyright   Copyright (c)2008-2010 ZEND GROUP. All rights reserved
 * @license     http://zendgroup.vn/license/
 * @version     $1.0$
 * Sep 7, 2013
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
namespace Users\Controller;

use ZG\Mvc\Controller\ActionController;
use Zend\View\Helper\ViewModel;

class IndexController extends ActionController
{
    
    public function indexAction () {
        echo __CLASS__;
        $logo =  "<img src='".ASSETS_LINK."/frontend/default/images/logo.png' />";
        return new ViewModel(array('logo'>$logo));
    }
    
    public function loginAction () {
        echo __CLASS__;
        return new ViewModel();
    }
    
    public function logoutAction () {
        echo __CLASS__;
        return new ViewModel();
    }
    
    public function registerAction()
    {
        // if the user is logged in, we don't need to register
//         if ($this->zfcUserAuthentication()->hasIdentity()) {
//             // redirect to the login redirect route
//             return $this->redirect()->toRoute($this->getOptions()->getLoginRedirectRoute());
//         }
        // if registration is disabled
//         if (!$this->getOptions()->getEnableRegistration()) {
//             return array('enableRegistration' => false);
//         }
    
        $request = $this->getRequest();
        //$service = $this->getUserService();
        $form = $this->getRegisterForm();
    
        if ($this->getOptions()->getUseRedirectParameterIfPresent() && $request->getQuery()->get('redirect')) {
            $redirect = $request->getQuery()->get('redirect');
        } else {
            $redirect = false;
        }
    
        $redirectUrl = $this->url()->fromRoute(static::ROUTE_REGISTER)
        . ($redirect ? '?redirect=' . $redirect : '');
        $prg = $this->prg($redirectUrl, true);
    
        if ($prg instanceof Response) {
            return $prg;
        } elseif ($prg === false) {
            return array(
                    'registerForm' => $form,
                    'enableRegistration' => $this->getOptions()->getEnableRegistration(),
                    'redirect' => $redirect,
            );
        }
    
        $post = $prg;
        //$user = $service->register($post);
    
        $redirect = isset($prg['redirect']) ? $prg['redirect'] : null;
    
        if (!$user) {
            return array(
                    'registerForm' => $form,
                    'enableRegistration' => $this->getOptions()->getEnableRegistration(),
                    'redirect' => $redirect,
            );
        }
    
        if ($service->getOptions()->getLoginAfterRegistration()) {
            $identityFields = $service->getOptions()->getAuthIdentityFields();
            if (in_array('email', $identityFields)) {
                $post['identity'] = $user->getEmail();
            } elseif (in_array('username', $identityFields)) {
                $post['identity'] = $user->getUsername();
            }
            $post['credential'] = $post['password'];
            $request->setPost(new Parameters($post));
            return $this->forward()->dispatch(static::CONTROLLER_NAME, array('action' => 'authenticate'));
        }
    
        // TODO: Add the redirect parameter here...
        return $this->redirect()->toUrl($this->url()->fromRoute(static::ROUTE_LOGIN) . ($redirect ? '?redirect='.$redirect : ''));
    }
    
    public function changeEmailAction () {
        echo __CLASS__;
        return new ViewModel();
    }
    
    public function changePasswordAction () {
        echo __CLASS__;
        return new ViewModel();
    }
}