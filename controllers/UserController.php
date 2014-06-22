<?php 
include_once("../service/UserService.php");
include_once("../domain/UserClass.php");
header("Content-type: text/html; charset=utf-8");
session_start();

$userService = new UserService();
$type = $_REQUEST['type'];

//添加一个客户
if($type == 'addUser') {
	//获得用户输入的信息
	$name = $_POST['name'];
	$nickname= $_POST['nickname'];
	$password = $_POST['password'];
	//$password2 = $_POST['password2'];
	$email = $_POST['email'];
	$authority = $_POST['authority'];


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
		//var_dump($id);
		if($user->authority==customer){
		header("Location:../view/login.php?id=$id");
	  }else if($user->authority==admin)
		//header("Location:../view/register.php?id='$id'");
	    header("Location:../viewBack/back-login.php?id=$id");

	}else{
		header("Location:../view/register.php?register_message=errordb");
	}	


}else if($type == 'getCustomers'){
	//获取客户信息列表
	//获得客户列表	2014年6月15日 16:42:37 xiaoxin
	$result = $userService->getCustomers();
	$_SESSION [ 'allCustomers' ] =  $result;
	//var_dump($result);
	header("Location:../viewBack/back-customer.php");


}else if($type == 'logout'){
	//注销用户，删除用户的session
	session_destroy();
	header("Location:../view/login.php");


}else if($type == 'getAdmins'){
	//获取管理员列表
	$result = $userService->getAdmins();
	$_SESSION [ 'allAdmins' ] =  $result;
	//var_dump($result);
	header("Location:../viewBack/back-admin.php");
}
else if($type=='delUser'){
    $userId = $_REQUEST['id'];
    var_dump( $userId );
    if($userService->delUser($userId)){
    	echo "successful";
    }else{
    	echo "fail";
    }

}



?>
