<?php

/**
* mantenedor.php
*
* controlador para la pagina de las ofertas
*
* @package		polpaico/controllers
* @author		Benjamin La Madrid
*/

class Ofertas_Controller extends TinyMVC_Controller
{
	function index()  { $this->view->display('ofertas/index'); }
}
?>