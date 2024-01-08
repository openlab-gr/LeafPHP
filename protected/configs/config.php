<?php

return array(
    'mode' => 'DEBUG',
    'name' => 'LeafPHP Demo Page',

    'default_controller' => 'MainController',
    'app_dir_name' => 'LeafPHP',


    'modules'=>array(
            'News',
             ),

    'libs'=>array(
            'Auth',
            'Cookie',
            'Multilang',
            'Sessions',
            'PureValidator',
            ),

    'lang'=>array(
            'gr',
            'en'
             ),

    'db'=>array(
          'host'=>'localhost',
          'uname'=>'root',
          'pass'=>'',
          'db_name'=>'leafphp_demo',
          ),

);

?>
