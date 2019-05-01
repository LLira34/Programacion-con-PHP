<?php

	class Diagnostico {
		
		// Declaretion of attributes 
		private $id;
		private $numExpediente;
		private $nombre;
		private $talla;
		private $masa;
		private $imc;
		private $ocupacion;
		private $edoCivil;
		private $escolaridad;
		private $domicilio;
		private $colonia;
		private $localidad;
		private $cp;
		private $municipio;
		private $estado;
		private $telCasa;
		private $celular;
		private $correo;
		private $aviso;
		private $telefono;
		private $primerVal;
		private $inicioTto; 
		private $fechaAlt; // <-------
		private $freCardiaca; 
		private $freRespiratoria;
		private $tensArterial;
		private $temperatura;
		private $motivoCons;
		private $antHeredo;
		private $tratamiento;
		private $antPersonal;
		private $conEntorno;
		private $inspGlobal; //<----
		private $descLocal;
		private $expFisica;
		private $problemaFisio; // <----
		private $cortoPlazo;
		private $medianoPlazo;
		private $largoPlazo;
		private $diagFuncional;
		private $planInter;
		
		// Method Constructor 
		public function __construct($id, $numExpediente, $nombre, $talla, $masa, $imc, $ocupacion, $edoCivil, $escolaridad, $domicilio, 
		$colonia, $localidad, $cp, $municipio, $estado, $telCasa, $celular, $correo, $aviso, $telefono, $primerVal, $inicioTto, $fechaAlt,
		$freCardiaca, $freRespiratoria, $tensArterial, $temperatura, $motivoCons, $antHeredo, $tratamiento, $antPersonal, $conEntorno,
		$inspGlobal, $descLocal, $expFisica, $problemaFisio, $cortoPlazo, $medianoPlazo, $largoPlazo, $diagFuncional, $planInter){
			$this->setId($id);
			$this->setNumExpediente($numExpediente);
			$this->setNombre($nombre);
			$this->setTalla($talla);
			$this->setMasa($masa);
			$this->setImc($imc);
			$this->setOcupacion($ocupacion);
			$this->setEdoCivil($edoCivil);
			$this->setEscolaridad($escolaridad);
			$this->setDomicilio($domicilio);
			$this->setColonia($colonia);
			$this->setLocalidad($localidad);
			$this->setCp($cp);
			$this->setMunicipio($municipio);
			$this->setEstado($estado);
			$this->setTelCasa($telCasa);
			$this->setCelular($celular);
			$this->setCorreo($correo);
			$this->setAviso($aviso);
			$this->setTelefono($telefono);
			$this->setPrimerVal($primerVal);
			$this->setInicioTto($inicioTto);
			$this->setFechaAlt($fechaAlt);
			$this->setFreCardiaca($freCardiaca);
			$this->setFreRespiratoria($freRespiratoria);
			$this->setTensArterial($tensArterial);
			$this->setTemperatura($temperatura);
			$this->setMotivoCons($motivoCons);
			$this->setAntHeredo($antHeredo);
			$this->setTratamiento($tratamiento);
			$this->setAntPersonal($antPersonal);
			$this->setConEntorno($conEntorno);
			$this->setInspGlobal($inspGlobal);
			$this->setDescLocal($descLocal);
			$this->setExpFisica($expFisica);
			$this->setProblemaFisio($problemaFisio);
			$this->setCortoPlazo($cortoPlazo);
			$this->setMedianoPlazo($medianoPlazo);
			$this->setLargoPlazo($largoPlazo);
			$this->setDiagFuncional($diagFuncional);
			$this->setPlanInter($planInter);
		}
		
		// Getters and setters
		public function getId(){return $this->id;}

		public function setId($id){$this->id = $id;}
		
		public function getNumExpediente(){return $this->numExpediente;}

		public function setNumExpediente($numExpediente){$this->numExpediente = $numExpediente;}
		
		public function getNombre(){return $this->nombre;}

		public function setNombre($nombre){$this->nombre = $nombre;}

		public function getTalla(){return $this->talla;}

		public function setTalla($talla){$this->talla = $talla;}

		public function getMasa(){return $this->masa;}

		public function setMasa($masa){$this->masa = $masa;}

		public function getImc(){return $this->imc;}

		public function setImc($imc){$this->imc = $imc;}

		public function getOcupacion(){return $this->ocupacion;}

		public function setOcupacion($ocupacion){$this->ocupacion = $ocupacion;}

		public function getEdoCivil(){return $this->edoCivil;}

		public function setEdoCivil($edoCivil){$this->edoCivil = $edoCivil;}

		public function getEscolaridad(){return $this->escolaridad;}

		public function setEscolaridad($escolaridad){$this->escolaridad = $escolaridad;}

		public function getDomicilio(){return $this->domicilio;}

		public function setDomicilio($domicilio){$this->domicilio = $domicilio;}

		public function getColonia(){return $this->colonia;}

		public function setColonia($colonia){$this->colonia = $colonia;}

		public function getLocalidad(){return $this->localidad;}

		public function setLocalidad($localidad){$this->localidad = $localidad;}

		public function getCp(){return $this->cp;}

		public function setCp($cp){$this->cp = $cp;}
		
		public function getMunicipio(){return $this->municipio;}
		
		public function setMunicipio($municipio){$this->municipio = $municipio;}

		public function getEstado(){return $this->estado;}
		
		public function setEstado($estado){$this->estado = $estado;}
		
		public function getTelCasa(){return $this->telCasa;}
		
		public function setTelCasa($telCasa){$this->telCasa = $telCasa;}
		
		public function getCelular(){return $this->celular;}
		
		public function setCelular($celular){$this->celular = $celular;}
	
		public function getCorreo(){return $this->correo;}
		
		public function setCorreo($correo){$this->correo = $correo;}

		public function getAviso(){return $this->aviso;}
		
		public function setAviso($aviso){$this->aviso = $aviso;}
		
		public function getTelefono(){return $this->telefono;}
		
		public function setTelefono($telefono){$this->telefono = $telefono;}
		
		public function getPrimerVal(){return $this->primerVal;}
		
		public function setPrimerVal($primerVal){$this->primerVal = $primerVal;}
		
		public function getInicioTto(){return $this->inicioTto;}
		
		public function setInicioTto($inicioTto){$this->inicioTto = $inicioTto;}
		
		public function getFreCardiaca(){return $this->freCardiaca;}

		public function setFreCardiaca($freCardiaca){$this->freCardiaca = $freCardiaca;}
		
		public function getFechaAlt(){return $this->fechaAlt;}
		
		public function setFechaAlt($fechaAlt){$this->fechaAlt = $fechaAlt;}

		public function getFreRespiratoria(){return $this->freRespiratoria;}

		public function setFreRespiratoria($freRespiratoria){$this->freRespiratoria = $freRespiratoria;}

		public function getTensArterial(){return $this->tensArterial;}

		public function setTensArterial($tensArterial){$this->tensArterial = $tensArterial;}

		public function getTemperatura(){return $this->temperatura;}

		public function setTemperatura($temperatura){$this->temperatura = $temperatura;}

		public function getMotivoCons(){return $this->motivoCons;}

		public function setMotivoCons($motivoCons){$this->motivoCons = $motivoCons;}

		public function getAntHeredo(){return $this->antHeredo;}

		public function setAntHeredo($antHeredo){$this->antHeredo = $antHeredo;}

		public function getTratamiento(){return $this->tratamiento;}

		public function setTratamiento($tratamiento){$this->tratamiento = $tratamiento;}

		public function getAntPersonal(){return $this->antPersonal;}

		public function setAntPersonal($antPersonal){$this->antPersonal = $antPersonal;}

		public function getConEntorno(){return $this->conEntorno;}

		public function setConEntorno($conEntorno){$this->conEntorno = $conEntorno;}
		
		public function getInspGlobal(){return $this->inspGlobal;}

		public function setInspGlobal($inspGlobal){$this->inspGlobal = $inspGlobal;}

		public function getDescLocal(){return $this->descLocal;}

		public function setDescLocal($descLocal){$this->descLocal = $descLocal;}

		public function getExpFisica(){return $this->expFisica;}

		public function setExpFisica($expFisica){$this->expFisica = $expFisica;}
		
		public function getProblemaFisio(){return $this->problemaFisio;}

		public function setProblemaFisio($problemaFisio){$this->problemaFisio = $problemaFisio;}

		public function getCortoPlazo(){return $this->cortoPlazo;}

		public function setCortoPlazo($cortoPlazo){$this->cortoPlazo = $cortoPlazo;}

		public function getMedianoPlazo(){return $this->medianoPlazo;}

		public function setMedianoPlazo($medianoPlazo){$this->medianoPlazo = $medianoPlazo;}

		public function getLargoPlazo(){return $this->largoPlazo;}

		public function setLargoPlazo($largoPlazo){$this->largoPlazo = $largoPlazo;}

		public function getDiagFuncional(){return $this->diagFuncional;}

		public function setDiagFuncional($diagFuncional){$this->diagFuncional = $diagFuncional;}

		public function getPlanInter(){return $this->planInter;}

		public function setPlanInter($planInter){$this->planInter = $planInter;}
		
	} // End class