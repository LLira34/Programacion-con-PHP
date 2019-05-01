<?php
	require_once("header.php");
?>

<div class="container"> <!-- container -->
	
	<div class="table-responsive">
        <table class="table display example">
			<thead>
				<tr class="table-primary">
					<th>Numero de expediente</th>
					<th>Nombre del paciente</th>
					<th>Primera valoración</th>
					<th>Inicio tratamiento</th>
					<th>Fecha de alta</th>
					<th>Acción</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					foreach ($listDiagnostico as $diagnostico) {
				?>
						<tr>
							<td><?php echo $diagnostico->getNumExpediente(); ?></td>
							<td><?php echo $diagnostico->getNombre(); ?></td>
							<td><?php echo $diagnostico->getPrimerVal(); ?></td>
							<td><?php echo $diagnostico->getInicioTto(); ?></td>
							<td><?php echo $diagnostico->getFechaAlt(); ?></td>
							<td>
								<a class="btn btn-primary" 
								href="?controller=diagnostico&&action=updateshow&&idDiagnostico=
								<?php echo $diagnostico->getId(); ?>">Revisar</a>
								<a class="btn btn-danger" 
								href="?controller=diagnostico&&action=delete&&id=
								<?php echo $diagnostico->getId(); ?>">Eliminar</a>
							</td>
						</tr>
				<?php 
					} 
				?>
			</tbody>
        </table>
	</div>  
	
</div> <!-- container -->





  