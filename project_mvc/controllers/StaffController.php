<?php

class StaffController extends Controller {
	public function __construct() {
		parent::__construct();
	}

	public function action() {
		$this -> getData();
		$this -> view -> render('staff');
	}

	public function getData() {
		$res = $this -> model -> select();
		if ($res -> num_rows >= 0) {
			$this -> view -> msg = "<p><table id='datatables' class='display'>
									<thead>
									<tr>
									<th>Mã NV</th><th>Họ Tên</th><th>Ngày sinh</th><th>Chức Vụ</th><th>Email</th>
									</tr>
									</thead>
									<tbody>";
			while ($row = $res -> fetch_assoc()) {
				$this -> view -> msg .= "<tr>";
				$this -> view -> msg .= "<td>" . $row['MaNV'] . "</td>";
				$this -> view -> msg .= "<td><a href='".__SITE_PATH."staffInfo.php?staff=" . $row['MaNV'] . "'>" . $row['HoTen'] . "</a></td>";
				$this -> view -> msg .= "<td>" . $row['NgaySinh'] . "</td>";
				$this -> view -> msg .= "<td>" . $row['ChucVu'] . "</td>";
				$this -> view -> msg .= "<td>" . $row['Email'] . "</td>";
				$this -> view -> msg .= "</tr>";
			}
			$this -> view -> msg .= "</tbody></table></p>";
		}
	}

}
?>