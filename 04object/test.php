<?php 
	include('Magic.php');
	echo "<br>";
	for($i=0; $i<10; $i++){
		if($i==5){
			continue;
		}
		echo $i;
	}
	echo "<br>";
	$name = new name('30lkkj','b2');
	$name->s1();
	echo "<br>";
	echo $name->b1;
?>