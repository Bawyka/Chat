<?php defined('SYSPATH') or die('No direct script access.');
// Controller Welcome
class Controller_Welcome extends Controller_Base {

	public function action_index()
	{
		
		$post = $this->request->post();
		
		if (!$post)
		{
		
			$view = View::factory('entrance');
		
		}
		else
		{
		
			// Проверка имени пользователя
			$valid = Validation::factory($post);
			$valid->rule('guest','not_empty');
			$valid->rule('guest','max_length',array(':value',7));
			$valid->rule('guest','min_length',array(':value',4));
		
			$view = View::factory('chat');
		
		}
		
		$this->template->content = $view;
		
	}

} // End Welcome
