<?php
class UpdateRoomProcessController extends Controller {

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
			echo "<script type='text/javascript'> alert('Đã chỉnh sửa thành công');window.location = 'roomAdmin.php';</script>";
		} else {
			echo "<script type='text/javascript'> alert('Có lỗi trong quá trình xử lí'); window.location = 'updateRoom.php?MaPB=$id';</script>";
		}
	}

}
?>