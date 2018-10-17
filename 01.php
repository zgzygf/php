<?php
	$arr1=[1,2,3,4]; //索引数组-自动赋值0,1,2...
	$arr2=[1,2,"asdf"];
	$arr3=[
		'a' =>1,
		'b' =>2,
		'c' =>true,
	];
	var_dump($arr1);
	echo "<br>";
	var_dump($arr3);
	$arr3['d']=4;//增加数组值
	$arr3['b']=55;//修改
	unset($arr3['c']);//删除
	echo "<br>";
	echo $arr3['a'];//查
	echo "<br>";
	var_dump($arr2,$arr3)
?>  