<?php defined('SYSPATH') or die('No direct script access.');
/**
 * User: alejandroacevedo
 * Extra css that should be included
 */

foreach($css as $css_library){
    echo HTML::style("assets/css/$css_library");
}