<?php

class DeleteStaffController extends Controller {
	public function __construct() {
		parent::__construct();
	}

	public function action() {
		$res = $this -> delete();
		if ($res) {
			echo "<script type='text/javascript'>alert('User Deleted !'); window.location ='staffAdmin.php';</script>";
		}
	}

	public function delete() {
		return $this -> model -> delete();
	}

}
?>