<?php


class PageBean
{
	//每一页的个数
	private $pageSize = 1;
	//总页数
	private $pageCount = 0;
	//当前页
	private $pageNow = 1;
	//总行数
	private $rowCount = 0;
	//取回来的数据
	private $goodList = array();

	function _construct($pageSize,$pageNow)
	{
		$this->pageSize = $pageSize;
		$this->pageNow = $pageNow;
	}

	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
	}

	public function getPageSize(){
		return $this->pageSize;
	}
	public function setPageNow($pageNow){
		$this->pageNow = $pageNow;
	}
	public function getPageNow(){
		return $this->pageNow;
	}
	public function setGoodList($good){
		$this->goodList[] = $good;
	}
	public function getGoodList(){
		return $this->goodList;
	}
	public function setRowCount($rowCount){
		$this->rowCount = $rowCount;
	}
	public function getRowCount(){
		return $this->rowCount;
	}
	public function setPageCount($pageCount){
		$this->pageCount = $pageCount;
	}
	public function getPageCount(){
		return $this->pageCount;
	}
}
?>