<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'Api\Controller\Sample' => 'Api\Controller\SampleController',
        ),
    ),
    'controller_plugins' => array(
        'invokables' => array(
            'VerifyUser' => 'Api\Controller\Plugin\VerifyUser',
        )
    ),
    'router' => array(
        'routes' => array(
            'sample' => array(
                'type' => 'segment',
                'options' => array(
                    'route' => '/sample[/:id]',
                    'constraints' => array(
                        'id' => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Api\Controller\Sample',
                    ),
                ),
            ),
        ),
    ),    
    'view_manager' => array(
        'strategies' => array(
            'ViewJsonStrategy',
        ),

    ),
    'module_layouts' => array(
        'Api' =>'layout/blank.phtml',
    ),
    
);