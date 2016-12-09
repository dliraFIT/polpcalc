<?php

/**
 * default.php
 *
 * default application controller
 *
 * @package		TinyMVC
 * @author		Monte Ohrt
 */

class Default_Controller extends TinyMVC_Controller
{
  function index()
  {
  	try {
  		$this->view->assign('err',$this->params["err"]);
  	} catch (Exception $e) {
  	}
  	$this->view->display('login/login');
  }
  function authenticate()
  {
  	$this->load->model('Profile_Model','user');
  	$hash = hash('sha256', $this->params["password"]);
  	$user = $this->user->get_user($this->params["username"],$hash);
  	print_r($user);
  	//$this->app->authenticate($this);
  	//TODO Logica de authenticacion
  	/* cuando este ok 
  	if($this->app->authenticate($this)){
  		header('Location: /calculadora/template/index?go=home.index');
  	} else {
  		header('Location: http://localhost/calculadora/?err=Hay un problema con tus credeciales');
  	}
  	*/
  	
  }
}

?>
