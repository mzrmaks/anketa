<?php
namespace Auth\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
// use Auth\Model\Auth;          we don't need the model here we will use Doctrine em
use Anketa\Entity\User; // only for the filters
//use Auth\Form\LoginForm;       // <-- Add this import
//use Auth\Form\LoginFilter;
class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }
}