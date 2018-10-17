<?php 
	$host='127.0.0.1';
	$dbuser='root';
	$pwd='root';
	$dbname='php10';
	$db = new mysqli( $host, $dbuser, $pwd, $dbname);

	if( $db->connect_errno<>0 ){
		echo "连接数据库失败";
		echo $db->connect_error;
	}
	//设定数据库数据传输的编码
	$db->query("SET NAMES UTF8");
 ?>