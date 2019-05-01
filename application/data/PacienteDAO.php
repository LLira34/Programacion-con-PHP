<?php
	include 'models/Paciente.php';
	
	class PacienteDAO{
		
		// Save paciente
		public static function save($paciente){
			$db = Db::getConnect();
			$insert = $db->prepare('INSERT INTO paciente 
			VALUES (null, null, :fecha, :nombre, :fecha_nac,:edad, :genero)');

			$insert->bindValue('fecha',$paciente->getFecha());
			$insert->bindValue('nombre', $paciente->getNombre());
			$insert->bindValue('fecha_nac', $paciente->getFechaNac());
			$insert->bindValue('edad', $paciente->getEdad());
			$insert->bindValue('genero', $paciente->getGenero());
			$insert->execute();
		}

		// List paciente
		public static function all(){
			$db = Db::getConnect();
			
			$listPacientes = [];
			$select = $db->query('SELECT * FROM paciente ORDER BY num_expediente');
			foreach ($select->fetchAll() as $paciente) {
				$listPacientes[] = new Paciente($paciente['id'], $paciente['num_expediente'], $paciente['fecha'], $paciente['nombre'],$paciente['fecha_nac'], $paciente['edad'], $paciente['genero']); 
			}
			
			return $listPacientes;
		}
		
		// Search by id
		public static function searchById($id){
			$db = Db::getConnect();
			
			$select = $db->prepare('SELECT * FROM paciente WHERE id = :id');
			$select->bindValue('id', $id);
			$select->execute();
			
			$search = $select->fetch();
			$paciente = new Paciente($search['id'], $search['num_expediente'], $search['fecha'], $search['nombre'],$search['fecha_nac'], $search['edad'], $search['genero']); 
			return $paciente;
		}
		
		// Update paciente
		public static function update($paciente){
			$db = Db::getConnect();
			
			$update = $db->prepare('UPDATE paciente 
			SET num_expediente=:num_expediente, fecha=:fecha, nombre=:nombre, 
			fecha_nac=:fecha_nac, edad=:edad, genero=:genero 
			WHERE id = :id');
			
			$update->bindValue('num_expediente', $paciente->getNumExpediente());
			$update->bindValue('fecha',$paciente->getFecha());
			$update->bindValue('nombre', $paciente->getNombre());
			$update->bindValue('fecha_nac', $paciente->getFechaNac());
			$update->bindValue('edad', $paciente->getEdad());
			$update->bindValue('genero', $paciente->getGenero());
			$update->bindValue('id', $paciente->getId());
			$update->execute();
		}

		// Delete paciente
		public static function delete($id){
			$db = Db::getConnect();
			$delete = $db->prepare('DELETE FROM paciente WHERE id = :id');
			$delete->bindValue('id', $id);
			$delete->execute();
		}
		
	} // End class