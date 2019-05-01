<?php

	/**
	** Class TerapeutaController, include functions index and register
	*/

	include 'data/TerapeutaDAO.php';
	
	class TerapeutaController{
	
		function __construct(){}
		
		function index(){}
		
		function save(){
			$terapeuta = new Terapeuta(null, $_POST['nombre_completo']);
			TerapeutaDAO::save($terapeuta);
			$this->show();
		}
		
		function show(){
			$listTerapeutas = TerapeutaDAO::all();
			require_once('views/terapeuta/show.php');
		}
		
		function updateshow(){
			$id_terapeta = $_GET['id_terapeta'];
			$terapeuta = TerapeutaDAO::searchById($id_terapeta);
			require_once('views/terapeuta/updateshow.php');
		}
		
		function update(){
			$terapeuta = new Terapeuta($_POST['id_terapeta'], $_POST['nombre_completo']);
			TerapeutaDAO::update($terapeuta);
			$this->show();
		}
		
		function delete(){
			$id_terapeta = $_GET['id_terapeta'];
			TerapeutaDAO::delete($id_terapeta);
			$this->show();
		}
		
		function search(){
			if(!empty($_POST['id_terapeta'])){
				$id_terapeta = $_POST['id_terapeta'];
				$terapeuta = new Terapeuta();
				$listTerapeutas[] = $terapeuta;
				require_once('views/terapeuta/show.php');
			}else{
				$listTerapeutas = TerapeutaDAO::all();
				require_once('views/terapeuta/show.php');
			}
		}
		
		function error(){
			require_once('views/terapeuta/error.php');
		}
		
	} // End class