<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Next extends Controller {

	public function action_index()
	{
		$session = Session::instance();
		
		$user = ORM::factory('user');
		
		$friend = $user->CheckConnection($session->id());
		
		if (!empty($friend))
		{ 
			$user->BreakConnection($session->id(),$friend);
		} 
		
		
		$found = $user->GetWhoFound($session->id());
		
		if (!empty($found) and $found!==FALSE)
		{
		
			if($user->SetConnection($session->id(), $found))
			{
			
				echo "1";
			
			}
			else
			{
			
				echo "0";
			
			}
		
		}
		else
		{
		
			$user->ChangeStatus($session->id(),'s');
				
			$search = $user->GetWhoSearch($session->id());
			
			if (!empty($search) and $search!==FALSE)
			{
			
				if ($user->SetConnection($session->id(), $search))
				{
				
					echo "1";
					
				}
				else
				{
				
					echo "0";
				
				}
			
			}
			else
			{
			
				echo "0";
			
			}
		
		}
		
	}
	
}