<?php 
	class name{
		public $s1 = 0;
		public $s2 = 1; //定义类属性

		public function s1(){ //定义类方法
			$this->s2();//$this用在类的内部，调用自己的兄弟姐妹
		}

		public function s2(){
			echo "s2";
		}
	}
	$name = new name();//根据name类来实例化对象
	echo $name->s2;
	echo "<br>";
	$name->s1();

 ?>  