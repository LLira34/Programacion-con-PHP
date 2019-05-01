<?php
	/**
	* 
	* @author: Team Rocket
	* @version 1.0
	*/
	
	include 'data/PacienteDAO.php';

	class PacienteController{

		function __construct(){}

		function index(){
			require_once('views/paciente/register.php');
		}

		function register(){
			require_once('views/paciente/register.php');
		}

		function save(){
			$paciente = new Paciente(null, null, $_POST['fecha'], $_POST['nombre'], $_POST['fecha_nac'], $_POST['edad'], $_POST['genero']);

			PacienteDAO::save($paciente);
			$this->show();
		}
		
		function show(){
			$listPacientes = PacienteDAO::all();
			require_once('views/paciente/show.php');
		}
		
		function updateshow(){
			$id = $_GET['idPaciente'];
			$paciente = PacienteDAO::searchById($id);
			require_once('views/paciente/updateshow.php');
		}

		function update(){
			$paciente = new Paciente($_POST['id'], $_POST['num_expediente'], $_POST['fecha'], $_POST['nombre'], $_POST['fecha_nac'], $_POST['edad'], $_POST['genero']);
			PacienteDAO::update($paciente);
			$this->show();
		}

		function delete(){
			$id = $_GET['id'];
			PacienteDAO::delete($id);
			$this->show();
		}
		
		function search(){
			if(!empty($_POST['id'])){
				$id = $_POST['id'];
				$paciente = new Paciente();
				$listPacientes[] = $paciente;
				require_once('views/paciente/show.php');
			}else{
				$listPacientes = PacienteDAO::all();
				require_once('views/paciente/show.php');
			}
		}
		
		function error(){
			require_once('views/paciente/error.php');
		}

	} // End