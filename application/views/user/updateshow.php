<div class="container"> <!-- container -->
	
	<!-- Formulario de registro --> 
	<form action="?controller=user&&action=update" method="POST">
		<input type="hidden" name="id" value="<?php echo $user->getId() ?>" >
		
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="">Clave Usuario: </label>
				<input type="text" class="form-control" name="cveUsu" id="cveUsu" value="<?php echo $user->getCveUsu(); ?>">
			</div>
			<div class="form-group col-md-6">
				<label for="">Contraseña: </label>
				<input type="text" class="form-control" name="pasUsu" id="pasUsu" value="<?php echo $user->getPasUsu(); ?>">
			</div>
		</div>
		
		<div class="form-row">
			<div class="form-group col-md-3">
				<label for="">Nombre Usuario: </label>
				<input type="number" class="form-control" name="numUsu" id="numUsu" value="<?php echo $user->getNomUsu(); ?>">
			</div>
			<div class="form-group col-md-3">
				<label for="">Rol</label>
				<input type="text" class="form-control" name="rol" id="rol" value="<?php echo $user->getRol(); ?>">
			</div>
		</div>
		
		<button type="submit" onclick="return validateUser();" class="btn btn-primary">Guardar</button>
		<button type="button" onclick="limpiar();" class="btn btn-warning">Limpiar</button>
	</form>
	
</div> <!-- container -->