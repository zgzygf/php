<?php 
	class input{
		public function post($name){
			if( $name =="" ){
				return false;
			}

			$disname=['张三','李四','王五'];
			foreach ($disname as $value) {
				if( $name == $value ){
					return false;
				}
			}
			return true;
		}
	}
 ?>