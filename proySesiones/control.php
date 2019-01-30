<?php
	if($_POST["usuario_txt"]=="UTNG" && $_POST["password_txt"]=="1234"){
		//inicio la sesión
		session_start();//Iniciar una nueva sesión o reanudar la existente
		
		//Declaro mis variables de sesión
		$_SESSION["autentificado"] = true;//El soporte para sesiones permite almacenar los datos entre peticiones en el array superglobal $_SESSION
		$_SESSION["usuario"] = $_POST["usuario_txt"];
		
		header("Location: archivo-protegido.php");//header() es usado para enviar encabezados HTTP sin formato
	}else{
		header("Location: index.php?error=si");
	}
?>