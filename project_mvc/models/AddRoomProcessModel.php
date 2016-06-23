<?php
class AddRoomProcessModel extends  Model {
	public function __construct() {
		parent::__construct();
	}

	public function setData() {
		$roomName = $_POST['roomNameAdding'];
		$roomId = $_POST['roomIdAdding'];
		$feature = $_POST['featureAdding'];

		$sql = "INSERT INTO phongban(MaPB,TenPB,CongViec)
			VALUES ('$roomId','$roomName','$feature')";
		parent::query("set names utf8");
		$res = parent::realQuery($sql);
		parent::disconnect();
		if ($res != NULL) {
			echo "<script type='text/javascript'>alert('Add Room Success! '); window.location ='roomAdmin.php'; </script>";
		} else
			echo "<script type='text/javascript'>alert('Add Room Failed, Retry !') ; window.location ='roomAdmin.php';</script>";
	}

}
?>