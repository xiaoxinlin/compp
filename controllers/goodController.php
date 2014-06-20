<?php
	include_once('../service/GoodService.php');
	
	$type = $_REQUEST['type'];
	$goodService = new GoodService();
	if($type == "getGoods"){
		$category = $_REQUEST['category'];
		$pageNow = $_REQUEST['pageNow'];
		
		$pageBean = $goodService->getGoods($pageNow,$category);
		session_start();
		$_SESSION['goods'] = $pageBean;
		//var_dump($pageBean);
		header("Location:../view/goodScan.php");
	}else if($type == "getGood"){
		$id =  $_REQUEST['id'];
		$good = $goodService->getGoodById($id);
		session_start();
		$_SESSION['good'] = $good;
		//var_dump($good);
		header("Location:../view/details.php");
	}elseif ($type == "findGoods") {
		$keyword = $_REQUEST['keyword'];
		$pageNow = $_REQUEST['pageNow'];
		$pageBean = $goodService->findGoods($pageNow,$keyword);
		session_start();
		$_SESSION['goods'] = $pageBean;
		//var_dump($pageBean);
		header("Location:../view/goodScan.php");
	}
?>