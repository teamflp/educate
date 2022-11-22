<?php 

function get_config($key) {
    $config = array(
        'db_host' => 'localhost',
        'db_user' => 'root',
        'db_pass' => '',
        'db_name' => 'prosigned',
    );
    return $config[$key];
}

