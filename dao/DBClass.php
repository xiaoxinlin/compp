<?php 

class DB {

	public function get_connection(){

		$hostname = "localhost"; 
		$database = "compp"; 
		$username = "root"; 
		$password = "root"; 
		$db_connection = mysql_connect($hostname, $username, $password) or die(mysql_error()); //连接数据库服务器

		mysql_query("set names 'utf-8'");//设置字符集
		mysql_select_db($database, $db_connection) or die(mysql_error());
	}

	public function update($sql) {
		$result = mysql_query($sql);
		return $result;
	}

	public function query($sql) {
		$resultSet = mysql_query($sql);
		return $resultSet;
	}

	public function close_connection(){
		global $db_connection;
		if($db_connection){
			mysql_close($db_connection) or die(mysql_error());
		}
	}
}

?>
