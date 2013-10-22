<?php defined('SYSPATH') or die('No direct script access.');
/**
 * User: alejandroacevedo
 * create view. The form that we will use for creating a user
 */
?>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Modal title</h4>
            </div>
            <div class="modal-body">
                <h2>Create a New User</h2>
                <? if ($message) : ?>
                    <h3 class="message">
                        <?= $message; ?>
                    </h3>
                <? endif; ?>

                <?= Form::open('user/create'); ?>

                <?= Form::label('username', 'Username'); ?>
                <?= Form::input('username', ( ! is_null($model->name))?HTML::chars($model->name):""); ?>
                <div class="error">
                    <?= Arr::get($errors, 'username'); ?>
                </div>

                <?= Form::label('email', 'Email Address'); ?>
                <?= Form::input('email', HTML::chars(Arr::get($_POST, 'email'))); ?>
                <div class="error">
                    <?= Arr::get($errors, 'email'); ?>
                </div>

                <?= Form::label('password', 'Password'); ?>
                <?= Form::password('password'); ?>
                <div class="error">
                    <?= Arr::path($errors, '_external.password'); ?>
                </div>

                <?= Form::label('password_confirm', 'Confirm Password'); ?>
                <?= Form::password('password_confirm'); ?>
                <div class="error">
                    <?= Arr::path($errors, '_external.password_confirm'); ?>
                </div>

                <?= Form::submit('create', 'Create User'); ?>
                <?= Form::close(); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->