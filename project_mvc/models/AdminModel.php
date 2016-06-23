<?php
class AdminModel extends Model {
	public function __construct() {
		parent::__construct();
	}

	public function countRecords($field, $table) {
		$res = parent::query("select count($field) as count from $table");
		return $res;
	}
	
	public function closeData(){
		parent::disconnect();
	}

}
?>