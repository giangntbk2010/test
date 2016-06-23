<?php
class AddProjectProcessModel extends Model {

	public function __construct() {
		parent::__construct();
	}

	public function setData() {
		$projectName = $_POST['projectNameAdding'];
		$projectId = $_POST['projectIdAdding'];
		$startDay = $_POST['startDayAdding'];
		$fee = $_POST['feeAdding'];
		$endDay = $_POST['endDayAdding'];
		$projectStatus = $_POST['projectStatus'];

		$sql = "INSERT INTO duan(MaDA,TenDA,KinhPhi,NgayBD,NgayKT,TrangThai)
				VALUES ('$projectId','$projectName','$fee','$startDay','$endDay','$projectStatus')";

		parent::query("set names utf8");
		$res = parent::realQuery($sql);
		parent::disconnect();
		if ($res != NULL) {
			echo "<script type='text/javascript'>alert('Add Project Success! '); window.location ='projectAdmin.php'; </script>";
		} else
			echo "<script type='text/javascript'>alert('Add Project Failed, Retry !') ; window.location ='projectAdmin.php';</script>";
	}

}
?>