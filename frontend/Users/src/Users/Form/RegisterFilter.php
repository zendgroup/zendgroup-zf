<?php

namespace Users\Form;

use ZG\InputFilter\ProvidesEventsInputFilter;
use Users\Module as Users;

class RegisterFilter extends ProvidesEventsInputFilter
{
    protected $emailValidator;
    protected $usernameValidator;

    public function __construct($emailValidator, $usernameValidator)
    {
        $this->emailValidator = $emailValidator;
        $this->usernameValidator = $usernameValidator;


        $this->add(array(
            'name'       => 'username',
            'required'   => true,
            'validators' => array(
                array(
                    'name'    => 'StringLength',
                    'options' => array(
                        'min' => 3,
                        'max' => 255,
                    ),
                ),
                $this->usernameValidator,
            ),
        ));


        $this->add(array(
            'name'       => 'email',
            'required'   => true,
            'validators' => array(
                array(
                    'name' => 'EmailAddress'
                ),
                $this->emailValidator
            ),
        ));


        $this->add(array(
            'name'       => 'display_name',
            'required'   => true,
            'filters'    => array(array('name' => 'StringTrim')),
            'validators' => array(
                array(
                    'name'    => 'StringLength',
                    'options' => array(
                        'min' => 3,
                        'max' => 128,
                    ),
                ),
            ),
        ));


        $this->add(array(
            'name'       => 'password',
            'required'   => true,
            'filters'    => array(array('name' => 'StringTrim')),
            'validators' => array(
                array(
                    'name'    => 'StringLength',
                    'options' => array(
                        'min' => 6,
                    ),
                ),
            ),
        ));

        $this->add(array(
            'name'       => 'passwordVerify',
            'required'   => true,
            'filters'    => array(array('name' => 'StringTrim')),
            'validators' => array(
                array(
                    'name'    => 'StringLength',
                    'options' => array(
                        'min' => 6,
                    ),
                ),
                array(
                    'name'    => 'Identical',
                    'options' => array(
                        'token' => 'password',
                    ),
                ),
            ),
        ));

        $this->getEventManager()->trigger('init', $this);
    }

    public function getEmailValidator()
    {
        return $this->emailValidator;
    }

    public function setEmailValidator($emailValidator)
    {
        $this->emailValidator = $emailValidator;
        return $this;
    }

    public function getUsernameValidator()
    {
        return $this->usernameValidator;
    }

    public function setUsernameValidator($usernameValidator)
    {
        $this->usernameValidator = $usernameValidator;
        return $this;
    }

}
