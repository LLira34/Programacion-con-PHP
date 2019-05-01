<?php
	require_once "../../data/Connection.php"; 
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<link rel="shortcut icon" type="image/x-icon" href="components/bootstrap-calendar/img/favicon.ico">
		<title>Agenda de citas | SUAF</title>

		<script src="components/jquery/jquery.min.js"></script>
		<script src="components/bootstrap/js/bootstrap.min.js"></script>

		<link rel="stylesheet" href="components/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="components/bootstrap-calendar/css/calendar.min.css">
		<link rel="stylesheet" href="components/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css">
		<link rel="stylesheet" href="components/bootstrap/css/styles.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		<div class="container">
			<!-- Save quote -->
			<?php 
			$db = Db::getConnect();
			
			if (isset($_GET["action"]) && ($_GET["action"]=="save")):
			$evento = new CalendarDAO();
			$evento -> save($db);?>
		  
			<!-- Delete quote -->
			<?php elseif (isset($_GET["action"]) && ($_GET["action"]=="delete")):
			$evento = new CalendarDAO();
			$evento -> delete($db);?>
			
			<!-- Delete quote -->
			<?php elseif (isset($_GET["action"]) && ($_GET["action"]=="allTerapeutas")):
			$evento = new CalendarDAO();
			$evento -> allTerapeutas($db);?>

			<!-- Listing quotes -->
			<?php else: ?>
			<?php include_once "calendar.php"; ?>
			<?php endif; ?>
		</div>
		
		<script src="components/underscore/underscore-min.js"></script>
		<script src="components/jstimezonedetect/jstz.min.js"></script>
		<script src="components/bootstrap-calendar/js/language/es-ES.js"></script>
		<script src="components/bootstrap-calendar/js/calendar.js"></script>
		<script src="components/bootstrap-calendar/js/app.js"></script>
		<script src="components/moment/moment.min.js"></script>
		<script src="components/moment/locale/es.js"></script>
		<script src="components/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script> 
		<script src="components/js/data.js"></script>
		<script src="components/js/date_time.js"></script>
		<script src="components/js/data_auto.js"></script>
		<script src="components/js/jquery-3.3.1.min.js"></script>
		<script src="components/js/jquery.min.js"></script>
		<script src="components/js/timeout.js"></script>
	</body>
</html>

<?php $db = null; ?>

