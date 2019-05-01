<?php 

	while ($db_file = $select -> fetch(PDO::FETCH_ASSOC)): 
?>
		<div>
			<img id="log" src="components/bootstrap-calendar/img/ensain.png" alt="Smiley face">
		</div>
		<center><strong>TEL. 1921200 | EXT. 5725</strong></center>

		<strong>Fecha de inicio:</strong> <?php echo $db_file["start_normal"]; ?><br />
		<strong>Fecha de finalización:</strong> <?php echo $db_file["end_normal"]; ?><br />
		<strong>Nombre: </strong> <?php echo $db_file["body"]; ?> <br />
		<strong>Terapeuta: </strong> <?php echo $db_file["nombre_completo"]; ?> <br /><br />
			
		<ul class="fa-ul">
			<li><i class="fa-li fa fa-check-square"></i>Llegar 10 minutos antes</li>
			<li><i class="fa-li fa fa-check-square"></i>Presentarse con ropa comoda</li>
			<li><i class="fa-li fa fa-check-square"></i>Traer sus estudios en case de contar con ellos</li>
			<li><i class="fa-li fa fa-check-square"></i>Traer una copia del IFE o INE</li>
			<li><i class="fa-li fa fa-check-square"></i>Sino va a asistir a su valoración, 
			favor de cancelar su cita con tres dias de anticipación</li>
		</ul>
		
		<p>
			<a href="index.php?action=delete&id=<?php echo $db_file["id"]; ?>" 
			class="btn btn-danger" role="button">Eliminar</a>
		</p>

<?php 
	endwhile; 
?>