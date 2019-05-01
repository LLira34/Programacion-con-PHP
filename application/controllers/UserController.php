<?php
	/**
	* 
	* @author: Team Rocket
	* @version 1.0
	*/
	
	include_once (__DIR__ . '\..\data\UserDAO.php');
	
	class UserController{
		
		function __construct(){}

		function index(){
			require_once('views/login.php');
		}
		
		function register(){
			require_once('views/user/register.php');
		}
		
		function login($cveUsu, $pasUsu){
			$obj = new User();
			$obj->setCveUsu($cveUsu);
			$obj->setPasUsu($pasUsu);

			return UserDAO::login($obj);
		}
		
		function getUser($cveUsu, $pasUsu){
			$obj = new User();
			$obj->setCveUsu($cveUsu);
			$obj->setPasUsu($pasUsu);

			return UserDAO::getUser($obj);
		}
		
		/*function save($cveUsu, $pasUsu, $nomUsu, $rol){
			$obj = new User();
			$obj->setCveUsu($cveUsu);
			$obj->setPasUsu($pasUsu);
			$obj->setNomUsu($nomUsu);
			$obj->setRol($rol);

			return UserDAO::save($obj);
			$this->show();
		}*/
		
		function error(){
			require_once('views/pages/error.php');
		}
		
		function recepcion(){
			require_once('views/pages/recepcion.php');
		}
		
		function user(){
			require_once('views/pages/user.php');
		}
		
		function exit(){
			require_once('views/exit.php');
		}
		
		function ensain(){
			require_once('views/pages/ensain.php');
		}
		
		function coordinador(){
			require_once('views/pages/coordinador.php');
		}
		
		function admon(){
			require_once('views/pages/admon.php');
		}
		
		// Functions crud
		function save(){
			$user = new User(null, $_POST['cveUsu'], $_POST['pasUsu'], $_POST['nomUsu'], $_POST['rol']);

			UserDAO::save($user);
			$this->show();
		}
		
		function show(){
			$listUsers = UserDAO::all();
			require_once('views/user/show.php');
		}
		
		function updateshow(){
			$id = $_GET['idUser'];
			$user = UserDAO::searchById($id);
			require_once('views/user/updateshow.php');
		}

		function update($cveUsu, $pasUsu, $nomUsu, $rol){
			$user = new User($_POST['id'], $_POST['cveUsu'], $_POST['pasUsu'], $_POST['nomUsu'], $_POST['rol']);
			UserDAO::update($user);
			$this->show();
		}

		function delete(){
			$id = $_GET['id'];
			UserDAO::delete($id);
			$this->show();
		}
		
		function search(){
			if(!empty($_POST['id'])){
				$id = $_POST['id'];
				$user = new User();
				$listUsers[] = $user;
				require_once('views/user/show.php');
			}else{
				$listUsers = UserDAO::all();
				require_once('views/user/show.php');
			}
		}
		
	} // End class