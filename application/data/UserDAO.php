<?php
	include_once (__DIR__ . '\..\models\User.php');
	require_once("Connection.php");
	
	class UserDAO{
		
		// Save user
		public static function save($user){
			$db = Db::getConnect();
			$insert = $db->prepare('INSERT INTO usuario VALUES (null, :cveUsu, :pasUsu, :nomUsu, :rol)');

			$insert->bindValue('cveUsu', $user->getCveUsu());
			$insert->bindValue('pasUsu', $user->getPasUsu());
			$insert->bindValue('nomUsu', $user->getNomUsu());
			$insert->bindValue('rol', $user->getRol());
			$insert->execute();
		}
		
		// List users
		public static function all(){
			$db = Db::getConnect();
			
			$listUsers = [];
			$select = $db->query('SELECT * FROM usuario ORDER BY id');
			foreach ($select->fetchAll() as $user) {
				$listUsers[] = new User($user['id'], $user['cveUsu'], $user['pasUsu'], $user['nomUsu'], $user['rol']); 
			}
			
			return $listUsers;
		}
		
		// Search by id
		public static function searchById($id){
			$db = Db::getConnect();
			
			$select = $db->prepare('SELECT * FROM usuario WHERE id = :id');
			$select->bindValue('id', $id);
			$select->execute();
			
			$search = $select->fetch();
			$user = new User($search['id'], $search['cveUsu'], $search['pasUsu'], $search['nomUsu'],$search['rol']); 
			return $user;
		}
		
		// Update user
		public static function update($user){
			$db = Db::getConnect();
			
			$update = $db->prepare('UPDATE usuario SET cveUsu=:cveUsu, pasUsu=:pasUsu, nomUsu=:nomUsu, 
			rol=:rol WHERE id = :id');
			
			$update->bindValue('cveUsu',$user->getCveUsu());
			$update->bindValue('pasUsu', $user->getPasUsu());
			$update->bindValue('nomUsu', $user->getNomUsu());
			$update->bindValue('rol', $user->getRol());
			$update->bindValue('id', $user->getId());
			$update->execute();
		}
		
		// Delete user
		public static function delete($id){
			$db = Db::getConnect();
			$delete = $db->prepare('DELETE FROM usuario WHERE id = :id');
			$delete->bindValue('id', $id);
			$delete->execute();
		}
		
		/**
		 * Method used to validate the login
		 *
		 * @param      object         $user
		 * @return     boolean
		 */
		public static function login($user){
			$db = Db::getConnect();
			$result = $db->prepare('SELECT * FROM usuario WHERE cveUsu = :cveUsu AND pasUsu = :pasUsu');
			$result->bindValue('cveUsu', $user->getCveUsu());
			$result->bindValue('pasUsu', $user->getPasUsu());
			$result->execute();
			
			if($result->rowCount() > 0){
				$rows = $result->fetch();
				if($rows['cveUsu'] == $user->getCveUsu() && 
				   $rows['pasUsu'] == $user->getPasUsu()){
					return true;
				}
			}
			return false;
		}
		
		/**
		 * Method used to obtain a user
		 *
		 * @param      object         $user
		 * @return     object
		 */
		public static function getUser($user){
			$db = Db::getConnect();
			$result = $db->prepare("SELECT id, cveUsu, nomUsu, rol FROM usuario WHERE cveUsu = :cveUsu AND pasUsu = :pasUsu");
			$result->bindValue('cveUsu', $user->getCveUsu());
			$result->bindValue('pasUsu', $user->getPasUsu());
			$result->execute();
			
			$rows = $result->fetch();
			
			$user = new User();
			$user->setId($rows['id']);
			$user->setCveUsu($rows['cveUsu']);
			$user->setNomUsu($rows['nomUsu']);
			$user->setRol($rows['rol']);
			
			return $user;
		}
		
	} // End class