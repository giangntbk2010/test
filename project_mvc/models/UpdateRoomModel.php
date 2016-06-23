<?php

class UpdateRoomModel extends Model {
	public function __construct() {
		parent::__construct();
	}

	public function getData() {
		$id = $_GET['MaPB'];
		parent::query("set names utf8");
		$sql = "SELECT * FROM phongban WHERE MaPB = '$id' ";
		$res = parent::query($sql);
		parent::disconnect();
		return $res;

	}

}
?>