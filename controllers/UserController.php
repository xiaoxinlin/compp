<?php 
include_once("../service/UserService.php");
include_once("../domain/UserClass.php");
header("Content-type: text/html; charset=utf-8");

$userService = new UserService();
$type = $_POST['type'];

//添加一个客户
if($type == 'addUser') {
	//获得用户输入的信息
	$name = $_POST['name'];
	$nickname= $_POST['nickname'];
	$password = $_POST['password'];
	$password2 = $_POST['password2'];
	$email = $_POST['email'];
	$authority = $_POST['authority'];

	if($password == $password2) {

		$user = new User();
		$user->setName($name);
		$user->setNickname($nickname);
		$user->setPassword($password);
		$user->setEmail($email);
		$user->setAuthority($authority);

		//调用UserService类
/*		$userService = new UserService();*/

		if($userService->addUser($user)){
			$id = $userService->getUserId($name);
			var_dump($id);
			/*header("Location:../view/login.php?id='$id'");*/
			header("Location:../view/register.php?id='$id'");

		}else{
			header("Location:../view/register.php?register_message=errordb");	 
		}	

	}else{
			header("Location:../view/register.php?register_message=error_password");	 
		}	
}


//获取客户信息列表
if($type == 'getCustomers'){
	//获得客户列表	2014年6月15日 16:42:37 xiaoxin
	$result = $userService->getCustomers();
	session_start();
	$_SESSION [ 'allCustomers' ] =  $result;
	//var_dump($result);
	header("Location:../viewBack/back-customer.php");
}



?>