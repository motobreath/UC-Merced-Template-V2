<?php
return array(
    'controllers' => array(
        'invokables' => array(
            //'ControllerName' => 'ControllerNamespace',
        ),
    ),
    'router' => array(
        'routes' => array(
            
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
        'template_map' => array(
            //'layout/layout'           => __DIR__ . '/../../application/view/layout/admin.phtml',
        ),
        'strategies' => array(
            //for RESTful Api module
            //'ViewJsonStrategy',
        ),

    ),
    
);