<?php
	include_once('../service/GoodService.php');
	require_once("../domain/CartClass.php");
	$type = $_REQUEST['type'];
	$goodService = new GoodService();
	if($type == "addGood"){
		$id =  $_REQUEST['id'];
		session_start();
		$cart = $_SESSION['cart'];
		$goodList = $cart->getGoodList();
		if(array_key_exists ( $id, $goodList)){
			$good = $goodList[$id];
			$good->setNums($good->getNums()+1);
		}else{
			$good = $goodService->getGoodById($id);
		}
		$cart->addGood($good);
		header("Location:../view/cartlist.php");
	}else if($type == "clearCart") {
		session_start();
		$cart = new Cart();
		
		$_SESSION['cart'] = $cart;
		//var_dump($cart);
		header("Location:../view/cartlist.php");
	}elseif ($type == "delGood") {
		$id =  $_REQUEST['id'];
		session_start();
		$cart = $_SESSION['cart'];
		$goodList = $cart->getGoodList();
		unset($goodList[$id]);
		$cart->setGoodList($goodList);
		header("Location:../view/cartlist.php");
	}
?>