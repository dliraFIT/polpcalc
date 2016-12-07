<?php
function invoke($controlador,$accion,$params = array())
	{
		
		ob_start();
		/* execute controller action */
		$controller_class = $controlador.'_Controller';
		$controller_file = "{$controlador}.php";
		include_once(TMVC_MYAPPDIR."/controllers/".$controller_file);
		/* see if controller class exists */
		/* instantiate the controller */
	
		$controller = new $controller_class(true);
		$_POST = array_merge($_POST,$params);
		include('config_autoload.php');
		if(!empty($config['libraries']))
		{
			
			foreach($config['libraries'] as $library){
				if(is_array($library))
					$controller->load->library($library[0],$library[1]);
					else
						$controller->load->library($library);
			}
		}
		$controller->{$accion}();
		
		$output = ob_get_contents();
		ob_end_clean();
		
		return $output;
}
?>