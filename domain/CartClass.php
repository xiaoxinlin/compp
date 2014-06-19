<?php
	require_once("../domain/GoodClass.php");
	class Cart{


		private $goodList =  array();

		public function getTotalPrice(){

			for ($i=0; $i < count($this->goodList); $i++) { 
				$goodList = $this->goodList;
				$keys = array_keys ( $goodList );
				$good = $goodList[$keys[$i]];
				$totalPrice = $totalPrice + ($good->getNums()*$good->getPrice());
			}
			return $totalPrice;
		}
		public function addGood($good){
			$id = $good->getId();
			$this->goodList[$id] = $good;
		}
		public function getGoodList(){
			return $this->goodList;
		}
	}
?>