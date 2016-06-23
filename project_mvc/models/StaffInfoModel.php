<?php
class StaffInfoModel extends Model {
	public function __construct() {
		parent::__construct();
	}

	public function select() {
		$id = $_REQUEST['staff'];
		parent::query("set names utf8");
		$sql = "select nhanvien.*, phongban.TenPB 
				from nhanvien, phongban
				where nhanvien.MaPB = phongban.MaPB
	 			and nhanvien.MaNV = '$id'";
		$res = parent::query($sql);
		parent::disconnect();
		return $res;
	}

}
?>