<?php
	// $host='127.0.0.1';
	// $dbuser='root';
	// $pwd='root';
	// $dbname='php10';
	// $db = new mysqli( $host, $dbuser, $pwd, $dbname);
	// //检查是否连接成功
	// if($db->connect_errno<>0){
	// 	echo "连接失败";
	// 	echo $db->connect_error;
	// 	exit;
	// }
	// //数据传入编码格式设定
	// $db->query("SET NAMES UTF8");
	include('sql.php');
	//反向查找数据
	$sql = "SELECT * FROM msg ORDER BY id DESC";
	//查询结果
	$mysqli_result = $db->query($sql);
	//数据查询判断，找不结果值为false,说明sql语句有问题
	if($mysqli_result ===false ){
		echo "SQL错误";
		exit;
	}
	//var_dump($mysqli_result); 输出查到的对象
	//获取数据
	$rows=[];
	while( $row = $mysqli_result->fetch_array() ){
		$rows[]=$row;
		//$rows[$row['id'] ]
	} 
	// var_dump($rows) //打印循环之后的找到的所有数据
	//分析错误地址：www.sodevel.com/ea/
?>
<!DOCTYPE html>
<html>
<head>
	<title>留言板结合数据库例子</title>
	<meta charset="utf-8">
	<style type="text/css">
		form{
			width: 400px;
			margin: 100px auto;
		}
		.content{
			width: 100%;
			height: 200px;
			margin-bottom: 20px;
			resize: none;
		}
		input[type="text"]{
			width: 100%;
			height: 30px;
			padding: 0 10px;
			box-sizing: border-box;
		}
		input[type="submit"]{
			display: block;
			background-color: #339999;
			color: #fff;
			border: none;
			padding: 5px 15px;
			margin: 15px auto;
		}
		.box{
			width: 400px;
			margin: 20px auto;
		}
		.box h3{ color: #339999; }
		.box p{
			background-color: #999;
			height: 80px;
			line-height: 20px;
			color: #fff
		}
		.box .time{  text-align: right; }
	</style>
</head>
<body>
	<form action="save.php" method="post">
		<textarea class="content" name="content"></textarea>
		<input type="text" name="user">
		<input type="submit" name="" value="发表留言">
	</form>
	<?php
	 foreach( $rows as $row){
	 ?>
	<div class="box">
		<h3>留言人:<?php echo $row['user'];?></h3>
		<p><?php echo $row['content'];?></p>
		<div class="time">留言时间:<?php echo date( "Y-m-d H:i:s", $row['intime'] );?></div>
	</div>
	<?php
	}
	?>
</body>
</html>