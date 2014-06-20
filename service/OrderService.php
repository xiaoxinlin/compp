<?php 
require_once("../dao/DBClass.php");
class OrderService {


	//获取全部订单信息
	function getOrders() {

	}

	//删除某个订单
	function delOrder($id) {
		
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