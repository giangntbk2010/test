<?php
class ScheduleFactorModel extends  Model {
    public function __construct() {
        parent::__construct();
    }
    public function select($year,$month) {
        $userID = Session::get('id');
        parent::query("set names utf8");
        $sql = "SELECT  LichLV as Ngay,ThoiGian as SoGio
				FROM dklv
				WHERE MaNV = '$userID' and YEAR (LichLV)= '$year'and MONTH(LichLV) = '$month' " ;
        $res = parent::query($sql);
        parent::disconnect();
        return $res;
    }
}