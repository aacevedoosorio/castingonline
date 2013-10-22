<?php defined('SYSPATH') or die('No direct script access.');
/**
 * User: alejandroacevedo
 * Database configuration
 */


return array
(
    'default' => array
    (
        'type'       => 'mysql',
        'connection' => array(
            'hostname'   => 'localhost',
            'username'   => 'root',
            'password'   => 'root',
            'persistent' => TRUE,
            'database'   => 'casting',
        ),
        'table_prefix' => '',
        'charset'      => 'utf8',
        'profiling'    => TRUE,
    )
);