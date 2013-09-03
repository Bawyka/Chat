<?php defined('SYSPATH') or die('No direct script access.');

class Model_User extends ORM
{

	public function Init( $s )
	{
	
		$user = ORM::factory('user');
		$user->sid = $s;
		$user->status = "w";
		$user->handle = '';
		$user->save();
	
	}
	
	public function CheckConnection( $s )
	{
	
		$user1 = ORM::factory('user');
		$user1->where('sid','=',$s)->find();
		
		if ($user1->loaded() and !empty($user1->handle) and $user1->status=="c")
		{
		
			$user2 = ORM::factory('user');
			$user2->where('handle','=',$s)
				  ->where('status','=','c')
				  ->find();
				  
			if ($user2->loaded())
			{
			
				return $user2->id;
			
			}
			else 
			{
			
				return FALSE;
			
			}
			
		}
		else
		{
		
			return FALSE;
		
		}
	
	}
	
	public function ChangeStatus( $s,$st )
	{
	
		$user = ORM::factory('user');
		$user->where('sid','=',$s)->find();
		if ($user->loaded())
		{
			
			$user->status = $st;
			$user->update();
		
		}
		else
		{
		
			return FALSE;
		
		}
	
	}
	
	public function BreakConnection( $s, $h )
	{
	
		$user1 = ORM::factory('user');
		$user1->where("sid","=",$s)->find();
		$user1->handle = "";
		$user1->status = "s";
		$user1->update();
		
		$user2 = ORM::factory('user');
		$user2->where("handle","=",$s)->find();
		$user2->handle = "";
		$user2->status = "s";
		$user2->update();
	
	}
	
	public function GetWhoFound( $s )
	{
	
		$user = ORM::factory('user');
		$user->where("sid","<>",$s)
			  ->where("handle","=",$s)
			  ->where("status","=","f")
			  ->find();
			  
		if ($user->loaded())
		{
		
			return $user->sid;
		
		}
		else
		{
		
			return FALSE;
		
		}
	
	}
	
	public function GetWhoSearch( $s )
	{
	
		$user = ORM::factory('user');
		$user->where("status","=","s")
			 ->where("sid","<>",$s)
			 ->find();
			  
		if ($user->loaded())
		{
		
			return $user->sid;
		
		}
		else
		{
		
			return FALSE;
		
		}
	
	}
	
	public function SetConnection( $s, $h )
	{
	
		$user1 = ORM::factory('user');
		$user1->where('sid','=',$s)->find();
		$user1->status="c";
		$user1->handle=$h;
		$user1->update();
		
		$user2 = ORM::factory('user');
		$user2->where('sid','=',$h)->find();
		$user2->status="c";
		$user2->handle=$s;
		$user2->update();
		
		if ($user1->CheckConnection($s)){
		
			$session = Session::instance();
			$session->set('lastmod','');
		
			return TRUE;
		
		}
		else
		{
		
			return FALSE;
		
		}
	
	}

}