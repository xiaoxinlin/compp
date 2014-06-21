<?php 
require_once("../dao/DBClass.php");
require_once("../domain/CommentClass.php");
class CommentService {

	//添加评论
	function addComment($comment) {
		$db = new DB();
		$db->get_connection();
		$gId = $comment->getGid();
		$context = $comment->getContext();
		$sql = "insert into `comment`(gid,context) values('$gId','$context')";
		$result = $db->update($sql);
		$db->close_connection();
		return $result;
	}
	
	//获取某个商品的全部评论
	function getCommentByGoodId($goodId) {
		//获得数据库连接
		$db = new DB();
		$db->get_connection();
		//查询某一商品的评论
		$sql = "select * from `comment` where gid = $goodId";

		$result = $db->query($sql);
		//创建一个评论列表
		$commentList = array();
		//将数据封装到Comment对象中
		while( $row = mysql_fetch_array($result) ){
			$comment = new Comment();
			$comment->setId($row['id']);
			$comment->setGid($row['gid']);
			$comment->setContext($row['context']);
			//将comment对象放入Comment列表
			$commentList[] = $comment;
		}
		//关闭资源
		$db->close_connection();
		//返回comment列表
		return $commentList;
	}
}

?>