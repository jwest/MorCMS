<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Dashboard extends Controller_System_Admin {

	public function action_index()
	{
		$this->response->body('hello, world!2');
	}

} // End Welcome
