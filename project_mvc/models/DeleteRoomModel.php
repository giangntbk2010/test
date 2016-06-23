<?php
class DeleteRoomModel extends Model {
	public function __construct() {
		parent::__construct();
	}

	public function delete() {
		$MaPB = trim($_GET['MaPB']);
		$sql = "DELETE  FROM phongban WHERE MaPB = '$MaPB' ";
		$res = parent::realQuery($sql);
		$res1 = $this -> update($MaPB);
		parent::disconnect();
		if ($res1) {
			if ($res)
				return TRUE;
			else
				return FALSE;
		} else
			return FALSE;
	}

	private function update($id) {
		$sql = "UPDATE nhanvien SET MaPB = NULL
				WHERE MaPB = '$id'";
		$res = parent::realQuery($sql);
		return $res;
	}

}
?>