<?php
class RoomInfoModel extends Model {
	public function __construct() {
		parent::__construct();
	}

	public function select() {
		$id = $_REQUEST['room'];
		parent::query("set names utf8");
		$sql = "SELECT  nhanvien.MaNV AS MaNV,  nhanvien.HoTen AS HoTen, phongban.TenPB AS TenPB
				FROM phongban, nhanvien
				WHERE phongban.MaPB = nhanvien.MaPB
				AND phongban.MaPB = '$id'";
		$res = parent::query($sql);
		parent::disconnect();
		return $res;
	}

}
?>