<?php 
	include('input.php');
	include('sql.php');
	$content = $_POST['content'];
	$user = $_POST['user'];
	
	$input=new input();
	$is=$input->post( $content );
	if($is == false ){
		die("留言内容数据不正确");
	}
	$is=$input->post( $user );
	if($is == false ){	
		die("留言人数据不正确");
	}
	$time = time();
	$sql = "INSERT INTO msg (content, user, intime) values ('{$content}', '{$user}', '{$time}')";
	$is=$db->query($sql);
	// var_dump( $is );
	header("location:test.php");
 ?>