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
          'host'=>'dev.wideweb.gr',
          'uname'=>'root',
          'pass'=>'123456',
          'db_name'=>'leafphp_demo',
          ),

);

?>
