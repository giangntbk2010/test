<?php
class UpdateStaffController extends Controller {
	public function __construct() {
		parent::__construct();
	}

	public function action() {
		$this -> getData();
		$this -> view -> render('updateStaff');
	}

	public function getData() {
		$this -> view -> msg = "";
		$res = $this -> model -> getData();
		$row = $res -> fetch_assoc();
		foreach ($row as $key => $value) {
			$this -> view -> msg .= $value . "%";
		}
	}

}
?>