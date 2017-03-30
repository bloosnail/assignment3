<?php 
	// fish species class
	class ChildClass extends ParentClass {
		
		private $size;
		private $eats;
		private $species;
		private $marks;
		private $lives;

		//clone
		private $thisObject;

		public function __construct($sz, $ets, $spec, $mrk, $lvs){
			parent::__construct($sz, $ets, $spec);
			$this->mark = $mrk;
			$this->lives = $lvs;
			
			//clone
			$this->thisObject = new stdClass();
		}
		
		// on clone, make a deep copy of this object by cloning internal member;
		public function __clone() {
			$this->_thisObject = clone $this->_thisObject;
		}
		
		public function __toString(){
			return parent::__toString() . $this->spec . ' are usually ' . $this->mark . ' and generally live in ' . $this->lives . ".";
		}

	}
