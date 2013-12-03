<?php

namespace Point;

use Zend\Mvc\MvcEvent;

class Module{
    public function getAutoloaderConfig() {
        return array(
            'Zend\Loader\ClassMapAutoloader' => array(
                __DIR__ . '/autoload_classmap.php',
            ),
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }
 
    public function getConfig() {
        return include __DIR__ . '/config/module.config.php';
    }
    
    public function onBootstrap(MvcEvent $e) {
        $sharedEvents        = $e->getApplication()->getEventManager()->getSharedManager();
        
        $sharedEvents->attach(__NAMESPACE__, 'dispatch', function($e) {
            $result = $e->getResult();
            $result->setTerminal(true);
        });
    }    

}
?>