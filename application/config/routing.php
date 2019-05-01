<?php 
	/**
	* File that declare the controllers and the actions for each one of the controllers
	* Is responsible for sending the appropriate driver and the action that come from the index.php file
	* @author: Team Rocket
	* @version 1.0
	*/
 
	$controllers = array(
		'paciente'    =>  ['index', 'register', 'save', 'show', 'updateshow', 'update', 'delete', 'search', 'error'],
		'diagnostico' =>  ['index', 'register', 'save', 'show', 'updateshow', 'update', 'delete', 'search', 'error'],
		'user'        =>  ['index', 'login', 'getUser', 'recepcion', 'user', 'exit', 'ensain', 'coordinador', 'admon', 
						   'register', 'save', 'show', 'updateshow', 'update', 'delete', 'search', 'error'],
		'coordinador' =>  ['showPacientes', 'showCitas'],
		'enfermeria'  =>  ['register']
	);

	if (array_key_exists($controller, $controllers)) {
		if (in_array($action, $controllers[$controller])) {
			call($controller, $action);
		}else {
			call('user', 'error');
		}
	}else {
		call('user', 'error');
	}

	function call($controller, $action){
		require_once 'controllers/' . $controller . 'Controller.php';
		
		switch ($controller) {
			case 'user':
				require_once 'models/User.php';
				$controller = new UserController();
				break;
			case 'paciente':
				require_once 'models/Paciente.php';
				$controller = new PacienteController();
				break;
			case 'diagnostico':
				require_once 'models/Diagnostico.php';
				$controller = new DiagnosticoController();
				break;
			case 'coordinador':
				require_once 'models/Paciente.php';
				$controller = new CoordinadorController();
				break;
			case 'enfermeria':
				//require_once 'models/Paciente.php';
				$controller = new EnfermeriaController();
				break;
			default:
				# code...
				break;
		}
		
		$controller->{$action}();
	}