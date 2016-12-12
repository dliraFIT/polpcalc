<?php

/**
* mantenedor.php
*
* controlador para la pagina de la calculadora
*
* @package		polpaico/controllers
* @author		Benjamin La Madrid
*/

class Calculadora_Controller extends TinyMVC_Controller
{
	function index()  { $this->view->display('calculadora/index'); }
}
?>