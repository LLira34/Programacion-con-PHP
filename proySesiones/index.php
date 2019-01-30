<!doctype html>
<html lang="es">
	<head>
		<meta charset="utf-8" />
		<title>Sesiones con PHP</title>
		<style>
			form{
				margin: 0 auto;
				text-align: center;
				width: 400px;
			}
			span{
				color: #F00;
				font-size: 2em;
			}
		</style>
	</head>
	<body>
		<form name="autentificacion_frm" action="control.php" method="post" enctype="application/x-www-form-urlencode">
			<?php
				error_reporting(E_ALL ^ E_NOTICE);
				if($_GET["error"]=="si"){
					echo "<script type=\"text/javascript\">alert('Verifica tus datos'); </script>";
				}else{
					echo 'Introduce tus datos';
				}
			?>
			<br /><br />
			Usuario:<input type="text" name="usuario_txt" />
			<br /><br />
			Password:<input type="password" name="password_txt" />
			<br /><br />
			<input type="submit" name="entrar_btn" value="Entrar" />
		</form>
	</body>
</html>