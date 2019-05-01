<?php

	class User{
		
		// Declaretion of attributes
		private $id;
		private $cveUsu;
		private $pasUsu;
		private $nomUsu;
		private $rol;
		
		function __construct(){}
		
		// Getters and setters
		public function getId(){return $this->id;}

		public function setId($id){$this->id = $id;}

		public function getCveUsu(){return $this->cveUsu;}

		public function setCveUsu($cveUsu){$this->cveUsu = $cveUsu;}

		public function getPasUsu(){return $this->pasUsu;}

		public function setPasUsu($pasUsu){$this->pasUsu = $pasUsu;}

		public function getNomUsu(){return $this->nomUsu;}

		public function setNomUsu($nomUsu){$this->nomUsu = $nomUsu;}

		public function getRol(){return $this->rol;}

		public function setRol($rol){$this->rol = $rol;}
	}