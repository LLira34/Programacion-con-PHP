<?php
	
	include 'models/Diagnostico.php';
	
	class DiagnosticoDAO{
		
		// Save diagnostico
		public static function save($diagnostico){
			$db = Db::getConnect();
			$insert = $db->prepare('INSERT INTO diagnostico 
			VALUES (null, :numExpediente, :nombre, :talla, :masa, :imc, :ocupacion, :edoCivil, :escolaridad, :domicilio, :colonia, 
			:localidad, :cp, :municipio, :estado, :telCasa, :celular, :correo, :aviso, :telefono, :primerVal, :inicioTto, :fechaAlt,
			:freCardiaca, :freRespiratoria, :tensArterial, :temperatura,:motivoCons, :antHeredo, :tratamiento, :antPersonal, 
			:conEntorno, :inspGlobal, :descLocal, :expFisica, :problemaFisio, :cortoPlazo, :medianoPlazo, :largoPlazo, 
			:diagFuncional, :planInter)');

			$insert->bindValue('numExpediente', $diagnostico->getNumExpediente());
			$insert->bindValue('nombre', $diagnostico->getNombre());
			$insert->bindValue('talla', $diagnostico->getTalla());
			$insert->bindValue('masa', $diagnostico->getMasa());
			$insert->bindValue('imc', $diagnostico->getImc());
			$insert->bindValue('ocupacion', $diagnostico->getOcupacion());
			$insert->bindValue('edoCivil', $diagnostico->getEdoCivil());
			$insert->bindValue('escolaridad', $diagnostico->getEscolaridad());
			$insert->bindValue('domicilio', $diagnostico->getDomicilio());
			$insert->bindValue('colonia', $diagnostico->getColonia());
			$insert->bindValue('localidad', $diagnostico->getLocalidad());
			$insert->bindValue('cp', $diagnostico->getCp());
			$insert->bindValue('municipio', $diagnostico->getMunicipio());
			$insert->bindValue('estado', $diagnostico->getEstado());
			$insert->bindValue('telCasa', $diagnostico->getTelCasa());
			$insert->bindValue('celular', $diagnostico->getCelular());
			$insert->bindValue('correo', $diagnostico->getCorreo());
			$insert->bindValue('aviso', $diagnostico->getAviso());
			$insert->bindValue('telefono', $diagnostico->getTelefono());
			$insert->bindValue('primerVal', $diagnostico->getPrimerVal());
			$insert->bindValue('inicioTto', $diagnostico->getInicioTto());
			$insert->bindValue('fechaAlt', $diagnostico->getFechaAlt());
			$insert->bindValue('freCardiaca', $diagnostico->getFreCardiaca());
			$insert->bindValue('freRespiratoria', $diagnostico->getFreRespiratoria());
			$insert->bindValue('tensArterial', $diagnostico->getTensArterial());
			$insert->bindValue('temperatura', $diagnostico->getTemperatura());
			$insert->bindValue('motivoCons', $diagnostico->getMotivoCons());
			$insert->bindValue('antHeredo', $diagnostico->getAntHeredo());
			$insert->bindValue('tratamiento', $diagnostico->getTratamiento());
			$insert->bindValue('antPersonal', $diagnostico->getAntPersonal());
			$insert->bindValue('conEntorno', $diagnostico->getConEntorno());
			$insert->bindValue('inspGlobal', $diagnostico->getInspGlobal());
			$insert->bindValue('descLocal', $diagnostico->getDescLocal());
			$insert->bindValue('expFisica', $diagnostico->getExpFisica());
			$insert->bindValue('problemaFisio', $diagnostico->getProblemaFisio());
			$insert->bindValue('cortoPlazo', $diagnostico->getCortoPlazo());
			$insert->bindValue('medianoPlazo', $diagnostico->getMedianoPlazo());
			$insert->bindValue('largoPlazo', $diagnostico->getLargoPlazo());
			$insert->bindValue('diagFuncional', $diagnostico->getDiagFuncional());
			$insert->bindValue('planInter', $diagnostico->getPlanInter());
			$insert->execute();
		}
		
		
		public static function update($diagnostico){
			$db = Db::getConnect();
			$update = $db->prepare('UPDATE diagnostico 
			SET numExpediente = :numExpediente, nombre = :nombre, talla = :talla, masa = :masa, imc = :imc, 
			ocupacion = :ocupacion, edoCivil = :edoCivil, escolaridad = :escolaridad, domicilio = :domicilio, 
			colonia = :colonia, localidad = :localidad, cp = :cp, municipio = :municipio, estado = :estado, 
			telCasa = :telCasa, celular = :celular, correo = :correo, aviso = :aviso, telefono = :telefono,
			primerVal = :primerVal, inicioTto = :inicioTto, fechaAlt = :fechaAlt, freCardiaca = :freCardiaca, 
			freRespiratoria = :freRespiratoria, tensArterial = :tensArterial, temperatura = :temperatura,
			motivoCons = :motivoCons, antHeredo = :antHeredo, tratamiento = :tratamiento, antPersonal = :antPersonal, 
			conEntorno = :conEntorno, inspGlobal = :inspGlobal, descLocal = :descLocal, expFisica = :expFisica,
			problemaFisio = :problemaFisio, cortoPlazo = :cortoPlazo, medianoPlazo = :medianoPlazo, largoPlazo = :largoPlazo,
			diagFuncional = :diagFuncional, planInter = :planInter
			WHERE id = :id');
			
			$update->bindValue('numExpediente', $diagnostico->getNumExpediente());
			$update->bindValue('nombre', $diagnostico->getNombre());
			$update->bindValue('talla', $diagnostico->getTalla());
			$update->bindValue('masa', $diagnostico->getMasa());
			$update->bindValue('imc', $diagnostico->getImc());
			$update->bindValue('ocupacion', $diagnostico->getOcupacion());
			$update->bindValue('edoCivil', $diagnostico->getEdoCivil());
			$update->bindValue('escolaridad', $diagnostico->getEscolaridad());
			$update->bindValue('domicilio', $diagnostico->getDomicilio());
			$update->bindValue('colonia', $diagnostico->getColonia());
			$update->bindValue('localidad', $diagnostico->getLocalidad());
			$update->bindValue('cp', $diagnostico->getCp());
			$update->bindValue('municipio', $diagnostico->getMunicipio());
			$update->bindValue('estado', $diagnostico->getEstado());
			$update->bindValue('telCasa', $diagnostico->getTelCasa());
			$update->bindValue('celular', $diagnostico->getCelular());
			$update->bindValue('correo', $diagnostico->getCorreo());
			$update->bindValue('aviso', $diagnostico->getAviso());
			$update->bindValue('telefono', $diagnostico->getTelefono());
			$update->bindValue('primerVal', $diagnostico->getPrimerVal());
			$update->bindValue('inicioTto', $diagnostico->getInicioTto());
			$update->bindValue('fechaAlt', $diagnostico->getFechaAlt());
			$update->bindValue('freCardiaca', $diagnostico->getFreCardiaca());
			$update->bindValue('freRespiratoria', $diagnostico->getFreRespiratoria());
			$update->bindValue('tensArterial', $diagnostico->getTensArterial());
			$update->bindValue('temperatura', $diagnostico->getTemperatura());
			$update->bindValue('motivoCons', $diagnostico->getMotivoCons());
			$update->bindValue('antHeredo', $diagnostico->getAntHeredo());
			$update->bindValue('tratamiento', $diagnostico->getTratamiento());
			$update->bindValue('antPersonal', $diagnostico->getAntPersonal());
			$update->bindValue('conEntorno', $diagnostico->getConEntorno());
			$update->bindValue('inspGlobal', $diagnostico->getInspGlobal());
			$update->bindValue('descLocal', $diagnostico->getDescLocal());
			$update->bindValue('expFisica', $diagnostico->getExpFisica());
			$update->bindValue('problemaFisio', $diagnostico->getProblemaFisio());
			$update->bindValue('cortoPlazo', $diagnostico->getCortoPlazo());
			$update->bindValue('medianoPlazo', $diagnostico->getMedianoPlazo());
			$update->bindValue('largoPlazo', $diagnostico->getLargoPlazo());
			$update->bindValue('diagFuncional', $diagnostico->getDiagFuncional());
			$update->bindValue('planInter', $diagnostico->getPlanInter());
			$update->bindValue('id', $diagnostico->getId());
			$update->execute();
		}

		public static function delete($id){
			$db = Db::getConnect();
			$delete = $db->prepare('DELETE FROM diagnostico WHERE id = :id');
			$delete->bindValue('id', $id);
			$delete->execute();
		}

		public static function all(){
			$db = Db::getConnect();
			$listDiagnostico = [];

			$select = $db->query('SELECT * FROM diagnostico ORDER BY id');

			foreach ($select->fetchAll() as $diagnostico) {
				$listDiagnostico[] = new Diagnostico($diagnostico['id'], $diagnostico['numExpediente'], $diagnostico['nombre'],
				$diagnostico['talla'], $diagnostico['masa'], $diagnostico['imc'], 
				$diagnostico['ocupacion'], $diagnostico['edoCivil'],  $diagnostico['escolaridad'], $diagnostico['domicilio'],
				$diagnostico['colonia'], $diagnostico['localidad'], $diagnostico['cp'], $diagnostico['municipio'], $diagnostico['estado'],
				$diagnostico['telCasa'], $diagnostico['celular'], $diagnostico['correo'], $diagnostico['aviso'], $diagnostico['telefono'],
				$diagnostico['primerVal'], $diagnostico['inicioTto'], $diagnostico['fechaAlt'], $diagnostico['freCardiaca'], 
				$diagnostico['freRespiratoria'], $diagnostico['tensArterial'], $diagnostico['temperatura'], $diagnostico['motivoCons'], 
				$diagnostico['antHeredo'], $diagnostico['tratamiento'], $diagnostico['antPersonal'], $diagnostico['conEntorno'],
				$diagnostico['inspGlobal'], $diagnostico['descLocal'], $diagnostico['expFisica'],
				$diagnostico['problemaFisio'], $diagnostico['cortoPlazo'], $diagnostico['medianoPlazo'], $diagnostico['largoPlazo'],
				$diagnostico['diagFuncional'], $diagnostico['planInter']); 
			}
			return $listDiagnostico;
		}

		public static function searchById($id){
			$db = Db::getConnect();
			
			$select = $db->prepare('SELECT * FROM diagnostico WHERE id = :id');
			$select->bindValue('id', $id);
			$select->execute();
			$search = $select->fetch();
			
			$diagnostico = new Diagnostico($search['id'], $search['numExpediente'], $search['nombre'],
				  $search['talla'], $search['masa'], $search['imc'], $search['ocupacion'], $search['edoCivil'], $search['escolaridad'], 
				  $search['domicilio'], $search['colonia'], $search['localidad'], $search['cp'], $search['municipio'], 
				  $search['estado'], $search['telCasa'], $search['celular'], $search['correo'], $search['aviso'], $search['telefono'],
				  $search['primerVal'], $search['inicioTto'], $search['fechaAlt'], $search['freCardiaca'], $search['freRespiratoria'],
				  $search['tensArterial'], $search['temperatura'], $search['motivoCons'], $search['antHeredo'],
				  $search['tratamiento'], $search['antPersonal'], $search['conEntorno'], $search['inspGlobal'], $search['descLocal'], 
				  $search['expFisica'], $search['problemaFisio'], $search['cortoPlazo'], $search['medianoPlazo'], $search['largoPlazo'],
				  $search['diagFuncional'], $search['planInter']); 
			return $diagnostico;
		}
		
	} // End class