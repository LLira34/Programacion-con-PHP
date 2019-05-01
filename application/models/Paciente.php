<?php

	class Paciente{
		
		// Declaretion of attributes 
		private $id;
		private $num_expediente;
		private $fecha;
		private $nombre;
		private $fecha_nac;
		private $edad;
		private $genero;

		// Method Constructor 
		public function __construct($id, $num_expediente, $fecha, $nombre, $fecha_nac, $edad, $genero){
			$this->setId($id);
			$this->setNumExpediente($num_expediente);
			$this->setFecha($fecha);
			$this->setNombre($nombre);
			$this->setFechaNac($fecha_nac);
			$this->setEdad($edad);
			$this->setGenero($genero);
		}
		
		// Getters and setters 
		public function getId(){return $this->id;}

		public function setId($id){$this->id = $id;}

		public function getNumExpediente(){return $this->num_expediente;}

		public function setNumExpediente($num_expediente){$this->num_expediente = $num_expediente;}

		public function getFecha(){return $this->fecha;}

		public function setFecha($fecha){$this->fecha = $fecha;}

		public function getNombre(){return $this->nombre;}

		public function setNombre($nombre){$this->nombre = $nombre;}

		public function getFechaNac(){return $this->fecha_nac;}

		public function setFechaNac($fecha_nac){$this->fecha_nac = $fecha_nac;}

		public function getEdad(){return $this->edad;}

		public function setEdad($edad){$this->edad = $edad;}

		public function getGenero(){return $this->genero;}

		public function setGenero($genero){$this->genero = $genero;}

	} // End
	
	