<?php 

class Order {

	private $id;
	private $uid;
	private $goods;
	private $totalprice;

	function _construct($id, $uid, $goods, $totalprice) {
		$this->id = $id;
		$this->uid = $uid;
		$this->goods = $goods;
		$this->totalprice = $totalprice;
	}

	public function setId($id) {
		$this->id = $id;
	} 
	public function getId() {
		return $this->id;
	}

	public function setUid($uid) {
		$this->uid = $uid;
	} 
	public function getUid() {
		return $this->uid;
	}

	public function setGoods($goods) {
		$this->goods = $goods;
	} 
	public function getGoods() {
		return $this->goods;
	}

	public function setTotalprice($totalprice) {
		$this->totalprice = $totalprice;
	} 
	public function getTotalprice() {
		return $this->totalprice;
	}


}

?>