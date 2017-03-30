<?php 
	// this file will extend PArentClass.php

	class ChildClass extends ParentClass {
		private $noise;
		private $trick;

		public function __construct($sz, $nme, $nse, $trck){
			parent::__construct($sz, $nme);
			$this->noise = $nse;
			$this->trick = $trck;
		}

		public function getEats(){
			return $this->noise;
		}

		public function (){
			return $this->trick;
		}

		public function __toString(){
			
		}

	}
