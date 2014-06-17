<?php 

class User {

	public $id;
	public $name;
	public $nickname;
	public $password;
	public $email;
	public $authority;

	function _construct($id, $name, $nickname, $password, $email, $authority) {
		$this->id = $id;
		$this->name = $name;
		$this->nickname = $nickname;
		$this->password = $password;
		$this->email = $email;
		$this->authority = $authority;
	}

	public function setId($id) {
		$this->id = $id;
	} 
	public function getId() {
		return $this->id;
	}

	public function setName($name) {
		$this->name = $name;
	} 
	public function getName() {
		return $this->name;
	}

	public function setNickname($nickname) {
		$this->nickname = $nickname;
	} 
	public function getNickname() {
		return $this->nickname;
	}

	public function setPassword($password) {
		$this->password = $password;
	} 
	public function getPassword() {
		return $this->password;
	}

	public function setEmail($email) {
		$this->email = $email;
	} 
	public function getEmail() {
		return $this->email;
	}

	public function setAuthority($authority) {
		$this->authority = $authority;
	} 
	public function getAuthority() {
		return $this->authority;
	}

}


?>