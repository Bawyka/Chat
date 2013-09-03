<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Base extends Controller_Template {

	public $template = "main";

	public function before()
	{
		parent::before();
		
		$this->template->content = "";
		
		$this->template->styles = array('style');
        $this->template->scripts = array('jquery-1.8.2.min','driver');
		
		// Get the session instance
		$session = Session::instance();

		$user = ORM::factory('user');
		
		$user->where('sid','=',$session->id())->find();
		
		if (!$user->loaded())
		{
		
			$user->init($session->id());
			
		}
		
	}

} // End Welcome
