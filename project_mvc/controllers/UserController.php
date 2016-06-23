<?php
class UserController extends Controller {

	private static $flag = 0;

	public function __construct() {
		parent::__construct();
	}

	public function action() {
		if (!isset($_SESSION['name'])) {
			$this -> login();
		} else {
			$this -> logout();
		}
		if (self::$flag == 0) {
			$this -> view -> render("index");
		} else {
			$this -> view -> render("loginPage");
		}
	}

	public function login() {
		if ($_POST['userid'] == "" or $_POST['userpwd'] == "") {
			$this -> view -> redirect('loginPage');
		} else {
			$res = $this -> model -> login();
			if ($res -> num_rows > 0) {
				self::$flag = 0;
				$row = $res -> fetch_assoc();
				Session::set("id", $row['MaNV']);
				Session::set("name", $row['HoTen']);
				if ($row['IsAdmin'] == 1) {
					Session::set("isAdmin", 1);
				}
				$this -> view -> redirect("index");
			} else {
				self::$flag = 1;			
				echo "<script type='text/javascript'>alert('Đăng nhập sai ! Kiểm tra lại ID hoặc mật khẩu');</script> ";
				
			}
		}
	}

	public function logout() {
		Session::destroy();
		$this -> view -> redirect("index");
	}

}
?>