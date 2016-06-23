<?php
class SearchInfoModel extends Model {
	public function __construct() {
		parent::__construct();
	}

	public function search() {
		$name = trim($_GET['searchInfo']);
		$name = strtolower($name);
		parent::query("set names utf8");
		$sql = "			SELECT MaNV as col1 , HoTen as col2
							FROM nhanvien
							WHERE LOWER(HoTen) LIKE LOWER('%$name%') 
								UNION
							SELECT MaPB , TenPB 
							FROM phongban 
							WHERE  LOWER(TenPB) LIKE LOWER('%$name%') 
								UNION
							SELECT MaDA, TenDA
							FROM duan
							WHERE LOWER(TenDA) LIKE LOWER('%$name%')
								UNION
	                        SELECT MaNV, HoTen
	                        FROM nhanvien
	                        WHERE LOWER(MaNV) LIKE LOWER('%$name%')
	                        	UNION
	                        SELECT MaPB, TenPB
	                        FROM phongban
	                        WHERE LOWER(MaPB) LIKE LOWER('%$name%')
	                        	UNION
	                        SELECT MaDA, TenDA 
	                        FROM duan
	                        WHERE LOWER(MaDA) LIKE LOWER('%$name%') ";
		$res = parent::query($sql);
		parent::disconnect();
		return $res;
	}

}
?>