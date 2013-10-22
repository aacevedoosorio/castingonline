<?php defined('SYSPATH') or die('No direct script access.');
/**
 * User: alejandroacevedo
 * Displays information of the Logged in user.
 * Menu items and more
 */
?>
<?php if( !is_null($user)){ ?>
    <li><?= HTML::anchor('model/add', "<span class=\"glyphicon glyphicon-plus-sign\">Agregar Modelo</span>", array('title' => 'Agregar Modelo', 'data-toggle' => 'modal', 'data-target'=>'#newModal')); ?></li>
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-list"></i><i class="nav-new"></i> Me</a>
        <ul class="dropdown-menu">
            <li><?= HTML::anchor('user/edit', "<span class=\"glyphicon glyphicon-user\"></span> $user->username", array('title' => 'Edit Profile')); ?></li>

            <li><?= HTML::anchor('user/logout', '<span class="glyphicon glyphicon-log-out"></span> Logout', array('title' => 'Logout')); ?></li>
        </ul>
    </li>
<?php } ?>