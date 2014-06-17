<?php 
include_once("../service/UserService.php");
include_once("../domain/UserClass.php");


$id = $_POST['id'];
$password = $_POST['password'];



$user = new User();
$user->setId($id);
$user->setPassword($password);

//调用UserService类的验证用户登录方法
$userService = new UserService();

if($userService->checkUser($user)) {
	session_start();
	$_SESSION['user'] = $user;

	//调用获取全部客户信息方法
	$userService->getCustomers();


	header("Location:../viewBack/back-customer.php");

}else {
	header("Location:../viewBack/back-login.php?back_login_message=error");
}



?>