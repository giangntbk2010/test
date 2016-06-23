<?php
class RoomModel extends Model {
	public function __construct() {
		parent::__construct();
	}

	public function select() {
		parent::query("set names utf8");
		$sql1 = "CREATE TEMPORARY TABLE a AS(
    				SELECT nhanvien.HoTen AS HoTen,  nhanvien.MaPB AS MaPB,  nhanvien.MaNV AS MaNV 
					FROM  nhanvien
				 	WHERE  nhanvien.ChucVu LIKE '%Trưởng Phòng%'
					)";
		$sql2 = "SELECT phongban.MaPB AS MaPB, phongban.TenPB AS TenPB ,a.HoTen AS HoTen,phongban.CongViec AS CV, a.MaNV AS MaNV
				FROM phongban LEFT JOIN a USING (MaPB) ";
		parent::query($sql1);
		$res = parent::query($sql2);
		parent::disconnect();
		return $res;
	}

}
?>