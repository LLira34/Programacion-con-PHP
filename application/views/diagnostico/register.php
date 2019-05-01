<?php 
  include("header.php");
?>

<div class="container"> <!-- container -->

	<!-- Formulario de registro --> 
	<form id="form" action="?controller=diagnostico&&action=save" method="POST">
		<h5 class="text-center"><strong>Datos generales</strong></h5>
		<hr>
		
		<!-- ========== Parte 1 ========== -->
		<div class="form-row">
			<div class="form-group col-md-4">
				<label>No. Expediente</label>
				<input type="text" class="form-control" name="numExpediente" id="numExpediente" placeholder="ESCRIBA EL NUMERO DE EXPEDIENTE">
			</div>
			<div class="form-group col-md-8">
				<label>Paciente</label>
				<input type="text" class="form-control" name="nombre" id="nombre" readonly="readonly">
			</div>
		</div>
		
		<div class="form-row">
			<div class="form-group col-md-4">
				<label class="control-label">Talla</label>
				<div class="input-group mb-2">
					<input class="form-control" name="talla" id="talla" placeholder="EJ. 1.70" required aria-label="Amount (to the nearest dollar)" type="text">
					<div class="input-group-append">
						<span class="input-group-text">cm</span>
					</div>
				</div>
			</div>
			<div class="form-group col-md-4">
				<label class="control-label">Masa</label>
				<div class="input-group mb-2">
					<input class="form-control" name="masa" id="masa" placeholder="EJ. 69" required aria-label="Amount (to the nearest dollar)" type="text">
					<div class="input-group-append">
						<span class="input-group-text">kg</span>
					</div>
				</div>				
			</div>
			<div class="form-group col-md-4">
				<label for="">IMC</label>
				<div class="input-group mb-2">
					<div class="input-group-prepend">
						<button type="button" onclick="return calculateIMC();" class="btn btn-outline-secondary">Calcular IMC</button>
					</div>
					<input type="text" class="form-control" name="imc" id="imc" readonly="readonly" required aria-label="" aria-describedby="basic-addon1">
				</div>
			</div>
		</div>
		
		<div class="form-row">
			<div class="form-group col-md-4 selector-ocupation">
				<label for="ocupacion">Ocupación</label>
				<select required class="form-control" name="ocupacion" id="ocupacion"></select>
			</div>
			<div class="form-group col-md-4">
				<label for="">Estado civil</label>
				<select class="form-control" name="edoCivil" id="edoCivil" required>
					<option value="">Eliga una opción...</option>
					<option value="SOLTERO">SOLTERO</option>
					<option value="DIVORCIADO">DIVORCIADO</option>
					<option value="CASADO">CASADO</option>
					<option value="VIUDO">VIUDO</option>
				</select>
			</div>
			<div class="form-group col-md-4">
				<label for="">Escolaridad</label>
				<input type="text" class="form-control" name="escolaridad" id="escolaridad" placeholder="INGRESE ESCOLARIDAD" 
				style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
			</div>
		</div>
		
		<div class="form-row">
			<div class="form-group col-md-4">
				<label for="">Domicilio actual</label>
				<input type="text" class="form-control" name="domicilio" id="domicilio" placeholder="INGRESE DOMICILIO" 
				style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
			</div>
			<div class="form-group col-md-4">
				<label for="">Colonia</label>
				<input type="text" class="form-control" name="colonia" id="colonia" placeholder="INGRESE COLONIA" 
				style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
			</div>
			<div class="form-group col-md-4 selector-locality">
				<label for="localidad">Localidad</label>
				<select required class="form-control" name="localidad" id="localidad"></select>
			</div>
		</div>
		
		<div class="form-row">	
			<div class="form-group col-md-4">
				<label for="">Codigo postal</label>
				<input type="number" class="form-control" name="cp" id="cp" placeholder="INGRESE CÓDIGO POSTAL" required>
			</div>
			<div class="form-group col-md-4 selector-municipality">
				<label for="municipio">Municipio</label>
				<select required class="form-control" name="municipio" id="municipio"></select>
			</div>
			<div class="form-group col-md-4">
				<label for="">Estado</label>
				<input type="text" class="form-control" name="estado" id="estado" placeholder="INGRESE ESTADO" 
				style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
			</div>
		</div>
		
		<div class="form-row">	
			<div class="form-group col-md-6">
				<label for="">Telefono de casa: 01(  )</label>
				<input type="number" class="form-control" name="telCasa" id="telCasa" placeholder="INGRESE TELEFONO DE CASA" required>
			</div>
			<div class="form-group col-md-6">
				<label for="">Celular</label>
				<input type="number" class="form-control" name="celular" id="celular" placeholder="INGRESE CELULAR" required>
			</div>
		</div>
		
		<div class="form-row">	
			<div class="form-group col-md-12">
				<label for="">Correo electronico</label>
				<input type="email" class="form-control" name="correo" id="correo" placeholder="INGRESE CORREO ELECTRONICO">
			</div>
		</div>
		
		<div class="form-row">	
			<div class="form-group col-md-6">
				<label for="">Avisar en caso de emergencia a:</label>
				<input type="text" class="form-control" name="aviso" id="aviso" 
				style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
			</div>
			<div class="form-group col-md-6">
				<label for="">Telefono</label>
				<input type="number" class="form-control" name="telefono" id="telefono" required>
			</div>
		</div>
		
		<div class="form-row">
			<div class="form-group col-md-4">
				<label for="">Fecha de primera valoración</label>
				<input type="text" class="form-control datepicker-here" name="primerVal" id="primerVal" 
				data-language='es' placeholder="SELECCIONE FECHA DE VALORACION" pattern="\d{1,2}/\d{1,2}/\d{4}" >
			</div>
			<div class="form-group col-md-4">
				<label for="">Fecha de inicio de tratamiento</label>
				<input type="text" class="form-control datepicker-here" name="inicioTto" id="inicioTto" 
				data-language='es' placeholder="SELECCIONE FECHA DE TRATAMIENTO" pattern="\d{1,2}/\d{1,2}/\d{4}">
			</div>
			<div class="form-group col-md-4">
				<label for="">Fecha de alta</label>
				<input type="text" class="form-control datepicker-here" name="fechaAlt" id="fechaAlt" 
				data-language='es' placeholder="SELECCIONE FECHA DE ALTA">
			</div>
		</div><br />
		
		<!-- ========== Parte 2 ========== -->
		<h5 class="text-center"><strong>Signos vitales</strong></h5>
		<hr>
		<div class="form-row">
			<div class="form-group col-md-6">
				<label>Frecuencia cardíaca:</label>
				<input type="text" class="form-control" name="freCardiaca" id="freCardiaca" placeholder="INGRESE FRECUENCIA CARDÍACA" 
				style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" >
			</div>
			<div class="form-group col-md-6">
				<label>Frecuencia respiratoria /SpO2:</label>
				<input type="text" class="form-control" name="freRespiratoria" id="freRespiratoria" placeholder="INGRESE FRECUENCIA RESPIRATORIA" 
				style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" >
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col-md-6">
				<label>Tensión arterial:</label>
				<input type="text" class="form-control" name="tensArterial" id="tensArterial" placeholder="INGRESE TENSIÓN ARTERIAL" 
				style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" >
			</div>
			<div class="form-group col-md-6">
				<label>Temperatura</label>
				<input type="text" class="form-control" name="temperatura" id="temperatura" placeholder="INGRESE TEMPERATURA" 
				style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" >
			</div>
		</div>

		<div class="form-group">
			<label>Motivo de consulta (Padecimiento Actual)</label>
			<textarea class="form-control" id="motivoCons" name="motivoCons" rows="3" 
			style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"></textarea>
		</div>

		<div class="form-row">
			<div class="form-group col-md-6">
				<label>Antecedentes Heredofamiliares</label>
				<textarea class="form-control" id="antHeredo" name="antHeredo" rows="3" 
				style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"></textarea>
			</div>
			<div class="form-group col-md-6">
				<label>Tratamientos afines y farmacología</label>
				<textarea class="form-control" id="tratamiento" name="tratamiento" rows="3" 
				style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"></textarea>
			</div>
		</div>

		<div class="form-group">
			<label>Antecedentes Personales Patológicos</label>
			<textarea class="form-control" id="antPersonal" name="antPersonal" rows="3" 
			style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"></textarea>
		</div>

		<div class="form-group">
			<label>Conocimiento del entorno (Medio laboral, físico-ambiental y socio-cultural)</label>
			<textarea class="form-control" id="conEntorno" name="conEntorno" rows="3" 
			style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"></textarea>
		</div>
		
		<div class="form-group">
    		<label>Inspección global</label>
    		<textarea class="form-control" id="inspGlobal" name="inspGlobal" rows="3" 
			style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"></textarea>
  		</div>
		
		<div class="form-row">
			<div class="form-group col-md-6">
				<label>Descripción de la inspección local</label>
				<textarea class="form-control" id="descLocal" name="descLocal" rows="3" 
				style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"></textarea>
			</div>
			<div class="form-group col-md-6">
				<label>Exploración física</label>
				<textarea class="form-control" id="expFisica" name="expFisica" rows="3" 
				style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"></textarea>
			</div>
		</div>
		
		<div class="form-group">
    		<label>Problema fisioterapéutico</label>
    		<textarea class="form-control" id="problemaFisio" name="problemaFisio" rows="3" 
			style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"></textarea>
  		</div><br />
		
		<!-- ========== Parte 3 ========== -->
		<h5 class="text-center"><strong>Programa fisioterapéutico (objetivos)</strong></h5>
		<hr>
		
		<div class="form-row">
			<div class="form-group col-md-4">
				<label>Corto plazo</label>
				<textarea class="form-control" id="cortoPlazo" name="cortoPlazo" rows="2" 
				style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"></textarea>
			</div>
			<div class="form-group col-md-4">
				<label>Mediano plazo</label>
				<textarea class="form-control" id="medianoPlazo" name="medianoPlazo" rows="2" 
				style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"></textarea>
			</div>
			<div class="form-group col-md-4">
				<label>Largo plazo</label>
				<textarea class="form-control" id="largoPlazo" name="largoPlazo" rows="2" 
				style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"></textarea>
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col-md-6">
				<label>Diagnóstico funcional</label>
				<textarea class="form-control" id="diagFuncional" name="diagFuncional" rows="3" 
				style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"></textarea>
			</div>
			<div class="form-group col-md-6">
				<label>Plan de intervención</label>
				<textarea class="form-control" id="planInter" name="planInter" rows="3" 
				style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"></textarea>
			</div>
		</div>
		<!-- ========== Parte 4 ========== -->
		<!-- ========== Parte 5 ========== -->
		
		<!-- Buttons -->
		<button type="submit" class="btn btn-primary">Guardar</button>
		<button type="button" class="btn btn-warning">Limpiar</button>
	</form>
	
</div> <!-- container -->