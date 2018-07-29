<?php 
/**
 * 
 */
namespace model;
class user 
{
	protected $table;
	function __construct($db)
	{
		$this->table = $db->table('users');
	}
	function userAuth($login,$password){
		$user = $this->table->where('login',$login)->first();
		if(isset($user->login)) {
			if(password_verify($password,$user->senha)) {
				return true;
			}else {
				return false;
			};
			
		} 
	}
}