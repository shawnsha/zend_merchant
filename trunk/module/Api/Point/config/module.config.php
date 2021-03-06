<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'Point\Controller\Point' => 'Point\Controller\PointController',
        ),
    ),
 
    // 關於路徑解析部分，若Module增加資料夾需在此處理
    'router' => array(
        'routes' => array(
            'album-rest' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/api/point[/:id]',
                    'constraints' => array(
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Point\Controller\Point',
                    ),
                ),
            ),
        ),
    ),
    'view_manager' => array( //Add this config
        'strategies'  => array(
            'ViewJsonStrategy',
        ),
        'template_map' => array( 
            'error/404'   => __DIR__ . '/../view/error/404.phtml',
            'error/index' => __DIR__ . '/../view/error/index.phtml',
            'layout/layout'   => __DIR__ . '/../view/layout/layout.phtml',
        )
    ),
);
?>