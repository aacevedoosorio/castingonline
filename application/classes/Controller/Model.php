<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Class Controller_Model
 */
class Controller_Model extends Controller_Website {

    /**
     * Input used to filter the Models grid
     * @var array
     */
    private $form_inputs_filter = array('name', 'email');

    /**
     * ORM model
     * @var null
     */
    private $model_orm          = NULL;

    /**
     * Constuctor
     * @param Request $request
     * @param Response $response
     */
    public function __construct(Request $request, Response $response){

        parent::__construct($request, $response);

        if(is_null($this->model_orm)){
            $this->model_orm = ORM::factory('model');
        }
    }

    /**
     * Override the before method to assign the js libraries for the controller
     */
    public function before(){
        parent::before();

        $css[] = 'slider.css';
        $css[] = 'blueimp-gallery.css';
        $css[] = 'blueimp-gallery-indicator.css';
        $css[] = 'blueimp-gallery-video.css';
        //$css[] = 'bootstrap-image-gallery.min.css';
        $this->template->extra_css = View::factory('extra_css')->bind('css',$css);

        $js[] = 'modernizr.js';
        $js[] = 'jquery.validate.min.js';
        $js[] = 'bootstrap-slider.js';
        $js[] = 'jquery.raty.min.js';
        $js[] = 'jquery.blueimp-gallery.min.js';
        //$js[] = 'bootstrap-image-gallery.min.js';
        $js[] = 'raty/model.js';

        $js[] = 'blueimp-helper.js';
        $js[] = 'blueimp-gallery-fullscreen.js';
        $js[] = 'blueimp-gallery-indicator.js';
        $js[] = 'blueimp-gallery-video.js';
        $js[] = 'blueimp-gallery-vimeo.js';
        $js[] = 'blueimp-gallery-youtube.js';

        $this->template->extra_js = View::factory('extra_js')->bind('js',$js);
    }

    /**
     * Default action of the model controller is to show the list of models in the database
     */
    public function action_index()
	{
        // Retrieve the models
	}

    /**
     * Creates the list of models based on search params
     */
    public function action_list(){

        $this->model_orm->where('status','=','active');

        $parameters = $this->request->query();
        unset($parameters['page']);
        $parameters = http_build_query($parameters);

        //Define the inputs that can be used to filter
        foreach ($this->form_inputs_filter as $name)
        {
            $value = $this->request->query($name);
            if ($value !== FALSE AND $value != '')
            {
                $this->model_orm->where($name, 'like', '%'.$value.'%');
            }
        }

        // Create a hash from the query
        $query_hash = sha1($parameters);

        // Compare the query hash to check if we have to make the query again
        //if(Session::instance()->get('models_query') != $query_hash){
        if((Cache::instance()->get($query_hash,FALSE))){
            $models = Cache::instance()->get($query_hash);
        }else{

            // Perform the query and get the Models_Model Objects
            $models = $this->model_orm->find_all();

            // Save in the session the query hash
            Cache::instance()->set($query_hash,$models->cached());
        }


        $page = ((int) $this->request->query('page') > 0) ? $this->request->query('page') : 1;
        $paginator = Paginator::factory($models);

        $paginator->set_option_queries(NULL,NULL,$parameters);
        $paginator->set_current_page_number($page);

        $this->template->content                = View::factory('model/template');

        $list_view                              = View::factory('model/list');
        $list_view->bind('models',$paginator);
        $pagination = $paginator->render();
        $list_view->bind('pagination',$pagination);
        $this->template->content->list          = $list_view;
    }


    /**
     * Loads the view for adding a user
     */
    public function action_add(){
        $this->auto_render = FALSE;

        $create_model_view  = View::factory('model/create')
            ->bind('errors', $errors)
            ->bind('message', $message);

        $this->response->body($create_model_view);
    }

    /**
     * Loads the data of the model in the form so they can update their details or change the profile pic
     */
    public function action_edit(){
        $this->auto_render = FALSE;
        $id = $this->request->param('id');
        $model = NULL;

        if(empty($id)){
            $errors = 'Model parameter not found';
            $message = 'Model id is missing';
        }else{
            // Get the model data from the db
            $model = $this->model_orm->where('id','=',$id)->find();
        }

        $create_model_view  = View::factory('model/create')
            ->bind('model',$model)
            ->bind('errors', $errors)
            ->bind('message', $message);

        $this->response->body($create_model_view);
    }

    /**
     * Needs to retrieve the gallery assets and invoke the proper view
     */
    public function action_gallery(){
        $this->auto_render = FALSE;
        $id = $this->request->param('id');
        $model = NULL;

        if(empty($id)){
            $errors = 'Model parameter not found';
            $message = 'Model id is missing';
        }else{
            // Get the model data from the db
            $model = $this->model_orm->where('id','=',$id)->find();
        }

        $create_model_view  = View::factory('model/gallery')
            ->bind('model',$model)
            ->bind('errors', $errors)
            ->bind('message', $message);

        $this->response->body($create_model_view);
    }

} // End Model
