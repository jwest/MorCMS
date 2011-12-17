<?php defined('SYSPATH') or die('No direct script access.');

abstract class Controller_System_Admin extends Controller_System_Core {
	
    
    /**
     * Declare main layout for admin panel
     * @var string
     */
    public $template = 'admin/layout';
    

    /**
     * Controls access for the whole controller, if not set to FALSE we will only allow user roles specified
     * Can be set to a string or an array, for example 'login' or array('login', 'admin')
     * Note that in second(array) example, user must have both 'login' AND 'admin' roles set in database
     * @var array
     */
    public $auth_required = array('login', 'admin');


    /**
     * Controls access for separate actions
     * 'adminpanel' => 'admin' will only allow users with the role admin to access action_adminpanel
     * 'moderatorpanel' => array('login', 'moderator') will only allow users with the roles login and moderator to access action_moderatorpanel
     * @var array
     */
    public $secure_actions = FALSE;
        

    /**
     * Check permission and controll for type
     */
    public function before()
    {
        parent::before();
        
        $this->template->content = '404';

        // if ajax you don't use global layout
        if(Request::initial()->is_ajax())
        {
            $this->auto_render = false;
        }

        
        // Open session
        $this->session= Session::instance();

        
        // Check user auth and role
        $action_name = Request::initial()->action();

        
        if(($this->auth_required !== FALSE AND Auth::instance()->logged_in($this->auth_required) === FALSE) OR (is_array($this->secure_actions) && array_key_exists($action_name, $this->secure_actions) AND Auth::instance()->logged_in($this->secure_actions[$action_name]) === FALSE))
        {
            if (Auth::instance()->logged_in())
            {
                Request::initial()->redirect('admin/auth/noaccess');
            }
            else
            {
                Request::initial()->redirect('admin/auth/signin');
            }
        }
        
    }
        

    /**
     * Load all html elements
     */
    public function after()
    {
        $menu = Kohana::$config->load('menu');
        
        $this->template->title = $this->request->controller();
        $this->template->controller = $this->request->controller();
        $this->template->username = Auth::instance()->get_user()->username;
        $this->template->menu = (isset($menu['default'])) ? $menu['default'] : $menu['default'];
        
        parent::after();
    }


} // End System_Admin
