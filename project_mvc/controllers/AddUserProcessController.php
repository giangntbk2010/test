<?php
class AddUserProcessController extends Controller {

	public function __construct() {
		parent::__construct();
	}

	public function action() {
		$this -> setData();
	}

	public function setData() {
		$res = $this -> model -> setData();
	}

}
?>