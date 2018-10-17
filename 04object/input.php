<?php 
	//定义函数对数据进行检查
	class input{
		public function post($pp){
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
	} 
 ?>  