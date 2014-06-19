<?php 
include_once("../service/UserService.php");
include_once("../domain/UserClass.php");
require_once("../domain/CartClass.php");


$id = $_POST['id'];
$password = $_POST['password'];

$user = new User();
$user->setId($id);
$user->setPassword($password);

//调用UserService类
$userService = new UserService();

if($userService->checkUser($user)) {
	if($user->authority=="customer"){
		$cart = new Cart();
		session_start();
		$_SESSION['user'] = $user;
		$_SESSION['cart'] = $cart;
		header("Location:../index.php");
	}else{
		header("Location:../view/login.php?login_message=error2");
	}
	

}else {
	header("Location:../view/login.php?login_message=error1");
}

?>