<?php
class ScheduleAdminProcessModel extends Model {
	public function __construct() {
		parent::__construct();
	}

	public function select() {
		$date = trim($_GET['dateView']);
		$sql = "SELECT nhanvien.MaNV,nhanvien.HoTen,  dklv.LichLV FROM dklv, nhanvien
				WHERE nhanvien.MaNV =  dklv.MaNV AND LichLV = '$date' ";
		parent::query("set names utf8");
		$res = parent::query($sql);
		parent::disconnect();
		return $res;
	}

}
?>