<?php
	/**
	* 
	* @author: Team Rocket
	* @version 1.0
	*/
	
	include 'data/PacienteDAO.php';

	class CoordinadorController{

		function __construct(){}
		
		function showPacientes(){
			$listPacientes = PacienteDAO::all();
			require_once('views/coordinador/show.php');
		}
		
		function showCitas(){
			$listCitas = CalendarDAO::all();
			require_once('views/coordinador/showCitas.php');
		}
		
	}