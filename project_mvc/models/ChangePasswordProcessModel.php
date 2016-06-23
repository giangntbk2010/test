<?php
class ChangePasswordProcessModel extends Model {
	public function __construct() {
		parent::__construct();
	}

	public function setData() {
		$newPass = trim($_POST["newPass"]);
		$retypePass = trim($_POST["retypePass"]);
		if ($newPass == $retypePass) {
			$id = Session::get('id');
			parent::query("set names utf8");
			$res = parent::query("UPDATE nhanvien SET Password = '$newPass' WHERE MaNV = '$id' ");
			parent::disconnect();
			return $res;
		} else {
			header("Location: changePassword.php");
		}
	}

}
?>