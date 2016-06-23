<?php
class UserModel extends Model {

	public function __construct() {
		parent::__construct();
	}

	public function login() {
		$id = $_POST['userid'];
		$pwd = $_POST['userpwd'];
		parent::query("set names utf8");
		$res = parent::query("select * from nhanvien where MaNV = '$id' and Password = '$pwd'");
		parent::disconnect();
		return $res;
	}

}
?>