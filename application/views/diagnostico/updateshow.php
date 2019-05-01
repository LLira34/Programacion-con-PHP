<?php
	require_once("header.php");
?>

<div class="container">

	<form action="?controller=diagnostico&&action=update" method="POST">
		<input type="hidden" name="id" value="<?php echo $diagnostico->getId(); ?>" >
		
		<h5 class="text-center"><strong>Revisar datos generales</strong></h5>
		<hr>
		
		<div class="form-row">
			<div class="form-group col-md-4">
				<label>No. Expediente</label>
				<input type="text" class="form-control" name="numExpediente" id="numExpediente" value="<?php echo $diagnostico->getNumExpediente(); ?>" readonly="readonly">
			</div>
			<div class="form-group col-md-8">
				<label>Paciente</label>
				<input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $diagnostico->getNombre(); ?>" readonly="readonly">
			</div>
		</div>
		
		<div class="form-row">
			<div class="form-group col-md-4">
				<label for="">Talla</label>
				<input type="text" class="form-control" name="talla" id="talla" value="<?php echo $diagnostico->getTalla(); ?>">
			</div>
			<div class="form-group col-md-4">
				<label for="">Masa</label>
				<input type="text" class="form-control" name="masa" id="masa" value="<?php echo $diagnostico->getMasa(); ?>">
			</div>
			<div class="form-group col-md-4">
				<label for="">IMC</label>
				<input type="text" class="form-control" id="imc" name="imc"  value="<?php echo $diagnostico->getImc(); ?>" >
			</div>
		</div>
		
		<div class="form-row">
			<div class="form-group col-md-4">
				<label for="">Ocupación</label>
				<input id="ocupacion" name="ocupacion" class="form-control" value="<?php echo $diagnostico->getOcupacion(); ?>" >
			</div>
			<div class="form-group col-md-4">
				<label for="">Estado civil</label>
				<input id="edoCivil" name="edoCivil" class="form-control" value="<?php echo $diagnostico->getEdoCivil(); ?>" >
			</div>
			<div class="form-group col-md-4">
				<label for="">Escolaridad</label>
				<input type="text" class="form-control" name="escolaridad" id="escolaridad" value="<?php echo $diagnostico->getEscolaridad(); ?>" >
			</div>
		</div>
		
		<div class="form-row">
			<div class="form-group col-md-4">
				<label for="">Domicilio actual</label>
				<input type="text" class="form-control" name="domicilio" id="domicilio" value="<?php echo $diagnostico->getDomicilio(); ?>" >
			</div>
			<div class="form-group col-md-4">
				<label for="">Colonia</label>
				<input type="text" class="form-control" name="colonia" id="colonia" value="<?php echo $diagnostico->getColonia(); ?>" >
			</div>
			<div class="form-group col-md-4">
				<label for="">Localidad</label>
				<input type="text" class="form-control" name="localidad" id="localidad" value="<?php echo $diagnostico->getLocalidad(); ?>" >
			</div>
		</div>
		
		<div class="form-row">
			<div class="form-group col-md-4">
				<label for="">Codigo Postal</label>
				<input type="number" class="form-control" name="cp" id="cp" value="<?php echo $diagnostico->getCp(); ?>">
			</div>
			<div class="form-group col-md-4">
				<label for="">Municipio</label>
				<input type="text" class="form-control" name="municipio" id="municipio" value="<?php echo $diagnostico->getMunicipio(); ?>">
			</div>
			<div class="form-group col-md-4">
				<label for="">Estado</label>
				<input type="text" class="form-control" name="estado" id="estado" value="<?php echo $diagnostico->getEstado(); ?>">
			</div>
		</div>
		
		<div class="form-row">	
			<div class="form-group col-md-6">
				<label for="">Telefono de casa</label>
				<input type="text" class="form-control" name="telCasa" id="telCasa" value="<?php echo $diagnostico->getTelCasa(); ?>">
			</div>
			<div class="form-group col-md-6">
				<label for="">Celular</label>
				<input type="text" class="form-control" name="celular" id="celular" value="<?php echo $diagnostico->getCelular(); ?>">
			</div>
		</div>
		
		<div class="form-row">	
			<div class="form-group col-md-12">
				<label for="">Correo electronico</label>
				<input type="email" class="form-control" name="correo" id="correo" value="<?php echo $diagnostico->getCorreo(); ?>">
			</div>
		</div>
		
		<div class="form-row">	
			<div class="form-group col-md-6">
				<label for="">Avisar en caso de emergencia a:</label>
				<input type="text" class="form-control" name="aviso" id="aviso" value="<?php echo $diagnostico->getAviso(); ?>">
			</div>
			<div class="form-group col-md-6">
				<label for="">Telefono</label>
				<input type="number" class="form-control" name="telefono" id="telefono" value="<?php echo $diagnostico->getTelefono(); ?>">
			</div>
		</div>
		
		<div class="form-row">
			<div class="form-group col-md-4">
				<label for="">Fecha de primera valoración</label>
				<input type="text" class="form-control" name="primerVal" id="primerVal" value="<?php echo $diagnostico->getPrimerVal(); ?>">
			</div>
			<div class="form-group col-md-4">
				<label for="">Fecha de inicio de tratamiento</label>
				<input type="text" class="form-control" name="inicioTto" id="inicioTto" value="<?php echo $diagnostico->getInicioTto(); ?>">
			</div>
			<div class="form-group col-md-4">
				<label for="">Fecha de alta</label>
				<input type="text" class="form-control" name="fechaAlt" id="fechaAlt" value="<?php echo $diagnostico->getFechaAlt(); ?>">
			</div>
		</div>
		
		<!-- ========== Parte 2 ========== -->
		<h5 class="text-center"><strong>Signos vitales</strong></h5>
		<hr>
		<div class="form-row">
			<div class="form-group col-md-6">
				<label>Frecuencia cardíaca:</label>
				<input type="text" class="form-control" name="freCardiaca" id="freCardiaca" 
				value="<?php echo $diagnostico->getFreCardiaca(); ?>">
			</div>
			<div class="form-group col-md-6">
				<label>Frecuencia respiratoria</label>
				<input type="text" class="form-control" name="freRespiratoria" id="freRespiratoria" 
				value="<?php echo $diagnostico->getFreRespiratoria(); ?>">
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col-md-6">
				<label>Tensión arterial:</label>
				<input type="text" class="form-control" name="tensArterial" id="tensArterial" 
				value="<?php echo $diagnostico->getTensArterial(); ?>">
			</div>
			<div class="form-group col-md-6">
				<label>Temperatura</label>
				<input type="text" class="form-control" name="temperatura" id="temperatura" 
				value="<?php echo $diagnostico->getTemperatura(); ?>">
			</div>
		</div>

		<div class="form-group">
			<label>Motivo de consulta (Padecimiento Actual)</label>
			<textarea class="form-control" id="motivoCons" name="motivoCons" rows="3">
			<?php echo $diagnostico->getMotivoCons(); ?></textarea>
		</div>
		
		<div class="form-row">
			<div class="form-group col-md-6">
				<label>Antecedentes Heredofamiliares</label>
				<textarea type="text" class="form-control" id="antHeredo" name="antHeredo" rows="3">
				<?php echo $diagnostico->getAntHeredo(); ?></textarea>
			</div>
			<div class="form-group col-md-6">
				<label>Tratamientos afines y farmacología</label>
				<textarea class="form-control" id="tratamiento" name="tratamiento" rows="3">
				<?php echo $diagnostico->getTratamiento(); ?></textarea>
			</div>
		</div>

		<div class="form-group">
			<label>Antecedentes Personales Patológicos</label>
			<textarea class="form-control" id="antPersonal" name="antPersonal" rows="3">
			<?php echo $diagnostico->getAntPersonal(); ?></textarea>
		</div>

		<div class="form-group">
			<label>Conocimiento del entorno (Medio laboral, físico-ambiental y socio-cultural)</label>
			<textarea class="form-control" id="conEntorno" name="conEntorno" rows="3">
			<?php echo $diagnostico->getConEntorno(); ?></textarea>
		</div>
		
		<div class="form-group">
    		<label>Inspección global</label>
    		<textarea class="form-control" id="inspGlobal" name="inspGlobal" rows="3" 
			style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
				<?php echo $diagnostico->getInspGlobal(); ?></textarea>
			</textarea>
  		</div>
		
		<div class="form-row">
			<div class="form-group col-md-6">
				<label>Descripción de la inspección local</label>
				<textarea class="form-control" id="descLocal" name="descLocal" rows="3" 
				style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
					<?php echo $diagnostico->getDescLocal(); ?></textarea>
				</textarea>
			</div>
			<div class="form-group col-md-6">
				<label>Exploración física</label>
				<textarea class="form-control" id="expFisica" name="expFisica" rows="3" 
				style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
					<?php echo $diagnostico->getExpFisica(); ?></textarea>
				</textarea>
			</div>
		</div>
		
		<div class="form-group">
    		<label>Problema fisioterapéutico</label>
    		<textarea class="form-control" id="problemaFisio" name="problemaFisio" rows="3" 
			style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
				<?php echo $diagnostico->getProblemaFisio(); ?>
			</textarea>
  		</div><br />
		
		<!-- ========== Parte 3 ========== -->
		<h5 class="text-center"><strong>Programa fisioterapéutico (objetivos)</strong></h5>
		<hr>
		
		<div class="form-row">
			<div class="form-group col-md-4">
				<label>Corto plazo</label>
				<textarea class="form-control" id="cortoPlazo" name="cortoPlazo" rows="2" 
				style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
					<?php echo $diagnostico->getCortoPlazo(); ?>
				</textarea>
			</div>
			<div class="form-group col-md-4">
				<label>Mediano plazo</label>
				<textarea class="form-control" id="medianoPlazo" name="medianoPlazo" rows="2" 
				style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
					<?php echo $diagnostico->getMedianoPlazo(); ?>
				</textarea>
			</div>
			<div class="form-group col-md-4">
				<label>Largo plazo</label>
				<textarea class="form-control" id="largoPlazo" name="largoPlazo" rows="2" 
				style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
					<?php echo $diagnostico->getLargoPlazo(); ?>
				</textarea>
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col-md-6">
				<label>Diagnóstico funcional</label>
				<textarea class="form-control" id="diagFuncional" name="diagFuncional" rows="3" 
				style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
					<?php echo $diagnostico->getDiagFuncional(); ?>
				</textarea>
			</div>
			<div class="form-group col-md-6">
				<label>Plan de intervención</label>
				<textarea class="form-control" id="planInter" name="planInter" rows="3" 
				style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
					<?php echo $diagnostico->getPlanInter(); ?>
				</textarea>
			</div>
		</div>
		
		<!-- Button save -->
		<button type="submit" class="btn btn-primary">Guardar</button>
	</form>
	
</div>