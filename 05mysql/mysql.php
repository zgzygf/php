<?php 
	//预先定义数据库链接参数
	$host = '127.0.0.1';
	$user = 'root';
	$pwd = 'root';
	$dbname = 'php10';
	//链接到数据库
	$db = new mysqli( $host, $user, $pwd, $dbname ); //php自带方法
	//检查是否成功
	if( $db->connect_errno<>0 ){
		echo "链接失败 ,";
		echo $db->connect_error;
	}
	//编写SQL
	// $sql = "INSERT INTO msg (content,user,intime) VALUES ('刘菲菲','杨国凤',392712)";
	//$sql = "SELECT * FROM msg ORDER BY id DESC";//数据id从大到小排列
	$sql = "SELECT * FROM msg WHERE id>30";
	//执行SQL
	$mysqli_result = $db->query( $sql );//对于查询数据，找到为数组，找不到返回null
	if($mysqli_result ===false ){
		echo "SQL错误";
		exit;
	}
	/*
		首次调用显示最新的一条记录
		重复调用，依次显示后面的记录
		如果没有记录可显示，就返回null
	*/
		$rows = [];
		while( $row = $mysqli_result->fetch_array( MYSQLI_ASSOC )){
			// $rows[] = $row;
			$rows[ $row['id'] ]= $row; //取每一项数组的id值做键
		}
		var_dump( $rows );
	// $is = $db->query( $sql );
	//var_dump($is);//插入成功返回值true,反之false
	//判断执行是否成功
	// if( $is == true){
	// 	echo "插入成功";
	// }else{
	// 	echo "插入失败";
	// }
 ?>