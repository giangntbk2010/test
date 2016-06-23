<?php
class UserFilesController extends  Controller {
	public function __construct() {
		parent::__construct();
	}

	public function action() {
		$this -> getData();
		$this -> view -> render('userFiles');

	}

	public function getData() {
		$this -> view -> msg = "";
		$res = $this -> model -> select();
		if ($res -> num_rows > 0) {
			while ($row = $res -> fetch_assoc()) {
				$this -> view -> msg .= $row['File'].":";
			}
		}
	}

}
?>