<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Class Controller_User
 * Basic user operations. Login, Logout
 */
class Controller_User extends Controller_Template {

    /**
     * Override the before method to assign the js libraries for the controller
     */
    public function before(){
        parent::before();

        $this->template->extra_css = NULL;

        $js[] = 'modernizr.js';
        $js[] = 'jquery.validate.min.js';
        $this->template->extra_js = View::factory('extra_js')->bind('js',$js);
    }

    /**
     * Default action of the user controller
     */
    public function action_index()
    {
        $this->template->header     = NULL;
        $this->template->content    = View::factory('user/info');

        // Load the user information
        $user = Auth::instance()->get_user();

        // if a user is not logged in, redirect to login page
        if (!$user)
        {
            HTTP::redirect('user/login');
        }else{
            HTTP::redirect('model/list');
        }


    }

    /**
     * Function to create a user
     */
    public function action_create()
    {
        $this->template->header     = NULL;
        $this->template->content    = View::factory('user/create')
            ->bind('errors', $errors)
            ->bind('message', $message);

        if (HTTP_Request::POST == $this->request->method())
        {
            try {

                // Create the user using form values
                $user = ORM::factory('user')->create_user($this->request->post(), array(
                    'username',
                    'password',
                    'email'
                ));

                // Grant user login role
                $user->add('roles', ORM::factory('role', array('name' => 'login')));

                // Reset values so form is not sticky
                $_POST = array();

                // Set success message
                $message = "You have added user '{$user->username}' to the database";

            } catch (ORM_Validation_Exception $e) {

                // Set failure message
                $message = 'There were errors, please see form below.';

                // Set errors using custom messages
                $errors = $e->errors('models');
            }
        }
    }

    /**
     * Function to perform the login of the user
     */
    public function action_login()
    {
        $this->template->header     = NULL;
        $this->template->content    = View::factory('user/login')
            ->bind('message', $message);

        if (HTTP_Request::POST == $this->request->method())
        {
            // Attempt to login user
            $remember = array_key_exists('remember', $this->request->post());
            $user = Auth::instance()->login($this->request->post('username'), $this->request->post('password'), $remember);

            // If successful, redirect user
            if ($user)
            {
                HTTP::redirect('model/list');
            }
            else
            {
                $message = '<div class="alert alert-error"><a class="close" data-dismiss="alert" href="#">×</a>Incorrect Username or Password!</div>';
            }
        }
    }

    /**
     * Function to complete the logout of the user
     */
    public function action_logout()
    {
        // Log user out
        Auth::instance()->logout();

        // DEstroy session
        Session::instance()->destroy();

        // Redirect to login page
        HTTP::redirect('user/login');
    }

} // End User
