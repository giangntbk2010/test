<?php
class DeleteStaffModel extends Model {
	public function __construct() {
		parent::__construct();
	}
	
	public function delete(){
		$MaNV = trim($_GET['MaNV']);
		$sql = "DELETE  FROM nhanvien WHERE MaNV = '$MaNV' ";
		$res = parent::realQuery($sql);
		parent::disconnect();
		return $res;
	}

}
?>