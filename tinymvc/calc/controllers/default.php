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
  		if($this->app->authenticate($this))
  			header("Location: /calculadora/template/index?go=home.index");
  	} catch (Exception $e) {
  	}
  	if(isset($this->params["err"])){
  		$this->view->assign('err',$this->params["err"]);
  	}
  	$this->view->display('login/login');
  }
  function authenticate()
  {
  	if($this->app->authenticate($this)){
  		header("Location: /calculadora/template/index?go=home.index");
  	}
  }
}

?>
