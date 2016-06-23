<?php
class UpdateProjectModel extends Model {
	public function construct() {
		parent::__construct();
	}

	public function select() {
		$id = $_GET['MaDA'];
		parent::query("set names utf8");
		$sql = "SELECT * FROM  duan WHERE MaDA = '$id' ";
		$res = parent::query($sql);
		return $res;
	}

	public function selectJoiner() {
		$id = $_GET['MaDA'];
		$sql = "SELECT MaNV FROM thamgia WHERE MaDA = '$id'";
		parent::query("set names utf8");
		$res = parent::query($sql);
		return $res;
	}

	public function disconnect() {
		parent::disconnect();
	}

}
?>