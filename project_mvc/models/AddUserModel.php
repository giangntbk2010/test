<?php
class AddUserModel extends Model {
	public function __construct() {
		parent::__construct();
	}

	public function select() {
		parent::query("set names utf8");
		$res = parent::query("SELECT MaPB FROM PhongBan ");
		parent::disconnect();
		return $res;
	}
	

}
?>