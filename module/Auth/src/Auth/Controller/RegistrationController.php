<?php

namespace Auth\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

use Anketa\Entity\User;

// Doctrine Annotations
use DoctrineModule\Stdlib\Hydrator\DoctrineObject as DoctrineHydrator;
use DoctrineORMModule\Stdlib\Hydrator\DoctrineEntity;
use DoctrineORMModule\Form\Annotation\AnnotationBuilder as DoctrineAnnotationBuilder;

// Zend Annotation
use Zend\Form\Annotation\AnnotationBuilder;
// for the form
use Zend\Form\Element;

use Auth\Form\RegistrationForm;
//use Auth\Form\RegistrationFilter;
//use Auth\Form\ForgottenPasswordForm;
//use Auth\Form\ForgottenPasswordFilter;

use Zend\Mail\Message;

class RegistrationController extends AbstractActionController
{
    public function indexAction()
    {
        $entityManager = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default');
        $user = new User;

    }
}