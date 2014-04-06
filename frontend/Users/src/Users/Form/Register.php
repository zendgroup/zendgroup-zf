<?php
namespace Users\Form;
use Zend\Form\Element\Captcha as Captcha;

class Register extends Base {

    protected $captchaElement = null;
    /**
     * @param string|null $name
     * @param RegistrationOptionsInterface $options
     */

    public function __construct($name = null, $options) {

        //         $this->setRegistrationOptions($options);
        parent::__construct($name);
        $this->remove('userId');

        if ($this->captchaElement) {
            $this->add($this->captchaElement,
                array(
                    'name' => 'captcha'
                ));
        }
        $this->get('submit')->setLabel('Register');
        $this->getEventManager()->trigger('init',$this);
    }

    public function setCaptchaElement(Captcha $captchaElement) {

        $this->captchaElement = $captchaElement;
    }

}
