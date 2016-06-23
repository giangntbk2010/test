<?php
class DeleteProjectModel extends Model {
	public function __construct() {
		parent::__construct();
	}

	public function delete() {
		$MaDA = trim($_GET['MaDA']);
		$sql = "DELETE  FROM duan WHERE MaDA = '$MaDA' ";
		$res = parent::realQuery($sql);
		parent::disconnect();
		return $res;
	}

}
?>