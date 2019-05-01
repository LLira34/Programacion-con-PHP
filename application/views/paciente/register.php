<?php 
	include("header.php");
?>
	
<div class="container"> <!-- container -->

	<!-- Formulario de registro --> 
	<form action="?controller=paciente&&action=save" method="POST">
		<h5 class="text-center"><strong>Registro de pacientes</strong></h5>
		<hr>
	
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="">Fecha</label>
				<input type="text" class="form-control" name="fecha" id="fecha" placeholder="Fecha" value="<?php echo date("d/m/Y");?>" readonly="readonly">
			</div>
		</div>
		
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="">Nombre completo</label>
				<input type="text" class="form-control" name="nombre" id="nombre" placeholder="Escriba nombre completo" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
			</div>
			<div class="form-group col-md-6">
				<label for="">Fecha de nacimiento</label>
				<input type="text" class="form-control datepicker-here" name="fecha_nac" id="fecha_nac" data-language='es' placeholder="SELECCIONE FECHA DE NACIMIENTO" pattern="\d{1,2}/\d{1,2}/\d{4}" required>
			</div>
		</div>
		
		<div class="form-row">
			<div class="form-group col-md-3">
				<label for="">Edad</label>
				<input type="number" class="form-control" name="edad" id="edad" placeholder="ESCRIBA EDAD" required>
			</div>
			<div class="form-group col-md-3">
				<label for="">Genero</label>
				<select id="genero" name="genero" class="form-control custom-select" required>
					<option value="">Seleccione una opción</option>
					<option value="FEMENINO">FEMENINO</option>
					<option value="MASCULINO">MASCULINO</option>
				</select>
			</div>
		</div>
		
		<button type="submit" onclick="return validatePaciente();" class="btn btn-primary">Guardar</button>
		<button type="button" onclick="remove();" class="btn btn-warning">Limpiar</button>
	</form>
	
</div> <!-- container -->