<?php
	
	include('input.php');

	$content=$_POST['content'];
	$user=$_POST['user'];
	
	$input=new input();
	//调用函数，检查留言内容
	$is = $input->post( $content );
	if( $is == false){
		die("留言内容的数据不正确");
	}
	//调用函数，检查留言人
	$is =$input->post( $user );
	if( $is == false){
		die("留言人的数据不正确");
	}
	/*先循环读取禁止使用的用户名   ，使用if语句，一一的与提交人的留言人进行对比，任何一个相同，代表使用禁止的用户名*/
	var_dump($content,$user)
?>