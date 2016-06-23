<?php
class AddUserController extends Controller {
	public function __construct() {
		parent::__construct();
	}

	public function action() {
		$this -> getData();
		$this -> view -> render('addUser');
	}

	public function getData() {
		$res = $this -> model -> select();
		$this -> view -> msg = "";
		if ($res -> num_rows > 0) {
			while ($row = $res -> fetch_assoc()) {
				$this -> view -> msg .= $row['MaPB'] . "%";
			}
		}
	}

}
?>