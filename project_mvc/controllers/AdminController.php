<?php
class AdminController extends Controller {

	public function __construct() {
		parent::__construct();
	}

	public function action() {
		$this -> getCount();
		$this -> view -> render('admin');
	}

	public function getCount() {
		$this -> view -> msg = "";
		$this -> countRecords("MaNV", "nhanvien");
		$this -> countRecords("MaDA", "duan");
		$this -> countRecords("MaPB", "phongban");
		$this -> model -> closeData();
	}

	public function countRecords($field, $table) {
		$res = $this -> model -> countRecords($field, $table);
		$row = $res -> fetch_assoc();
		$this -> view -> msg .= $row['count'] . "/";
	}

}
?>