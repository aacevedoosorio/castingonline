<?php defined('SYSPATH') or die('No direct script access.');
/**
 * User: alejandroacevedo
 * Login view
 */
?>
<section>
    <div class="container login">
        <div class="row ">
            <div class="center span4 well">
                <legend>Please Sign In</legend>
                <? if ($message) : ?>
                        <?= $message; ?>
                <? endif; ?>
                <?= Form::open('user/login',array('class' => 'form-signin', 'id' => 'form-signin')); ?>
                <div class="form-group">
                <?= Form::input('username', HTML::chars(Arr::get($_POST, 'username')),
                    array('id' => 'username',
                        'class'         => 'form-control',
                        'placeholder'   => 'Email',
                        'size'          => 50)
                    );
                ?>
                </div>
                <div class="form-group">
                <?= Form::password('password',NULL,array('id' => 'password',
                    'class'         => 'form-control',
                    'placeholder'   => 'Password',
                    'size'          => 50)
                );
                ?>
                </div>
                <label class="checkbox"><?= Form::checkbox('remember',1); ?> Remember Me</label>
                <?= Form::submit('login', 'Login', array('class' => 'btn btn-primary btn-block')); ?>
                <?= Form::close(); ?>
            </div>
        </div>
    </div>
    <p class="text-center muted ">&copy; Copyright 2013 -  Casting Online</p>
</section>
<!-- Main Container Ends -->