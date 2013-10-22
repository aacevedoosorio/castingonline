<?php defined('SYSPATH') or die('No direct script access.');
/**
 * User: alejandroacevedo
 * Extra javascript that should be included
 */

foreach($js as $js_library){
    echo HTML::script("assets/js/$js_library");
}