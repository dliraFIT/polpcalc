<?php
class TinyMVC_Library_App 
{
	private $urlnok = "/calculadora/";
	private $JWTKEY = "ASDF";
	private $COOKIE_NAME = "polpaico_cookie";
	private $aliveTime = 60000;
	function __construct() {
	
	}
	function authenticate($ctr){
		$ctr->load->model('Profile_Model','user');
		$cookieexist = false;
		try {
			$user = $ctr->jwt->decode($_COOKIE[$this->COOKIE_NAME],$this->JWTKEY);
			$cookieexist = true;
		} catch (Exception $e) {
			$hash = hash('sha256', $ctr->params["password"]);
			try {
				$loginfo = $ctr->user->get_login_info($ctr->params["username"],$hash);
				$user = $ctr->user->get_user($loginfo->usuario_user,$loginfo->usuario_pass_hash);
			} catch (Exception $e) {
				$user = array();
			}
		}
		if(count($user) !== 0){
			if(!$cookieexist){
				$token = $ctr->jwt->encode($user, $this->JWTKEY);
				setcookie($this->COOKIE_NAME, $token, time()+$this->aliveTime,'/');
				$_COOKIE[$this->COOKIE_NAME] = $token;
			}
		} else {
			$urlfinal = $this->urlnok."?err=Error en las credenciales.";
			header('Location: '.$urlfinal);
			die();
		}
		return true;		
	}	
	function deauthenticate($ctr){
			unset($_COOKIE[$this->COOKIE_NAME]);
			setcookie($this->COOKIE_NAME,"", time()-172800,'/');
			$urlfinal = $this->urlnok."Error en las credenciales.";
			header('Location: '.$this->urlnok);
			die();
	}
}
?>