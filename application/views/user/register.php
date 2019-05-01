<div class="container"> <!-- container -->
	<br />
	
	<!-- Formulario de registro --> 
	<form action="?controller=user&&action=save" method="POST">
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="">Clave Usuario: </label>
				<input type="text" class="form-control" name="cveUsu" id="cveUsu" placeholder="Escriba clave" required>
			</div>
			<div class="form-group col-md-6">
				<label for="">Contraseña: </label>
				<input type="password" class="form-control" name="pasUsu" id="pasUsu" placeholder="Escriba contraseña" required>
			</div>
		</div>
		
		<div class="form-row">
			<div class="form-group col-md-3">
				<label for="">Nombre Usuario: </label>
				<input type="text" class="form-control" name="nomUsu" id="nomUsu" placeholder="Escriba nombre completo" required>
			</div>
			<div class="form-group col-md-3">
				<label for="">Rol</label>
				<select id="rol" name="rol" class="form-control" required>
					<option value="">Seleccione una opción</option>
					<option value="ADMINISTRADOR">ADMINISTRADOR</option>
					<option value="FISIOTERAPEUTA">FISIOTERAPEUTA</option>
					<option value="ENSAIN">ENSAIN</option>
					<option value="COORDINADOR">COORDINADOR</option>
					<option value="RECEPCION">RECEPCION</option>
				</select>
			</div>
		</div>
		
		<button type="submit" onclick="return validateUser();" class="btn btn-primary">Guardar</button>
		<button type="button" onclick="limpiar();" class="btn btn-warning">Limpiar</button>
	</form>
	
</div> <!-- container -->