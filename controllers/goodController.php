<?php
	include_once('../service/GoodService.php');
	include_once('../service/CommentService.php');
	
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
        $url=$_POST['url'];
       
        $good=new Good();
        $good->setName($name);
        $good->setPrice($price);
        $good->setDescription($desc);
        $good->setCategory($cate);
        $good->setUrl($url);

        if($goodService->addGood($good)){
        	echo "chenggong ";

        }else{
              echo "shibai ";
        }
	}
?>