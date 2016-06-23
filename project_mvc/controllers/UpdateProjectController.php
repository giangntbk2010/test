<?php
class UpdateProjectController extends  Controller {

	public function construct() {
		parent::__construct();
	}

	public function action() {
		$this -> getData();
		$this -> model -> disconnect();
		$this -> view -> render('updateProject');

	}

	public function getData() {
		$this -> view -> msg = "";
		$res = $this -> model -> select();
		$row = $res -> fetch_assoc();
		foreach ($row as $key => $value) {
			if ($value == null)
				continue;
			$this -> view -> msg .= $value . "%";
		}

		$res1 = $this -> model -> selectJoiner();
		while( $row1 = $res1 -> fetch_assoc()){
			$this -> view -> msg .= $row1['MaNV'] . "#";
		}

	}

}
?>