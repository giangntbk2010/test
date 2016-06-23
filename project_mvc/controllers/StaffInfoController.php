<?php

class StaffInfoController extends Controller {
	public function __construct() {
		parent::__construct();
	}

	public function action() {
		$this -> getData();
		$this -> view -> render('staffInfo');
	}

	public function getData() {
		$res = $this -> model -> select();
		if ($res -> num_rows >= 0) {
			$this -> view -> msg = "<p><table border='2'  cellpadding='20' cellspacing='10' align='center'>";
			while ($row = $res -> fetch_assoc()) {
				$this -> view -> msg .= "<tr>";
				$this -> view -> msg .= "<td><img src='" . $row['ImgUrl'] . "' alt='" . $row['HoTen'] . "' border='2' width='352' height='512'/></td>";

				$this -> view -> msg .= "<td>";
				$this -> view -> msg .= "<table border = '1' cellpadding='10' cellspacing='5' align = 'left'>";

				$this -> view -> msg .= "<tr id='row'>";
				$this -> view -> msg .= "<th>Mã Nhân Viên</th>";
				$this -> view -> msg .= "<td style='color:red;'>" . $row['MaNV'] . "</td>";
				$this -> view -> msg .= "</tr>";

				$this -> view -> msg .= "<tr id='row'>";
				$this -> view -> msg .= "<th>Họ Tên</th>";
				$this -> view -> msg .= "<td style='color:blue;'>" . $row['HoTen'] . "</td>";
				$this -> view -> msg .= "</tr>";

				$this -> view -> msg .= "<tr id='row'>";
				$this -> view -> msg .= "<th>" . "Ngày Sinh" . "</th>";
				$this -> view -> msg .= "<td>" . $row['NgaySinh'] . "</td>";
				$this -> view -> msg .= "</tr>";

				$this -> view -> msg .= "<tr id='row'>";
				$this -> view -> msg .= "<th>Giới Tính</th>";
				$this -> view -> msg .= "<td>" . $row['GioiTinh'] . "</td>";
				$this -> view -> msg .= "</tr>";

				$this -> view -> msg .= "<tr id='row'>";
				$this -> view -> msg .= "<th>Địa Chỉ</th>";
				$this -> view -> msg .= "<td>" . $row['DiaChi'] . "</td>";
				$this -> view -> msg .= "</tr>";

				$this -> view -> msg .= "<tr id='row'>";
				$this -> view -> msg .= "<th>Điện Thoại</th>";
				$this -> view -> msg .= "<td>" . $row['SDT'] . "</td>";
				$this -> view -> msg .= "</tr>";

				$this -> view -> msg .= "<tr id='row'>";
				$this -> view -> msg .= "<th>Phòng Ban</th>";
				$this -> view -> msg .= "<td style='color:darkgreen;'>" . $row['TenPB'] . "</td>";
				$this -> view -> msg .= "</tr>";

				$this -> view -> msg .= "<tr id='row'>";
				$this -> view -> msg .= "<th>" . "Chức Vụ" . "</th>";
				$this -> view -> msg .= "<td style='color:orangered'>" . $row['ChucVu'] . "</td>";
				$this -> view -> msg .= "</tr>";

				$this -> view -> msg .= "<tr id='row'>";
				$this -> view -> msg .= "<th>Email</th>";
				$this -> view -> msg .= "<td style='color:mediumblue;'>" . $row['Email'] . "</td>";
				$this -> view -> msg .= "</tr>";

				$this -> view -> msg .= "</table>";
				$this -> view -> msg .= "</td>";
				$this -> view -> msg .= "</tr>";
			}
			$this -> view -> msg .= "</table></p>";
		}
	}

}
?>