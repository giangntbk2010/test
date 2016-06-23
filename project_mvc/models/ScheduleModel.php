<?php
class ScheduleModel extends  Model {
	public function __construct() {
		parent::__construct();
	}
    public function selectAll($year,$month) {
        $userID = Session::get('id');
        parent::query("set names utf8");
        $sql = "SELECT  LichLV as Ngày,ThoiGian as SoGio
				FROM dklv
				WHERE MaNV = '$userID' and YEAR (LichLV)= '$year'and MONTH(LichLV) = '$month' " ;
        $res = parent::query($sql);
        parent::disconnect();
        return $res;
    }
	public function select($month) {
		$userID = Session::get('id');
		$sql = "SELECT LichLV
				FROM dklv
				WHERE MaNV = '$userID' and MONTH(LichLV) = '$month'
				ORDER BY LichLV ASC";
		$res = parent::query($sql);
		return $res;
	}

	public function delete($year, $month,$day) {
		$userID = Session::get('id');
		$sql = "DELETE FROM dklv
				WHERE MaNV = '$userID' and YEAR (LichLV)= '$year'and MONTH(LichLV) = '$month' and DAY (LichLV) > '$day'";
		$res = parent::query($sql);
		return $res;
	}
    public function deleteAllDayInMonth($year,$month) {
        $userID = Session::get('id');
        $sql = "DELETE FROM dklv
				WHERE MaNV = '$userID' and MONTH(LichLV) = '$month' and YEAR(LichLV) = '$year'";
        $res = parent::query($sql);
        return $res;
    }
	public function insert($time) {
		$userID = Session::get('id');
		$sql = "INSERT INTO dklv(MaNV,LichLV)
				VALUES ('$userID','$time') ";
		$res = parent::realQuery($sql);
		return $res;
	}

	public function disconnect() {
		parent::disconnect();
	}

}
?>