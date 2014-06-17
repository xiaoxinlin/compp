<?php 
include_once("../dao/DBClass.php");

class UserService {

	//验证用户登录
	function checkUser($user) {

		$sql = "select * from user where id='$user->id' and password='$user->password';";
		$db = new DB();
		$db->get_connection();
		$result =  $db->query($sql);

		if($row = mysql_fetch_array($result)) {
			$user->setNickname($row['name']);
			$user->setPassword($row['nickname']);
			$user->setEmail($row['email']);
			$user->setAuthority($row['authority']);

			$db->close_connection();
			return true;
		}else {
			$db->close_connection();
			return false;
		}
	}

	

	//添加一个用户
	function addUser($user){
	    $sql ="insert into user(name, nickname, password, email, authority) values('$user->name', '$user->nickname', '$user->password', '$user->email', '$user->authority');";
		$db = new DB();
		$db->get_connection();

		/*var_dump($db->update($sql));     true*/

		if ($db->update($sql)) {
			$db->close_connection();
			return true;
		}else {
			$db->close_connection();
			return false;
		}

	}

	//获取用户Id
	function getUserId($name) {
		$sql = "select id from user where name ='$name';";
		$db = new DB();
		$db->get_connection();
		$result =  $db->query($sql);
		/*$id = mysql_insert_id()*/

		if($row = mysql_fetch_array($result)) {
			$id = $row['id'];
			$db->close_connection();
			return $id;
		}else {
			$db->close_connection();
			return false;
		}

	
	}

	//获取全部客户信息
	function getCustomers() {
		$sql = "select id,name,nickname,email from user where authority='customer'";
		$db = new DB();
		$db->get_connection();
		$result = $db->query($sql);

		$array = array();
		while ($row = mysql_fetch_array($result)) {
			$user = new User();
			$user->id = $row['id'];
			$user->name = $row['name'];
			$user->nickname = $row['nickname'];
			$user->email = $row['email'];
			$array[] = $user;

		}

		$db->close_connection();
		return $array;

	}

	//获取全部管理员信息
	function getAdmins() {
		$sql = "select id,name,nickname,email from user where authority='admin'";
		$db = new DB();
		$db->get_connection();
		$result = $db->query($sql);
		

	}

	//删除一个
	function delUser($userId) {
		
	}

}

?>