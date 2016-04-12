<?php
namespace Auth\Form;

use Zend\Form\Form;

class RegistrationForm extends Form
{

    public function __construct($name = null)
    {
        parent::__construct('registration');
        $this->setAttribute('method', 'post');

        $this->add(array(
            'name' => 'usrName',
            'attributes' => array(
                'type' => 'text',
            ),
            'options' => array(
                'label' => 'Имя пользователя',
            )
        ));

        $this->add(array(
            'name' => 'usrEmail',
            'attributes' => array(
                'type' => 'email',
            ),
            'options' => array(
                'label' => 'E-mail',
            )
        ));

        $this->add(array(
            'name' => 'usrPassword',
            'attributes' => array(
                'type' => 'password',
            ),
            'options' => array(
                'label' => 'Пароль',
            )
        ));

        $this->add(array(
            'name' => 'usrPassword',
            'attributes' => array(
                'type' => 'password',
            ),
            'options' => array(
                'label' => 'Пароль',
            )
        ));

        $this->add(array(
            'name' => 'usrPasswordConfirm',
            'attributes' => array(
                'type' => 'password',
            ),
            'options' => array(
                'label' => 'Подтвердите пароль',
            )
        ));

        $this->add(array(
            'type' => 'Zend\Form\Element\Captcha',
            'name' => 'captcha',
            'options' => array(
                'label' => 'Подтвердите что вы не робот',
                'captcha' => new \Zend\Captcha\Figlet(),
            ),
        ));

        $this->add(array(
            'name' => 'submit',
            'attributes' => array(
                'type'  => 'submit',
                'value' => 'Зарегистрироваться',
                'id' => 'submitbutton',
            ),
        ));
    }
}