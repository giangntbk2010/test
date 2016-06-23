<?php

class UpdateStaffModel extends Model {
	public function __construct() {
		parent::__construct();
	}

	public function getData() {
		$id = $_GET['MaNV'];
		parent::query("set names utf8");
		$sql = "SELECT * FROM nhanvien WHERE MaNV = '$id' ";
		$res = parent::query($sql);
		parent::disconnect();
		return $res;

	}

}
?>