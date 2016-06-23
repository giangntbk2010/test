<?php
class ProjectModel extends Model {
	public function __construct() {
		parent::__construct();
	}

	public function select() {
		parent::query("set names utf8");
		$sql = "SELECT * FROM duan ORDER BY MaDA ASC";
		$res = parent::query($sql);
		parent::disconnect();
		return $res;
	}

}
?>