<?php

/**
 * default.php
 *
 * default application controller
 *
 * @package		TinyMVC
 * @author		Monte Ohrt
 */

class Home_Controller extends TinyMVC_Controller
{
  function index()
  {
  	$this->view->display('home/index');
  }
}

?>
