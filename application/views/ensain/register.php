<div class="container"> <!-- container -->
	<br />
	
	<!-- Formulario de registro --> 
	<form action="?controller=enfermeria&&action=save" method="POST">
		<h5 class="text-center"><strong>Hoja de evolución</strong></h5>
		<hr>
		
		<div class="form-group col-md-12 text-center">
			<!-- Fisioterapia -->
			<div class="custom-control custom-radio custom-control-inline">
				<input type="radio" class="custom-control-input" id="fisioterapia" name="inlineDefaultRadiosExample">
				<label class="custom-control-label" for="fisioterapia">Fisioterapia</label>
			</div>

			<!-- Medicina -->
			<div class="custom-control custom-radio custom-control-inline">
				<input type="radio" class="custom-control-input" id="medicina" name="inlineDefaultRadiosExample">
				<label class="custom-control-label" for="medicina">Medicina</label>
			</div>

			<!-- Enfermería -->
			<div class="custom-control custom-radio custom-control-inline">
				<input type="radio" class="custom-control-input" id="enfermeria" name="inlineDefaultRadiosExample">
				<label class="custom-control-label" for="enfermeria">Enfermería</label>
			</div>
			
			<!-- Psicología -->
			<div class="custom-control custom-radio custom-control-inline">
				<input type="radio" class="custom-control-input" id="psicologia" name="inlineDefaultRadiosExample">
				<label class="custom-control-label" for="psicologia">Psicología</label>
			</div>

			<!-- Nutrición -->
			<div class="custom-control custom-radio custom-control-inline">
				<input type="radio" class="custom-control-input" id="nutricion" name="inlineDefaultRadiosExample">
				<label class="custom-control-label" for="nutricion">Nutrición</label>
			</div>
		</div>
		
		<div class="form-row">
			<div class="form-group col-md-4">
				<label>No. Expediente</label>
				<input type="text" class="form-control" name="numExpediente" id="numExpediente">
			</div>
			<div class="form-group col-md-8">
				<label>Paciente</label>
				<input type="text" class="form-control" name="nombre" id="nombre" readonly="readonly">
			</div>
		</div>
		
		<div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>Hora - Fecha</th>	
						<th>Observaciones</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="20%"><input type="text" name="frecuencia" class="form-control datepicker-here" data-language='es' readonly="readonly"></td>
						<td><textarea class="form-control" id="" rows="3"></textarea></td>
					</tr>
					<tr>
						<td width="20%"><input type="text" name="frecuencia" class="form-control datepicker-here" data-language='es' readonly="readonly"></td>
						<td><textarea class="form-control" id="" rows="3"></textarea></td>
					</tr>
					<tr>
						<td width="20%"><input type="text" name="frecuencia" class="form-control datepicker-here" data-language='es' readonly="readonly"></td>
						<td ><textarea class="form-control" id="" rows="3"></textarea></td>
					</tr>
					<tr>
						<td width="20%"><input type="text" name="frecuencia" class="form-control datepicker-here" data-language='es' readonly="readonly"></td>
						<td><textarea class="form-control" id="" rows="3"></textarea></td>
					</tr>
					<tr>
						<td width="20%"><input type="text" name="frecuencia" class="form-control datepicker-here" data-language='es' readonly="readonly"></td>
						<td><textarea class="form-control" id="" rows="3"></textarea></td>
					</tr>
				</tbody>
			</table>
		</div>
		
		<button type="submit" onclick="return validateHoja();" class="btn btn-primary">Guardar</button>
		<button type="button" onclick="remove();" class="btn btn-warning">Limpiar</button>
	</form>
	
</div> <!-- container -->