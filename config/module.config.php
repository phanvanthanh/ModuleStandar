<?php
return array(
     'controllers' => array(
         'invokables' => array(
             'Album2\Controller\Index' => 'Album2\Controller\IndexController',

         ),
     ),

     // The following section is new and should be added to your file
     'router' => array(
         'routes' => array(
             'album2' => array(
                 'type'    => 'segment',//tương đối, có thể đầy đủ nhiều phân đoạn hoặc một phân đoạn cũng được
                 'options' => array(
                     'route'    => '/album2[/][:action][/:id]',
                     'constraints' => array(
                         'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                         'id'     => '[0-9]+',
                     ),
                     'defaults' => array(
                         'controller' => 'Album2\Controller\Index',
                         'action'     => 'index',
                     ),
                 ),
             ),
         ),
     ),

     'view_manager' => array(
         'template_path_stack' => array(
             'album2' => __DIR__ . '/../view',
         ),
    
 )
     );
?>