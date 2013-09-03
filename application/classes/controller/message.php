<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Message extends Controller {

	public function action_index()
	{
	
		$session = Session::instance();
		
		$post = $this->request->post();

		$user = ORM::factory('user');
		$user->where('sid','=',$session->id())->find();
		
		if ($user->loaded())
		{
		
			$user2 = ORM::factory('user');
			$user2->where('handle','=',$session->id())->find();
			$user2->chat = $post["msg"];
			$user2->update();
			
			echo "1";
		
		}
		
	}
	
}