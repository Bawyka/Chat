<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Base {

	public function action_index()
	{
		$view = View::factory('main');
		$this->template->content = $view;
	}

} // End Welcome
