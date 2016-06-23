<?php
include "../config/define_database.php";
include "../config/define_path.php";
include "../cores/Model.php";
$model = new Model();
if (isset($_GET['name'])) {
	$name = trim($_GET['name']);
	$name = strtolower($name);
	$sql = "SELECT MaNV as col1 , HoTen as col2
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
	$model -> query("set names utf8");
	$res = $model -> query($sql);
	$model -> disconnect();
	if ($res -> num_rows > 0) {
		while ($row = $res -> fetch_assoc()) {
			$str = substr($row['col1'], 0, 2);
			if ($str == "NV")
				echo "<p>" . $row['col1'] . "  <a href='" . __SITE_PATH . "staffInfo.php?staff=" . $row['col1'] . "'>" . $row['col2'] . "</a></p> ";
			else if ($str == "DA")
				echo "<p>" . $row['col1'] . " <a href='" . __SITE_PATH . "projectInfor.php?project=" . $row['col1'] . "'>" . $row['col2'] . "</a></p> ";
			else if ($str == "P1" || $str == "P2" || $str == "P3" || $str == "P4")
				echo "<p>" . $row['col1'] . "  <a href='" . __SITE_PATH . "roomInfor.php?room=" . $row['col1'] . "'>" . $row['col2'] . "</a></p> ";
		}
	} else
		echo "<p>Không tìm thấy kết quả $name </p>";
} else
	echo "<p>Không có từ khóa nào được gửi đến</p>";
?>