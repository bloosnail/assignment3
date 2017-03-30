<?php
	// This is the file for the parent class
	/*Include the following:

	-function(s) that will take any type of paramters you want (string, number, array, etc), work with those parameters and deliver some sort of output.
	-make sure to use at least 2 php magic methods (one you pretty much have to have)
	-for example you could have the class accept text values and put them together for display (similar to what we did in class. you should try to come up with somethig original though)
	*/
	
	//animal class
	class ParentClass {
		private $name;
		private $kind;

		public function __construct($nm, $knd){
			$this->name = $nme;
			$this->kind = $kind;
		}
	
		public function getName(){
			return $this->name;
		}
	
		public function getKind(){
			return $this->kind;
		}

		public function __toString() {
			return $this->kind . " " . $this->name;
		}

	
	}

	
