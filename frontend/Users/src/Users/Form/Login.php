<?php
namespace Users\Form;
use Zend\Form\Form;
use Zend\Form\Element;
use ZG\Form\ProvidesEventsForm;
use Users\Module as Users;

class Login extends ProvidesEventsForm {

    public function __construct($name = null) {

        parent::__construct($name);
        $this
            ->add(
                array(
                    'name' => 'identity',
                    'options' => array(
                        'label' => '',
                    ),
                    'attributes' => array(
                        'type' => 'text'
                    ),
                ));
        $emailElement = $this->get('identity');
        $label = $emailElement->getLabel('label');
        // @TODO: make translation-friendly
        $emailElement->setLabel($label);
        //
        $this
            ->add(
                array(
                    'name' => 'credential',
                    'options' => array(
                        'label' => 'Password',
                    ),
                    'attributes' => array(
                        'type' => 'password',
                    ),
                ));
        // @todo: Fix this
        // 1) getValidator() is a protected method
        // 2) i don't believe the login form is actually being validated by the login action
        // (but keep in mind we don't want to show invalid username vs invalid password or
        // anything like that, it should just say "login failed" without any additional info)
        //$csrf = new Element\Csrf('csrf');
        //$csrf->getValidator()->setTimeout($options->getLoginFormTimeout());
        //$this->add($csrf);
        $submitElement = new Element\Button('submit');
        $submitElement->setLabel('Sign In')
            ->setAttributes(
                array(
                    'type' => 'submit',
                ));
        $this
            ->add($submitElement,
                array(
                    'priority' => -100,
                ));
        $this->getEventManager()->trigger('init',$this);
    }
}
