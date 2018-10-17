<?php 
	class name{
		public $a1=10;
		public $b1=20;

		public function __construct($a,$b){
			$this->a1 = $a;
			$this->b1 = $b;
		}
		public function s1(){
			$this->s2();
		}
		public function s2(){
			echo $this->a1;
		}
	}

	$name = new name('a','b');
	$name->s1()
 ?>       