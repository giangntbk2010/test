<?php
class ChangePasswordProcessController extends Controller {
	public function __construct() {
		parent::__construct();
	}

	public function action() {
		$this -> setData();
	}

	public function setData() {
		$res = $this -> model -> setData();
		if ($res != NULL) {
			echo "<script type='text/javascript'> alert('Đổi mật khẩu thành công'); window.location = 'userInfo.php'</script>";
		} else {
			echo "<script type='text/javascript'> alert('Có lỗi trong quá trình xử lí, phiền bạn hãy thử lại');window.location = 'changePassword.php'</script>";
		}
	}

}
?>