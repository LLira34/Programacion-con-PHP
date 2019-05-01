<?php 

	include '../controllers/UserController.php';
	
	session_start();
	header('Content-type: application/json');
	$result = array();
	
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		if(isset($_POST['user_txt']) && isset($_POST['password_txt'])){
			$user_txt = $_POST['user_txt'];
			$password_txt = $_POST['password_txt'];
			
			$result = array('estado' => 'true');
			if(UserController::login($user_txt, $password_txt)){
				$user = UserController::getUser($user_txt, $password_txt);
				$_SESSION['user'] = array(
					'id'     => $user->getId(),
					'cveUsu' => $user->getCveUsu(),
					'nomUsu' => $user->getNomUsu(),
					'rol'    => $user->getRol(),
				);
				return print(json_encode($result));
			}
		}	
	}
	
	$result = array('estado' => 'false');
	return print(json_encode($result));