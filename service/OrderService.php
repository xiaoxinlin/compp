<?php 
require_once("../dao/DBClass.php");
class OrderService {


	//获取全部订单信息
	function getOrders() {

		$db = new DB();
		$db->get_connection();

		//将用户的id号和用户名保存到一个索引数组中，$id => $username
		$sql = "select id,name from user where id in (select distinct uid from `order` )";
		$result = $db->query($sql);
		$user = array();
		while ($row = mysql_fetch_array($result)) {
			$user[$row['id']] = $row['name'];
		}
		//将订单保存在数组列表中
		$sql = "select * from `order`";
		$result = $db->query($sql);
		$array = array();
		while ($row = mysql_fetch_array($result)) {
			$order = new Order();
			$order->setId($row['id']);

			//这里将userId转换成username
			$order->setUid($user[$row['uid']]);

			$order->setGoods($row['goods']);
			$order->setTotalprice($row['totalprice']);
			$array[] = $order;
		}

		$db->close_connection();
		return $array;
	}

	//删除某个订单
	function delOrder($id) {
		$sql="delect from order where id='$id'";
		$db=new DB();
		$db=get_connection();

		if ($db->update($sql)) {
			$db->close_connection();
			return true;
		}else {
			$db->close_connection();
			return false;
		}
		
	}
	//增加订单
	function addOrder($order){
		$db = new DB();
		$db->get_connection();
		$orderUid = $order->getUid();
		$orderGoods = $order->getGoods();
		$orderTotalprice = $order->getTotalprice();
		$sql = "insert into `order`(uid ,goods,totalprice) value('$orderUid','$orderGoods','$orderTotalprice')";
		$result = $db->update($sql);
		$db->close_connection();
		return $result;
	}

}

?>
