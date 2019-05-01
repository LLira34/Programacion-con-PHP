<?php 
	include("header.php");
?>

<div class="container"> <!-- container -->
	
	<div class="table-responsive">
        <table class="table display example">
			<thead>
				<tr class="table-primary">
					<th>No. Expediente</th>
					<th>Nombre</th>
					<th>Terapeuta</th>
					<th>Fecha de inicio</th>
					<th>Fecha de fin</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					foreach ($listCitas as $calendar) {
				?>
						<tr>
							<td><?php echo $calendar->getTitle(); ?></td>
							<td><?php echo $calendar->getBody(); ?></td>
							<td><?php echo $calendar->getIdTerapeuta(); ?></td>
							<td><?php echo $calendar->getStartNormal(); ?></td>
							<td><?php echo $calendar->getEndNormal(); ?></td>
						</tr>
				<?php 
					} 
				?>
			</tbody>
        </table>
	</div>  
	
</div> <!-- container -->