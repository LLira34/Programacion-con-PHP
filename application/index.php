<?php  
	
	// System Schedule
	date_default_timezone_set("America/Mexico_City");
	
	require_once 'data/Connection.php';
	
	if (isset($_GET['controller']) && isset($_GET['action'])) {
		$controller = $_GET['controller'];
		$action = $_GET['action'];
	}else {
		$controller = 'user';
		$action = 'index';
	}
	
	require_once 'views/template.php';
	require_once 'config/routing.php';
