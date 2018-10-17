<?php 
	
	$aa=10;
	function name($nn){
		echo $nn;
	}
	name($aa);
	function bb($nn, $cc){
		$bb=$nn+$cc;
		return $bb;
	};
	echo "<br>";
	echo bb(100,200);
	function gg($bb,$dd){
		return [$bb, $dd];
	};
	$xx=gg(100,200);
	echo "<br>";
	var_dump($xx)
 ?>  