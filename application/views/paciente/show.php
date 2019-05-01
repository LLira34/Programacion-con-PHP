<?php
	include("header.php");
?>

<div class="container"> <!-- container -->

	<div class="table-responsive">
        <table class="table display example">
			<thead>
				<tr class="table-primary">
					<th>No. Expediente</th>
					<th>Fecha</th>
					<th>Nombre</th>
					<th>Fecha de nacimiento</th>
					<th>Edad</th>
					<th>Genero</th>
					<th>Acción</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					foreach ($listPacientes as $paciente) {
				?>
						<tr>
							<td><?php echo $paciente->getNumExpediente(); ?></td>
							<td><?php echo $paciente->getFecha(); ?></td>
							<td><?php echo $paciente->getNombre(); ?></td>
							<td><?php echo $paciente->getFechaNac(); ?></td>
							<td><?php echo $paciente->getEdad(); ?></td>
							<td><?php echo $paciente->getGenero(); ?></td>
							<td>
								<a class="btn btn-primary" href="?controller=paciente&&action=updateshow&&idPaciente=<?php echo $paciente->getId() ?>">Revisar</a>
								<a class="btn btn-danger" href="?controller=paciente&&action=delete&&id=<?php echo $paciente->getId() ?>">Eliminar</a>
							</td>
						</tr>
				<?php 
					} 
				?>
			</tbody>
        </table>
	</div> 	
	
</div> <!-- container -->  
