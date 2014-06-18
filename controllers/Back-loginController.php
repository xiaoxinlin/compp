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
	if($user->authority=="admin"){
		session_start();
		$_SESSION['user'] = $user;
		header("Location:../controllers/UserController.php?type=getCustomers");
	}else{
		header("Location:../viewBack/back-login.php?back_login_message=error2");
	}

}else {
	header("Location:../viewBack/back-login.php?back_login_message=error1");
}



?>