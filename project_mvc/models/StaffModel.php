<?php
class StaffModel extends Model {
	public function __construct() {
		parent::__construct();
	}

	public function select() {
		parent::query("set names utf8");
		$sql = "select * from nhanvien order by HoTen ASC";
		$res = parent::query($sql);
		parent::disconnect();
		return $res;
	}

}
?>