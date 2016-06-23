<?php
class UpdateStaffProcessController extends Controller {

	public function __construct() {
		parent::__construct();
	}

	public function action() {
		$this -> setData();
	}

	public function setData() {
		$res = $this -> model -> setData();
		$id = $this -> model -> getRequest();
		if ($res) {
			echo "<script type='text/javascript'> alert('Đã chỉnh sửa thành công');window.location = 'staffAdmin.php';</script>";
		} else {
			echo "<script type='text/javascript'> alert('Có lỗi trong quá trình xử lí'); window.location = 'updateStaff.php?MaNV=$id';</script>";
		}
	}

}
?>