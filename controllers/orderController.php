<?php
	require_once("../domain/OrderClass.php");
	require_once("../domain/UserClass.php");
	require_once("../domain/GoodClass.php");
	require_once("../domain/CartClass.php");
	require_once("../service/OrderService.php");
	session_start();
	$type = $_REQUEST['type'];
	$orderService = new OrderService();
	if($type == "addOrder"){
		$order = new Order();
		$cart = $_SESSION['cart'];
		$order->setTotalprice($cart->getTotalPrice());
		$goodList = $cart->getGoodList();
		//var_dump($goodList);
		$goods = "";
		for ($i=0; $i <count($goodList) ; $i++) { 
			$keys = array_keys ( $goodList );
			$good = $goodList[$keys[$i]];
			$goodId = $good->getId();
			$goodNums = $good->getNums();
			$goods = $goods ."gid:$goodId,nums:$goodNums#";
		}
		$order->setGoods($goods);

		$user = $_SESSION['user'];
		$userId = $user->getId();
		$order->setUid($userId);
		//var_dump($order);
		$result = $orderService->addOrder($order);
		//var_dump($result);
		$goodList = array();
		$cart->setGoodList($goodList);
		header("Location:../view/submitOrder.php");
	}elseif ($type == "getOrders") {
		//获取订单列表
		$result = $orderService->getOrders();
		$_SESSION [ 'allOrders' ] =  $result;
		//var_dump($result);
		header("Location:../viewBack/back-orders.php");
	}
?>