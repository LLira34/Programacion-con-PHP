<?php
	include("header.php");
?>

<div class="container">
	<h5 class="text-center"><strong>Revisar paciente</strong></h5>
	<hr>

	<form action="?controller=paciente&&action=update" method="POST">
		<input type="hidden" name="id" value="<?php echo $paciente->getId() ?>" >
		
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="">No. Expediente</label>
				<input type="text" class="form-control" name="num_expediente" id="num_expediente" placeholder="No. Expediente" value="<?php echo $paciente->getNumExpediente(); ?>" readonly="readonly">
			</div>
			<div class="form-group col-md-6">
				<label for="">Fecha</label>
				<input type="text" class="form-control" name="fecha" id="fecha" placeholder="Fecha" value="<?php echo $paciente->getFecha(); ?>" readonly="readonly">
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="">Nombre completo</label>
				<input type="text" class="form-control" name="nombre" id="nombre" placeholder="Escriba nombre completo" value="<?php echo $paciente->getNombre(); ?>" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
			</div>
			<div class="form-group col-md-6">
				<label for="">Fecha de nacimiento</label>
				<input type="text" class="form-control" name="fecha_nac" id="fecha_nac" placeholder="Seleccione fecha de naciemiento" value="<?php echo $paciente->getFechaNac(); ?>" required>
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col-md-3">
				<label for="">Edad</label>
				<input type="text" class="form-control" name="edad" id="edad" placeholder="Escriba edad" value="<?php echo $paciente->getEdad(); ?>" required>
			</div>
			<div class="form-group col-md-3">
				<label for="">Genero</label>
				<input type="text" class="form-control" name="genero" id="genero" placeholder="Escriba genero" value="<?php echo $paciente->getGenero(); ?>" required>
			</div>
		</div>
		
		<button type="submit" class="btn btn-primary">Guardar</button>
	</form>
</div>