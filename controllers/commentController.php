<?php
	require_once("../domain/CommentClass.php");
	require_once("../service/CommentService.php");
	session_start();
	$type = $_REQUEST['type'];
	$commentService = new CommentService();

	if ($type == "addComment") {
		//获取商品id和评论内容
		$goodId = $_REQUEST['id'];
		$commentContext = $_REQUEST['comment'];
		//创建评论对象
		$comment = new Comment();
		$comment->setGid($goodId);
		$comment->setContext($commentContext);
		//增加一条评论
		$result = $commentService->addComment($comment);
		//var_dump($result);
		//经过商品控制器，跳转到商品详情页面
		header("Location:./goodController.php?type=getGood&id=$goodId");
	}
?>