<?php defined('SYSPATH') or die('No direct script access.');

abstract class Controller_System_Auth extends Controller_System_Core {

    
    public $template = 'shared/layout';
    
    
    /**
     * Redirect after success login
     * @var string path - url 
     */
    protected $redirect_to;
    
    
    /**
     * Redirect after signout
     * @var string path - url 
     */
    protected $signout_to;
    
    
    /**
     * view name ( and or path)
     * @var string view file
     */
    protected $view_path;
    
    
    public function action_signin()
    {
        //If user already signed-in redirect to the home controller
        if(Auth::instance()->logged_in()!= 0)
        {
            Request::initial()->redirect($this->redirect_to);
        }

        $content = View::factory($this->view_path);

        // If there is a post and $_POST is not empty
        if ($_POST)
        {
            // Check Auth
            $status = Auth::instance()->login($_POST['username'], $_POST['password']);

            // If the post data validates using the rules setup in the user model
            if ($status)
            {
                Request::initial()->redirect($this->redirect_to);
            }
            else
            {
                $content->error = true;
            }
        }

        $this->response->body($content);
	}
    
    
	public function action_signout()
	{
		Auth::instance()->logout();

        //redirect to the home controller
        Request::initial()->redirect($this->signout_to);
	}
    
    
   /**
    * Redirect to login action
    */
    public function action_index()
    {
        $this->action_signin();
    }
    
    
    public function action_create($login = null, $password = null)
    {
        $user = Model::factory('user');
        $user->username = 'jwest';
        $user->password = 'wanna1';
        $user->email = 'temp@jwest.pl';
        $user->save();
        
        $login_role = new Model_Role(array('name' =>'login'));
        $user->add('roles',$login_role);        
        
        Request::initial()->redirect($this->signout_to);
    }

    
} // System_Auth
