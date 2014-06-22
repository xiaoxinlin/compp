<?php
	include_once('../service/GoodService.php');
	include_once('../service/CommentService.php');
	include_once('../domain/PageClass.php');
	
	$type = $_REQUEST['type'];
	$goodService = new GoodService();
	$commentService = new CommentService();

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
		$commentList = $commentService->getCommentByGoodId($id);
		session_start();
		$_SESSION['good'] = $good;
		$_SESSION['commentList'] = $commentList;
		//var_dump($good);
		//var_dump($commentList);
		header("Location:../view/details.php");
	}else if ($type == "findGoods") {
		$keyword = $_REQUEST['keyword'];
		$pageNow = $_REQUEST['pageNow'];
		$pageBean = $goodService->findGoods($pageNow,$keyword);
		session_start();
		$_SESSION['goods'] = $pageBean;
		//var_dump($pageBean);
		header("Location:../view/goodScan.php");
	}else if($type=="addGood"){
        //获取商品的信息
        $name = $_POST['goodname'];
        $price=$_POST['price'];
        $desc=$_POST['desc'];
        $cate=$_POST['cate'];
        //$url=$_POST['url'];
        $url = $goodService->upload($cate);
       
        $good=new Good();
        $good->setName($name);
        $good->setPrice($price);
        $good->setDescription($desc);
        $good->setCategory($cate);
        $good->setUrl($url);

        if($goodService->addGood($good)){
        	header("Location:./goodController.php?type=getGoodList");

        }else{
              echo "shibai ";
        }
	}elseif ($type == "getGoodList") {
		$pageBean = new PageBean();
		$pageBean->setPageSize(5);
		$pageBean->setPageNow(1);
		$goodService->getAllPage($pageBean);
		session_start();
		$_SESSION['goodList'] = $pageBean;
		//var_dump($pageBean);
		header("Location:../viewBack/back-goods.php");
	}elseif ($type == "delGood") {
		$id =  $_REQUEST['id'];
		$goodService->delGood($id);
		header("Location:./goodController.php?type=getGoodList");
	}
?>