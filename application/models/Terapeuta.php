<?php 

	class Terapeuta{
		
		// ** Declaretion of attributes ** //
		private $id_terapeuta;
		private $nombre_completo;
		
		// ** Method Constructor ** //
		public function __construct($id_terapeuta, $nombre_completo){
			$this->setIdTerapeuta($id_terapeuta);
			$this->setNombreCompleto($nombre_completo);
		}
		
		// ** Getters and setters ** //
		public function getIdTerapeuta(){return $this->id_terapeuta;}
		
		public function setIdTerapeuta($id_terapeuta){$this->id_terapeuta = $id_terapeuta;}
		
		public function getNombreCompleto(){return $this->nombre_completo;}
		
		public function setNombreCompleto($nombre_completo){$this->nombre_completo = $nombre_completo;}
		
	} // End class