<?php 

	class Calendar{
		
		// Declaretion of attributes 
		private $id;
		private $title;
		private $body;
		private $url;
		private $class;
		private $start;
		private $end;
		private $startNormal;
		private $endNormal;
		private $idTerapeuta;
		
		// Method Constructor 
		public function __construct($id, $title, $body, $url, $class, $start, $end, $startNormal, $endNormal, $idTerapeuta){
			$this->setId($id);
			$this->setTitle($title);
			$this->setBody($body);
			$this->setUrl($url);
			$this->setClass($class);
			$this->setStart($start);
			$this->setEnd($end);
			$this->setStartNormal($startNormal);
			$this->setEndNormal($endNormal);
			$this->setIdTerapeuta($idTerapeuta);
		}
		
		// Getters and setters 
		public function getId(){return $this->id;}

		public function setId($id){$this->id = $id;}

		public function getTitle(){return $this->title;}

		public function setTitle($title){$this->title = $title;}

		public function getBody(){return $this->body;}

		public function setBody($body){$this->body = $body;}

		public function getUrl(){return $this->url;}

		public function setUrl($url){$this->url = $url;}

		public function getClass(){return $this->class;}

		public function setClass($class){$this->class = $class;}

		public function getStart(){return $this->start;}

		public function setStart($start){$this->start = $start;}

		public function getEnd(){return $this->end;}

		public function setEnd($end){$this->end = $end;}

		public function getStartNormal(){return $this->startNormal;}

		public function setStartNormal($startNormal){$this->startNormal = $startNormal;}

		public function getEndNormal(){return $this->endNormal;}

		public function setEndNormal($endNormal){$this->endNormal = $endNormal;}

		public function getIdTerapeuta(){return $this->idTerapeuta;}

		public function setIdTerapeuta($idTerapeuta){$this->idTerapeuta = $idTerapeuta;}
		
	} // End class