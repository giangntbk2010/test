<?php

class DeleteRoomController extends Controller {
	public function __construct() {
		parent::__construct();
	}

	public function action() {
		$this -> delete();
	}

	public function delete() {
		$res = $this -> model -> delete();
		if ($res) {
			echo "<script type='text/javascript'>alert('Room Deleted !!! '); window.location ='roomAdmin.php'</script>";
		} else
			echo "failed  ";
	}

}
?>