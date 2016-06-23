<?php
class UpdateRoomProcessModel extends Model {
	public function __construct() {
		parent::__construct();
	}

	public function getRequest() {
		return $_GET['MaPB'];
	}

	public function setData() {
		$updateName = trim($_POST["roomNameAdding"]);
		$id = trim($_GET["MaPB"]);
		$updateFeature = trim($_POST["featureAdding"]);

		parent::query("set names utf8");
		$sql = "UPDATE phongban
	 			SET TenPB = '$updateName', CongViec = '$updateFeature'
				WHERE MaPB = '$id'";
		$res = parent::realQuery($sql);
		$this -> disconnect();
		return $res;
	}

}
?>