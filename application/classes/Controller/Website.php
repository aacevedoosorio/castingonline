<?php defined('SYSPATH') or die('No direct script access.');
/**
 * User: alejandroacevedo
 * Controlle to extend functionality of the Template Controller
 */

abstract class Controller_Website extends Controller_Template {

    /**
     * We always check that we are still log in
     */
    public function before(){

        parent::before();

        // Load the user information
        $user = Auth::instance()->get_user();

        $this->template->header = View::factory('user/info')
            ->bind('user', $user);


        $this->template->extra_menu_options = View::factory('user/extra_menu_options')
            ->bind('user', $user);

        $this->template->content = NULL;

        // if a user is not logged in, redirect to login page
        if (!$user)
        {
            HTTP::redirect('user/login');
        }
    }

}