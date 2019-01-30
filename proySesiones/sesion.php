<?php
	session_start();//Iniciar una nueva sesión o reanudar la existente
	
	if(!$_SESSION["autentificado"])
	{
		header("Location: salir.php");
	}
?>