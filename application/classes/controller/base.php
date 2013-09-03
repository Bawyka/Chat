<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Base extends Controller_Template {

	public $template = "main";
	
	public function before()
	{
		parent::before();
		
		$this->template->styles  = array('style','mystyle');
		$this->template->scripts = array('jquery-1.8.2.min','core');
	}

} // End Base
