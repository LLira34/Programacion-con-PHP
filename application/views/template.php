<?php namespace views;
	
	$template = new Template();
	
	class Template{
		public function __construct(){
			
?>
			
			<!DOCTYPE html>
			<html lang="es">
				<head>
					<?php session_start();?>
					<meta charset="utf-8">
					<link rel="shortcut icon" type="image/x-icon" href="views/template/images/favicon.ico">
					<title>Facultad de Enfermería</title>
					
					<!-- Stylesheets -->
					<link rel="stylesheet" type="text/css" href="views/template/css/bootstrap.css">
					<link rel="stylesheet" type="text/css" href="views/template/css/bootstrap.min.css">
					<link rel="stylesheet" type="text/css" href="views/template/css/main.css">
					<link rel="stylesheet" type="text/css" href="views/template/css/login.css">
					
					<!-- Stylesheets tables -->
					<link rel="stylesheet" type="text/css" href="views/template/css/dataTables.bootstrap4.min.css">
					
					<!-- Stylesheets calendar -->
					<link href="views/template/dist/css/datepicker.min.css" rel="stylesheet" type="text/css">
					
					<!-- Stylesheets login -->
					<link href="views/template/css/overhang.min.css" rel="stylesheet" type="text/css">
					
					<!-- Validations -->
					<script src="views/template/js/validate_login.js"></script>
					<script src="views/template/js/validate_paciente.js"></script>
				</head>
				
				<body>
					<?php include "header_nav.php"; ?>
					
					<div class="container"> <!-- Div container -->	
						<div id="msg" class="message">
							<div>
								<div class="Icon"><img id="loginImg" src="views/template/images/warning2.png" alt="Smiley face"></div>
								<br />
								<h2><strong>Advertencia!</strong></h2>
								<br />
								<p id="txtMsg"><strong>Error</strong></p>
							</div>
						</div>
					
	<?php
	
		} // End Contruct

		public function __destruct(){
			
	?>
			
						<?php include "footer.php"; ?>
						
						<!-- javascrip, jquery, etc... -->
						<script src="views/template/js/jquery-3.3.1.slim.min.js" ></script>
						<script src="views/template/js/popper.min.js" ></script>
						<script src="views/template/js/bootstrap.min.js" ></script>
						<script src="views/template/js/jquery-3.3.1.min.js"></script>
						
						<!-- Calculate imc js -->
						<script src="views/template/js/imc.js"></script>
						
						<!-- Get id -->
						<script src="views/template/js/jquery.min.js"></script>
						<script src="views/template/js/data_ocupation.js"></script>
						<script src="views/template/js/data_locality.js"></script>
						<script src="views/template/js/data_municipality.js"></script>
						<script src="views/template/js/data_patient.js"></script>
						
						<!-- Plugins login js -->
						<script src="views/template/js/app.js"></script>
						<script src="views/template/js/overhang.min.js"></script>
						<script src="views/template/js/jquery-ui.min.js"></script>
						
						<!-- Plugins tables js -->
						<script src="views/template/js/jquery.dataTables.min.js"></script>
						<script src="views/template/js/dataTables.bootstrap4.min.js"></script>
						<script src="views/template/js/pagination.js"></script>
	
						<!-- Plugin calendar js -->
						<script src="views/template/dist/js/datepicker.js"></script>
						<script src="views/template/dist/js/datepicker.min.js"></script>
						<script src="views/template/dist/js/i18n/datepicker.es.js"></script>
						
					</div> <!-- Fin del div container -->
				</body>
			</html>
			
	<?php  
	
		} // End Destruct
		
	} // End Class
	
?>