<?php
class ProjectInfoModel extends Model {
	public function __construct() {
		parent::__construct();
	}

	public function select() {
		$id = $_REQUEST['project'];
		parent::query("set names utf8");
		$sql = "SELECT nhanvien.MaNV, nhanvien.HoTen, duan.TenDA
				FROM duan, nhanvien, thamgia
				WHERE duan.MaDA = thamgia.MaDA
				AND nhanvien.MaNV = thamgia.MaNV
				AND duan.MaDA = '$id' ";
		$res = parent::query($sql);
		parent::disconnect();
		return $res;
	}

}
?>