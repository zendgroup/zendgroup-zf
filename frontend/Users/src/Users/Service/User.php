<?php
namespace Users\Service;
use Zend\Authentication\AuthenticationService;
use Zend\Form\Form;
use Zend\ServiceManager\ServiceManagerAwareInterface;
use Zend\ServiceManager\ServiceManager;
use Zend\Crypt\Password\Bcrypt;
use Zend\Stdlib\Hydrator;
use ZG\EventManager\EventProvider;
class User extends EventProvider implements ServiceManagerAwareInterface {
    /**
     * @var AuthenticationService
     */
    protected $authService;
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
     * @var ServiceManager
     */
    protected $serviceManager;
    /**
     * @var Hydrator\ClassMethods
     */
    protected $formHydrator;
    /**
     * createFromForm
     *
     * @param array $data
     * @return \Users\Entity\UserInterface
     * @throws Exception\InvalidArgumentException
     */
    public function register(array $data) {
        // call the factory to create User Entity Class\
        /**
         * @todo get user from entity
         */
        //         $class = $this->getOptions()->getUserEntityClass();
        //         $user = new $class;
        $user = new ZG\Model\Entities\Users();
        // get form
        $form = $this->getRegisterForm();
        $form->setHydrator($this->getFormHydrator());
        /**
         * @todo set user data to form
         */
        //         $form->bind($user);
        // Set and valid form's data
        $form->setData($data);
        if (!$form->isValid()) {
            return false;
        }
        // get data
        $user = $form->getData();
        /* @var $user \Users\Entity\UserInterface */
        // data processing
        $bcrypt = new Bcrypt;
        // options password cost
        /**
         * @todo using config or options service
         */
        $bcrypt->setCost(14);
        $user->setPassword($bcrypt->create($user->getUserPassword()));
        //         if ($this->getOptions()->getEnableUsername()) {
        $user->setUsername($data['username']);
        //         }
        //         if ($this->getOptions()->getEnableDisplayName()) {
        //             $user->setDisplayName($data['display_name']);
        //         }
        // If user state is enabled, set the default state value
        //         if ($this->getOptions()->getEnableUserState()) {
        //             if ($this->getOptions()->getDefaultUserState()) {
        //                 $user->setState($this->getOptions()->getDefaultUserState());
        //             }
        //         }
        // Trigger and create new user
        $this->getEventManager()
            ->trigger(__FUNCTION__,$this,
                array(
                    'user' => $user, 'form' => $form
                ));
        $this->getUserMapper()->insert($user);
        $this->getEventManager()
            ->trigger(__FUNCTION__ . '.post',$this,
                array(
                    'user' => $user, 'form' => $form
                ));
        // return user information
        return $user;
    }
    /**
     * change the current users password
     *
     * @param array $data
     * @return boolean
     */
    public function changePassword(array $data) {
        $currentUser = $this->getAuthService()->getIdentity();
        $oldPass = $data['credential'];
        $newPass = $data['newCredential'];
        $bcrypt = new Bcrypt;
        // options password cost
        /**
         * @todo using config or options service
         */
        $bcrypt->setCost(14);
        if (!$bcrypt->verify($oldPass,$currentUser->getPassword())) {
            return false;
        }
        $pass = $bcrypt->create($newPass);
        $currentUser->setPassword($pass);
        $this->getEventManager()
            ->trigger(__FUNCTION__,$this,
                array(
                    'user' => $currentUser
                ));
        $this->getUserMapper()->update($currentUser);
        $this->getEventManager()
            ->trigger(__FUNCTION__ . '.post',$this,
                array(
                    'user' => $currentUser
                ));
        return true;
    }
    public function changeEmail(array $data) {
        $currentUser = $this->getAuthService()->getIdentity();
        $bcrypt = new Bcrypt;
        // options password cost
        /**
         * @todo using config or options service
         */
        $bcrypt->setCost(14);
        if (!$bcrypt->verify($data['credential'],$currentUser->getPassword())) {
            return false;
        }
        $currentUser->setEmail($data['newIdentity']);
        $this->getEventManager()
            ->trigger(__FUNCTION__,$this,
                array(
                    'user' => $currentUser
                ));
        $this->getUserMapper()->update($currentUser);
        $this->getEventManager()
            ->trigger(__FUNCTION__ . '.post',$this,
                array(
                    'user' => $currentUser
                ));
        return true;
    }

    /**
     * getAuthService
     *
     * @return AuthenticationService
     */
    public function getAuthService() {
        if (null === $this->authService) {
            $this->authService = $this->getServiceManager()
                ->get('users_auth_service');
        }
        return $this->authService;
    }
    /**
     * setAuthenticationService
     *
     * @param AuthenticationService $authService
     * @return User
     */
    public function setAuthService(AuthenticationService $authService) {
        $this->authService = $authService;
        return $this;
    }
    /**
     * @return Form
     */
    public function getRegisterForm() {
        if (null === $this->registerForm) {
            $this->registerForm = $this->getServiceManager()
                ->get('users_register_form');
        }
        return $this->registerForm;
    }
    /**
     * @param Form $registerForm
     * @return User
     */
    public function setRegisterForm(Form $registerForm) {
        $this->registerForm = $registerForm;
        return $this;
    }
    /**
     * @return Form
     */
    public function getChangePasswordForm() {
        if (null === $this->changePasswordForm) {
            $this->changePasswordForm = $this->getServiceManager()
                ->get('users_change_password_form');
        }
        return $this->changePasswordForm;
    }
    /**
     * @param Form $changePasswordForm
     * @return User
     */
    public function setChangePasswordForm(Form $changePasswordForm) {
        $this->changePasswordForm = $changePasswordForm;
        return $this;
    }

    /**
     * Retrieve service manager instance
     *
     * @return ServiceManager
     */
    public function getServiceManager() {
        return $this->serviceManager;
    }
    /**
     * Set service manager instance
     *
     * @param ServiceManager $serviceManager
     * @return User
     */
    public function setServiceManager(ServiceManager $serviceManager) {
        $this->serviceManager = $serviceManager;
        return $this;
    }
    /**
     * Return the Form Hydrator
     *
     * @return \Zend\Stdlib\Hydrator\ClassMethods
     */
    public function getFormHydrator() {
        if (!$this->formHydrator instanceof Hydrator\HydratorInterface) {
            $this
                ->setFormHydrator(
                    $this->getServiceManager()
                        ->get('users_register_form_hydrator'));
        }
        return $this->formHydrator;
    }
    /**
     * Set the Form Hydrator to use
     *
     * @param Hydrator\HydratorInterface $formHydrator
     * @return User
     */
    public function setFormHydrator(Hydrator\HydratorInterface $formHydrator) {
        $this->formHydrator = $formHydrator;
        return $this;
    }
}
