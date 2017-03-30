<?php
	//fish class
	class ParentClass {
		private $size;
		private $eats;
		private $species;
		
		public function __construct($sz, $ets, $spec){
			$this->size = $sz;
			$this->eats = $ets;
			$this->spec = $spec;
		}

		public function __toString() {
			return $this->spec .' are usually ' . $this->size . ' in size and generally eat ' . $this->eats . '. ';
		}

	
	}

	
