<?php

/**
* mantenedor.php
*
* controlador para las paginas del submenu lateral de mantenedores
*
* @package		polpaico/controllers
* @author		Benjamin La Madrid
*/

class Mantenedor_Controller extends TinyMVC_Controller
{
	//Elementos del Submenu
	function plantas()  { $this->view->display('mantenedor/plantas'); }
	function ofertas()  { $this->view->display('mantenedor/ofertas'); }
	function usuarios() { $this->view->display('mantenedor/usuarios'); }

	//Otras Plantillas
	function cargarFormaSubida() {
		$this->view->display('mantenedor/upload');
	}
	function subirArchivo() {
		$this->load->library("upload");
		$this->upload->saveAsTemp('file');
	}
}

?>