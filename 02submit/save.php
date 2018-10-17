<?php
	$content=$_POST['content'];
	$user=$_POST['user'];
	// $content=$_GET['content'];
	// $user=$_GET['user'];
	//定义函数对数据进行检查
	function post($pp){
		if($pp == ""){
			return false;
		}
		//禁止使用的用户名
		$n = ['张三','李四','王五'];
		foreach ( $n as  $name ) {
			if( $pp == $name ){
				return false;
			}
		}
		return true;
	}
	//调用函数，检查留言内容
	$is = post( $content );
	if( $is == false){
		die("留言内容的数据不正确");
	}
	//调用函数，检查留言人
	$is = post( $user );
	if( $is == false){
		die("留言人的数据不正确");
	}
	/*先循环读取禁止使用的用户名   ，使用if语句，一一的与提交人的留言人进行对比，任何一个相同，代表使用禁止的用户名*/
	var_dump($content,$user)
?>