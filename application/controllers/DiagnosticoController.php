<?php 
	/**
	* 
	* @author: Team Rocket
	* @version 1.0
	*/
	
	include 'data/DiagnosticoDAO.php';
	
	class DiagnosticoController{
		
		function __construct(){}

		function index(){
			require_once('views/diagnostico/register.php');
		}

		function register(){
			require_once('views/diagnostico/register.php');
		}
		
		function save(){
			$diagnostico = new Diagnostico(null, $_POST['numExpediente'], $_POST['nombre'],
			$_POST['talla'], $_POST['masa'], $_POST['imc'], $_POST['ocupacion'], $_POST['edoCivil'], 
			$_POST['escolaridad'], $_POST['domicilio'], $_POST['colonia'], $_POST['localidad'], $_POST['cp'], $_POST['municipio'],
			$_POST['estado'], $_POST['telCasa'], $_POST['celular'], $_POST['correo'], $_POST['aviso'], $_POST['telefono'],
			$_POST['primerVal'], $_POST['inicioTto'], $_POST['fechaAlt'], $_POST['freCardiaca'], $_POST['freRespiratoria'],
			$_POST['tensArterial'], $_POST['temperatura'], $_POST['motivoCons'], $_POST['antHeredo'],
			$_POST['tratamiento'], $_POST['antPersonal'], $_POST['conEntorno'], $_POST['inspGlobal'], $_POST['descLocal'], 
			$_POST['expFisica'], $_POST['problemaFisio'], $_POST['cortoPlazo'], $_POST['medianoPlazo'], $_POST['largoPlazo'],
			$_POST['diagFuncional'], $_POST['planInter']);
			
			DiagnosticoDAO::save($diagnostico);
			$this->show();
		}
		
		function show(){
			$listDiagnostico = DiagnosticoDAO::all();
			require_once('views/diagnostico/show.php');
		}
		
		function updateshow(){
			$id = $_GET['idDiagnostico'];
			$diagnostico = DiagnosticoDAO::searchById($id);
			require_once('views/diagnostico/updateshow.php');
		}

		function update(){
			$diagnostico = new Diagnostico($_POST['id'], $_POST['numExpediente'], $_POST['nombre'],
			$_POST['talla'], $_POST['masa'], $_POST['imc'], $_POST['ocupacion'], $_POST['edoCivil'], 
			$_POST['escolaridad'], $_POST['domicilio'], $_POST['colonia'], $_POST['localidad'], $_POST['cp'], $_POST['municipio'],
			$_POST['estado'], $_POST['telCasa'], $_POST['celular'], $_POST['correo'], $_POST['aviso'], $_POST['telefono'],
			$_POST['primerVal'], $_POST['inicioTto'], $_POST['fechaAlt'], $_POST['freCardiaca'], $_POST['freRespiratoria'],
			$_POST['tensArterial'], $_POST['temperatura'], $_POST['motivoCons'], $_POST['antHeredo'],
			$_POST['tratamiento'], $_POST['antPersonal'], $_POST['conEntorno'], $_POST['inspGlobal'], $_POST['descLocal'], 
			$_POST['expFisica'], $_POST['problemaFisio'], $_POST['cortoPlazo'], $_POST['medianoPlazo'], $_POST['largoPlazo'],
			$_POST['diagFuncional'], $_POST['planInter']);

			DiagnosticoDAO::update($diagnostico);
			$this->show();
		}

		function delete(){
			$id = $_GET['id'];
			DiagnosticoDAO::delete($id);
			$this->show();
		}
		
		function search(){
			if(!empty($_POST['id'])){
				$id = $_POST['id'];
				$diagnostico = new Diagnostico();
				$listDiagnostico[] = $diagnostico;
				require_once('views/diagnostico/show.php');
			}else{
				$listDiagnostico = DiagnosticoDAO::all();
				require_once('views/diagnostico/show.php');
			}
		}
				
		function error(){
			require_once('views/diagnostico/error.php');
		}
		
	} // End class