<?php  
	/**
	* Connection to database
	* @author: Team Rocket
	* @version 1.0
	*/

	class Db{
		private static $instance = NULL;
		
		function __construct(){}

		public static function getConnect(){
			if (!isset(self::$instance)) {
				$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
				self::$instance = new PDO('mysql:host=localhost;dbname=bd_clinica', 'root', '', $pdo_options);
			}
			return self::$instance;
		}
	} 
	
	// Calendar code
	date_default_timezone_set("America/Mexico_City");
	
	define( "__LOCALHOST__", "http://localhost:8080/application/views/calendar" );
	
	function autoload($class) {
		include "CalendarDAO.php";
	}

	spl_autoload_register('autoload');