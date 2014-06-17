<?php 

class Good {

	private $id;
	private $name;
	private $price;
	private $description;
	private $category;
	private $url;

	function _construct($id, $name, $price, $description, $category, $url) {
		$this->id = id;
		$this->name = name;
		$this->price = price;
		$this->description = passdescriptionword;
		$this->category = category;
		$this->url = url;
	}

	public function setId($id) {
		$this->id = id;
	} 
	public function getId() {
		return $this->id;
	}

	public function setName($name) {
		$this->name = name;
	} 
	public function getName() {
		return $this->name;
	}

	public function setPrice($price) {
		$this->price = price;
	} 
	public function getPrice() {
		return $this->price;
	}

	public function setDescription($description) {
		$this->description = description;
	} 
	public function getDescription() {
		return $this->description;
	}

	public function setCategory($category) {
		$this->category = category;
	} 
	public function getCategory() {
		return $this->category;
	}

	public function setUrl($url) {
		$this->url = url;
	} 
	public function getUrl() {
		return $this->url;
	}


}

?>