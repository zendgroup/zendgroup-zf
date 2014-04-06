<?php
/**
 * ZEND GROUP
 *
 * @name        IndexController.php
 * @category    frontend
 * @package     Users
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
use Zend\Form\Form;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\Stdlib\ResponseInterface as Response;
use Zend\Stdlib\Parameters;
use Zend\View\Model\ViewModel;
use Users\Service\User as UserService;
use Users\Options\UserControllerOptionsInterface;

class IndexController extends ActionController {
    const ROUTE_CHANGEPASSWD = 'users/changepassword';
    const ROUTE_LOGIN = 'users/login';
    const ROUTE_REGISTER = 'users/register';
    const ROUTE_CHANGEEMAIL = 'users/changeemail';
    const CONTROLLER_NAME = 'users';
    /**
     * @var UserService
     */

    protected $userService;
    /**
     * @var Form
     */
    protected $loginForm;
    /**
     * @var Form
     */
    protected $registerForm;
    /**
     * @var Form
     */
    protected $changePasswordForm;
    /**
     * @var Form
     */
    protected $changeEmailForm;
    /**
     * @todo Make this dynamic / translation-friendly
     * @var string
     */
    protected $failedLoginMessage = 'Authentication failed. Please try again.';

    public function indexAction() {

        echo __CLASS__;
        $logo = "<img src='" . ASSETS_LINK
            . "/frontend/default/images/logo.png' />";
        return new ViewModel(array(
            'logo' > $logo
        ));
    }
    /**
     * Login form
     */

    public function loginAction() {

        //         if ($this->userAuthentication()->getAuthService()->hasIdentity()) {
        //             return $this->redirect()
        //                 ->toRoute($this->getOptions()->getLoginRedirectRoute());
        //         }
        $request = $this->getRequest();
        $form = $this->getLoginForm();
        if ($request->getQuery()->get('redirect')) {
            $redirect = $request->getQuery()->get('redirect');
        } else {
            $redirect = false;
        }
        if (!$request->isPost()) {
            return array(
                'loginForm' => $form, 'redirect' => $redirect,
                'enableRegistration' => true,
            );
        }
        $form->setData($request->getPost());
        if (!$form->isValid()) {
            $this->flashMessenger()->setNamespace('users-login-form')
                ->addMessage($this->failedLoginMessage);
            return $this->redirect()
                ->toUrl(
                    $this->url()->fromRoute(static::ROUTE_LOGIN)
                        . ($redirect ? '?redirect=' . rawurlencode($redirect)
                            : ''));
        }
        // clear adapters
        //         $this->userAuthentication()->getAuthAdapter()->resetAdapters();
        //         $this->userAuthentication()->getAuthService()->clearIdentity();
        return $this->forward()
            ->dispatch(static::CONTROLLER_NAME,
                array(
                    'action' => 'authenticate'
                ));
    }
    /**
     * Logout and clear the identity
     */

    public function logoutAction() {

        $this->userAuthentication()->getAuthAdapter()->resetAdapters();
        $this->userAuthentication()->getAuthAdapter()->logoutAdapters();
        $this->userAuthentication()->getAuthService()->clearIdentity();
        $redirect = $this->params()
            ->fromPost('redirect',$this->params()->fromQuery('redirect',false));
        if ($this->getOptions()->getUseRedirectParameterIfPresent()
            && $redirect) {
            return $this->redirect()->toUrl($redirect);
        }
        return $this->redirect()->toRoute('users/login');
    }

    public function registerAction() {
        // if the user is logged in, we don't need to register
        //         if ($this->userAuthentication()->hasIdentity()) {
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
        //         if ($this->getOptions()->getUseRedirectParameterIfPresent()
        //             && $request->getQuery()->get('redirect')) {
        //             $redirect = $request->getQuery()->get('redirect');
        //         } else {
        $redirect = false;
        //         }
        $redirectUrl = $this->url()->fromRoute(static::ROUTE_REGISTER)
            . ($redirect ? '?redirect=' . $redirect : '');
        $prg = $this->prg($redirectUrl,true);
        if ($prg instanceof Response) {
            return $prg;
        } elseif ($prg === false) {
            return array(
                'registerForm' => $form, 'enableRegistration' => true,
                'redirect' => $redirect,
            );
        }
        $post = $prg;
        //$user = $service->register($post);
        $redirect = isset($prg['redirect']) ? $prg['redirect'] : null;
        if (!$user) {
            return array(
                'registerForm' => $form, 'enableRegistration' => true,
                'redirect' => $redirect,
            );
        }
        //         if ($service->getOptions()->getLoginAfterRegistration()) {
        //             $identityFields = array('email');
        //             if (in_array('email',$identityFields)) {
        //                 $post['identity'] = $user->getEmail();
        //             } elseif (in_array('username',$identityFields)) {
        //                 $post['identity'] = $user->getUsername();
        //             }
        //             $post['credential'] = $post['password'];
        //             $request->setPost(new Parameters($post));
        //             return $this->forward()
        //                 ->dispatch(static::CONTROLLER_NAME,
        //                     array(
        //                         'action' => 'authenticate'
        //                     ));
        //         }
        // TODO: Add the redirect parameter here...
        return $this->redirect()
            ->toUrl(
                $this->url()->fromRoute(static::ROUTE_LOGIN)
                    . ($redirect ? '?redirect=' . $redirect : ''));
    }

    public function getRegisterForm() {

        if (!$this->registerForm) {
            $this
                ->setRegisterForm(
                    $this->getServiceLocator()->get('users_register_form'));
        }
        return $this->registerForm;
    }

    public function setRegisterForm(Form $registerForm) {

        $this->registerForm = $registerForm;
    }

    public function getLoginForm() {

        if (!$this->loginForm) {
            $this
                ->setLoginForm(
                    $this->getServiceLocator()->get('users_login_form'));
        }
        return $this->loginForm;
    }

    public function setLoginForm(Form $loginForm) {

        $this->loginForm = $loginForm;
        $fm = $this->flashMessenger()->setNamespace('users-login-form')
            ->getMessages();
        if (isset($fm[0])) {
            $this->loginForm
                ->setMessages(
                    array(
                        'identity' => array(
                            $fm[0]
                        )
                    ));
        }
        return $this;
    }

    public function changeEmailAction() {

        echo __CLASS__;
        return new ViewModel();
    }

    public function changePasswordAction() {

        echo __CLASS__;
        return new ViewModel();
    }
}
