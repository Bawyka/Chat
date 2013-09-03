<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Chat extends Controller {

	public function action_index()
	{
	
		$session = Session::instance();

		$user = ORM::factory('user');
		$user->where('sid','=',$session->id())->find();
		
		if ($user->loaded())
		{
		
			if ($user->chat != $session->get('lastmod'))
			{
			
				$session->set('lastmod',$user->chat);
			
				echo $user->chat;
			
			}
		
		}
		
	}
	
}