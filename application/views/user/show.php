<div class="container"> <!-- container -->

	<div class="table-responsive">
        <table class="table display example">
			<thead>
				<tr class="table-primary">
					<th>Clave</th>
					<th>Contraseña</th>
					<th>Nombre completo</th>
					<th>Rol</th>
					<th>Acción</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					foreach ($listUsers as $user) {
				?>
						<tr>
							<td><?php echo $user->getCveUsu(); ?></td>
							<td><?php echo $user->getPasUsu(); ?></td>
							<td><?php echo $user->getNomUsu(); ?></td>
							<td><?php echo $user->getRol(); ?></td>
							<td>
								<a class="btn btn-danger" href="?controller=user&&action=delete&&id=<?php echo $user->getId() ?>">Eliminar</a>
								<a class="btn btn-primary" href="?controller=user&&action=updateshow&&idUser=<?php echo $user->getId() ?>">Revisar</a>
							</td>
						</tr>
				<?php 
					} 
				?>
			</tbody>
        </table>
	</div> 	
	
</div> <!-- container -->  
