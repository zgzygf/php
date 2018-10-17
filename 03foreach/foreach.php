<?php 
	$a=[
		'a'=>1,
		'b'=>2,
		'c'=>3
	];
	foreach ($a as $key => $value) {
		echo "$key";
		echo "<br>";
		echo "$value";
		echo "<br>";
	};
	for($i=0; $i<10; $i++) {
		if($i==5){
			continue;//条件满足跳过本次循环
		}
		echo $i;
	}
 ?>