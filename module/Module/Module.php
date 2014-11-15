<?php

namespace Module;

use Zend\Mvc\MvcEvent;

//use Zend\Db\ResultSet\ResultSet;
//use Zend\Db\TableGateway\TableGateway;


class Module{
    public function onBootstrap($e)
    {
        $app = $e->getApplication();
        $em  = $app->getEventManager(); // Specific event manager from App
        $sem = $em->getSharedManager(); // The shared event manager

        $sem->attach(__NAMESPACE__, MvcEvent::EVENT_DISPATCH, function($e) {
            //
        });
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

    public function getServiceConfig(){
        return array(
            "factories"=>array(
                /*
                'Module\Model\DepartmentsMapper' =>  function($sm) {
                    $tableGateway = $sm->get('DepartmentsTableGateway');
                    $table = new DepartmentsTable($tableGateway);
                    //$table->primaryKey="buildingID";
                    return $table;
                },
                'ModuleTableGateway' => function ($sm) {
                    $dbAdapter = $sm->get('departmentsDB');
                        $resultSetPrototype = new ResultSet();
                        $resultSetPrototype->setArrayObjectPrototype(new Department());
                        return new TableGateway("IDMV7.UCMDEPARTMENT", $dbAdapter, null, $resultSetPrototype);
                    },
                 * 
                 */
            )
        );
                
    }

    public function getControllerConfig() {
        return array(
            'factories' => array(
            ),
        );
    }
    
}
