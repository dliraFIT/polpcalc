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
    $this->view->display('template/pages_export');
  }
  function headerIncludes()
  {
  	$this->view->display('template/header_includes');
  }
  function sideBarHeader()
  {
  	$this->view->display('template/side_bar_header');
  }
  function sideBarMenu()
  {
  	$this->view->display('template/side_bar_menu');
  }
  function header()
  {
  	$this->view->display('template/header');
  }
  function topMenu()
  {
  	$this->view->display('template/top_menu');
  }
  function footer()
  {
  	$this->view->display('template/footer');
  }
  function userInfo()
  {
  	$this->view->display('template/user_info');
  }
  function notifications()
  {
  	$this->view->display('template/notification');
  }
  function content()
  {
  	echo "TEST";
  }
}

?>
