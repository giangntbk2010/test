<?php
class UpdateProjectProcessModel extends Model {
	public function __construct() {
		parent::__construct();
	}
	
	public function getRequest() {
		return $_GET['MaDA'];
	}

	public function handle() {
		$updateName = trim($_POST["projectNameAdding"]);
		$id = trim($_GET["MaDA"]);
		$updateStart = trim($_POST["startDayAdding"]);
		$updateEnd = trim($_POST["endDayAdding"]);
		$updateFee = trim($_POST["feeAdding"]);
		$updateStatus = trim($_POST["projectStatus"]);
		$join = trim($_POST["joinAdding"]);

		parent::query("set names utf8");
		$sql = "UPDATE duan
	 			SET TenDA = '$updateName', KinhPhi = '$updateFee', NgayBD = '$updateStart', NgayKT = '$updateEnd', TrangThai = '$updateStatus'
				WHERE MaDA = '$id'";
		$res = parent::realQuery($sql);

		$sql1 = "DELETE  FROM thamgia WHERE MaDA = '$id'";
		$tmp = parent::realQuery($sql1);
		if ($tmp) {
			$joiner = strtok($join, " , ");
			while ($joiner != NULL) {
				$sqlJoin = "INSERT INTO thamgia(MaNV,MaDA)	VALUES ('$joiner','$id') ";
				$resJoin = parent::realQuery($sqlJoin);
				$joiner = strtok(" , ");
			}
		}
		$this -> disconnect();
		if ($res && $resJoin)
			return TRUE;
		else
			return FALSE;
	}

}
?>