<?php
	include 'models/Terapeuta.php';

	class TerapeutaDAO{
		
		// Save terapeuta
		public static function save($terapeuta){
			$db = Db::getConnect();
			$insert = $db->prepare('INSERT INTO terapeuta VALUES(null, :nombre_completo)');
			
			$insert->bindValue('nombre_completo', $terapeuta->getNombreCompleto());
			$insert->execute();
		}
		
		// List terapeuta
		public static function all(){
			$db = Db::getConnect();
			
			$listTerapeutas = [];
			$select = $db->query('SELECT * FROM terapeuta ORDER BY id_terapeuta');
			foreach($select->fetchAll() as $terapeuta){
				$listTerapeutas[] = new Terapeuta($terapeuta['id_terapeuta'], $terapeuta['nombre_completo']);
			}
			return $listTerapeutas;
		}
		
		// Search by id
		public static function searchById($id_terapeuta){
			$db = Db::getConnect();
			
			$select = $db->prepare('SELECT * FROM terapeuta WHERE id_terapeuta = :id_terapeuta');
			$select->bindValue('id_terapeuta', $id_terapeuta);
			$select->execute();
			
			$search = $select->fetch();
			$terapeuta = new Terapeuta($search['id_terapeuta'], $search['nombre_completo']);
			return $terapeuta;
		}
		
		//Update terapeuta
		public static function update($terapeuta){
			$db = Db::getConnect();
			
			$update = $db->prepare('UPDATE terapeuta SET nombre_completo = :nombre_completo WHERE id_terapeuta = :id_terapeuta');
			$update->bindValue('nombre_completo', $terapeuta->getNombreCompleto());
			$update->bindValue('id_terapeuta', $terapeuta->getIdTerapeuta());
			$update->execute();
		}
		
		// Delete terapeuta
		public static function delete($id_terapeuta){
			$db = Db::getConnect();
			$delete = $db->prepare('DELETE FROM terapeuta WHERE id_terapeuta = :id_terapeuta');
			$delete->bindValue('id_terapeuta', $id_terapeuta);
			$delete->execute();
		}
		
	} // End class