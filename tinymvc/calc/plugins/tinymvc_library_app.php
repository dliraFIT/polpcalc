<?php
class TinyMVC_Library_App 
{
	function __construct() {
	
	}
	function authenticate($ctr){
		$hash = hash('sha256', $ctr->params["password"]);
		$user = $ctr->user->get_user($ctr->params["username"],$hash);		
		print_r($user);
		return true;
	}	
}
?>