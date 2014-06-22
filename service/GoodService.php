<?php 
	require_once("../dao/DBClass.php");
	require_once("../domain/GoodClass.php");
	include_once('../domain/PageClass.php');
class GoodService {

	//通过一个pageBean和category获取分页
	function getPage($pageBean,$category) {
		$pageBean->setCategory($category);
		$db = new DB();
		$db->get_connection();
		//查询商品总数
		$sql = "select count(*) from good where category = '$category'";
		$result = $db->query($sql);
		if( $row = mysql_fetch_array($result) ){
			$pageBean->setRowCount($row[0]);
			$pageBean->setPageCount( floor( ($pageBean->getRowCount()-1)/$pageBean->getPageSize() )+1 );
		}
		$start = ( $pageBean->getPageNow()-1 ) * $pageBean->getPageSize();
		$size = $pageBean->getPageSize();
		$sql = "select * from good where category = '$category' limit $start ,$size";
		$result = $db->query($sql);
		while( $row = mysql_fetch_array($result) ){
			$good = new Good();
			$good->setId($row['id']);
			$good->setName($row['name']);
			$good->setPrice($row['price']);
			$good->setDescription($row['description']);
			$good->setCategory($row['category']);
			$good->setUrl($row['url']); 
			$pageBean->setGoodList($good);
		}
		$db->close_connection();
	}
	//全部商品的分页
	function getAllPage($pageBean) {
		$pageBean->setCategory("全部商品");
		$db = new DB();
		$db->get_connection();
		//查询商品总数
		$sql = "select count(*) from good";
		$result = $db->query($sql);
		if( $row = mysql_fetch_array($result) ){
			$pageBean->setRowCount($row[0]);
			$pageBean->setPageCount( floor( ($pageBean->getRowCount()-1)/$pageBean->getPageSize() )+1 );
		}
		$start = ( $pageBean->getPageNow()-1 ) * $pageBean->getPageSize();
		$size = $pageBean->getPageSize();
		$sql = "select * from good limit $start ,$size";
		$result = $db->query($sql);
		while( $row = mysql_fetch_array($result) ){
			$good = new Good();
			$good->setId($row['id']);
			$good->setName($row['name']);
			$good->setPrice($row['price']);
			$good->setDescription($row['description']);
			$good->setCategory($row['category']);
			$good->setUrl($row['url']); 
			$pageBean->setGoodList($good);
		}
		$db->close_connection();
	}
	//通过关键字搜索商品
	function findGoods($pageNow,$keyword){
		$pageBean = new PageBean();
		$pageBean->setPageSize(10);
		$pageBean->setPageNow($pageNow);
		$this->getPageByKey($pageBean,$keyword);
		return $pageBean;
	}
	function getPageByKey($pageBean,$keyword) {
		$pageBean->setCategory("全部商品");
		$db = new DB();
		$db->get_connection();
		//查询商品总数
		$sql = "select count(*) from good where name like '%$keyword%'";
		$result = $db->query($sql);
		if( $row = mysql_fetch_array($result) ){
			$pageBean->setRowCount($row[0]);
			$pageBean->setPageCount( floor( ($pageBean->getRowCount()-1)/$pageBean->getPageSize() )+1 );
		}
		$start = ( $pageBean->getPageNow()-1 ) * $pageBean->getPageSize();
		$size = $pageBean->getPageSize();
		$sql = "select * from good where name like '%$keyword%' limit $start ,$size";
		$result = $db->query($sql);
		while( $row = mysql_fetch_array($result) ){
			$good = new Good();
			$good->setId($row['id']);
			$good->setName($row['name']);
			$good->setPrice($row['price']);
			$good->setDescription($row['description']);
			$good->setCategory($row['category']);
			$good->setUrl($row['url']); 
			$pageBean->setGoodList($good);
		}
		$db->close_connection();
	}

	//添加商品
	function addGood() {

	}

	//获取全部商品信息
	function getGoods($pageNow,$type){
		$pageBean = new PageBean();
		$pageBean->setPageSize(10);
		$pageBean->setPageNow($pageNow);
		$this->getPage($pageBean,$type);
		return $pageBean;
	}

	//获取某个商品信息
	function getGoodById($id) {
		$db = new DB();
		$db->get_connection();
		$sql = "select * from good where id = $id";
		$result = $db->query($sql);
		$good = new Good();
		if( $row = mysql_fetch_array($result) ){
			
			$good->setId($row['id']);
			$good->setName($row['name']);
			$good->setPrice($row['price']);
			$good->setDescription($row['description']);
			$good->setCategory($row['category']);
			$good->setUrl($row['url']); 
		}
		return $good;
	}


	//更新某个商品信息
	function updateGood($id) {

	}

	//删除某个商品
	function delGood($id) {

	}

	//上传文件
	function upload(){
		if ((($_FILES["file"]["type"] == "image/gif")
		|| ($_FILES["file"]["type"] == "image/jpeg")
		|| ($_FILES["file"]["type"] == "image/pjpeg"))
		&& ($_FILES["file"]["size"] < 20000))
		  {
		  if ($_FILES["file"]["error"] > 0)
		    {
		    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
		    }
		  else
		    {
		    echo "Upload: " . $_FILES["file"]["name"] . "<br />";
		    echo "Type: " . $_FILES["file"]["type"] . "<br />";
		    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
		    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

		    if (file_exists("../images/" . $_FILES["file"]["name"]))
		      {
		      echo $_FILES["file"]["name"] . " already exists. ";
		      }
		    else
		      {
		      move_uploaded_file($_FILES["file"]["tmp_name"],
		      "../images/" . $_FILES["file"]["name"]);
		      echo "Stored in: " . "../images/" . $_FILES["file"]["name"];
		      }
		    }
		  }
		else
		  {
		  echo "Invalid file";
		  }
	}







}

?>