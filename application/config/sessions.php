<?php defined('SYSPATH') or die('No direct script access.');
/**
 * User: alejandroacevedo
 * Configuration file to handling sessions
 */


return array(
    'native' => array(
        'name' => 'session_name',
        'lifetime' => 43200,
    ),
    'cookie' => array(
        'name' => 'cookie_name',
        'encrypted' => TRUE,
        'lifetime' => 43200,
    )
);