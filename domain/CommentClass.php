<?php 

class Comment {

	private $id;
	private $gid;
	private $context;

	function _construct($id, $gid, $context) {
		$this->id = id;
		$this->name = gid;
		$this->context = context;

	}

	public function setId($id) {
		$this->id = id;
	} 
	public function getId() {
		return $this->id;
	}

	public function setGid($gid) {
		$this->gid = gid;
	} 
	public function getGid()) {
		return $this->gid;
	}

	public function setContext($context) {
		$this->context = context;
	} 
	public function getContext() {
		return $this->context;
	}
}

?>