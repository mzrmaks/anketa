<?php


namespace Anketa;

use Zend\Mvc\MvcEvent;
use Zend\Debug\Debug;

class Module
{

    public function onBootstrap($e)
    {
        $e->getApplication()
            ->getEventManager()
            ->attach(
                'route', array($this, 'checkAccess')
            );
    }

    public function checkAccess()
    {
        Debug::dump("Произошло событие route");
    }

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }
}
