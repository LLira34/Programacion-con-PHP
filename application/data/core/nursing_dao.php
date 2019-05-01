<?php
	/**
	* Method to complete the name field according to your file number
	* @author: Team Rocket
	* @version 1.0
	*/
	
	if(!isset($_POST["numExpediente"])) exit("No se recibio el valor a buscar"); 
	require_once '../Connection.php';
	
	function search(){
		$db = Db::getConnect();
		$numExp = $_POST["numExpediente"];
		$result = ("SELECT nombre FROM paciente WHERE num_expediente = '$numExp'"); 
		
		$execute = $db->prepare($result);
		$execute->execute();
		$row = $execute->fetch(PDO::FETCH_ASSOC);
		
		if($row == true){
			$nombre = $row['nombre'];
			echo $nombre;
		}else {
			$message = "¡No se encontraron resultados!";
			echo $message;
		}
	}
	search();