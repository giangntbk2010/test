<?php
class Model extends mysqli {

	public function __construct() {
		parent::__construct(__HOST, __USER, __PASS, __DB_NAME);
	}

	public function disconnect() {//ngắt kết nối
		parent::close();
	}

	public function query($sql) {//truy vấn
		$result = null;
		if (($result = parent::query($sql)) == TRUE) {
			return $result;
		} else {
			echo "Invalid query: $sql <br>";
		}
		return $result;
	}

	public function realQuery($sql) {
		return parent::real_query($sql);
	}

}
?>