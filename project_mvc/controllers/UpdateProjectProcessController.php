<?php
class UpdateProjectProcessController extends Controller {

	public function __construct() {
		parent::__construct();
	}

	public function action() {
		$this -> setData();
	}

	public function setData() {
		$res = $this -> model -> handle();
		$id = $this -> model -> getRequest();
		if ($res) {
			echo "<script type='text/javascript'> alert('Đã chỉnh sửa thành công');window.location = 'projectAdmin.php';</script>";
		} else {
			echo "<script type='text/javascript'> alert('Có lỗi trong quá trình xử lí'); window.location = 'updateProject.php?MaDA=$id';</script>";
		}
	}

}
?>