<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Auth extends Controller_System_Auth {

    public $template = "admin/auth";
    
    protected $redirect_to = 'admin/dashboard';
    protected $signout_to = 'home/index';
    protected $view_path = 'admin/auth';

} // End Admin_Auth
