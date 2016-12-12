<?php

/**
 * default.php
 *
 * default application controller
 *
 * @package		TinyMVC
 * @author		Monte Ohrt
 */

class Template_Controller extends TinyMVC_Controller
{
	function index()
	{
		$modulo = (isset($this->params["go"]))?$this->params["go"]:"home.index";
		$this->view->assign("modulo",$modulo);
		$this->view->display('template/index');
	}
	  
	//Vista del Menu Lateral
	function headerIncludes()	{ $this->view->display('template/header_includes'); }
	function sideBarHeader()	{ $this->view->display('template/side_bar_header'); }
	function sideBarMenu()		{ $this->view->display('template/side_bar_menu'); }
	function header()			{ $this->view->display('template/header'); }
	function topMenu()			{ $this->view->display('template/top_menu'); }
	function footer()			{ $this->view->display('template/footer'); }
	function userInfo() 		{ $this->view->display('template/user_info'); }
	function notifications()	{ $this->view->display('template/notification');}
	function footerIncludes()	{ $this->view->display('template/footer_includes'); }
	
	//Acciones
	function logout(){ $this->app->deauthenticate($this); }
}

?>