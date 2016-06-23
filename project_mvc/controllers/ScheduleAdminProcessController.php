<?php
class ScheduleAdminProcessController extends Controller {
	public function __construct() {
		parent::__construct();
	}

	public function action() {
		$this->select();
		$this -> view -> render('scheduleAdminProcess');
	}

	public function select() {
		$this -> view -> msg = "";
		$res = $this -> model -> select();
		$this -> view -> msg .= "<p><table id='datatables' class='display'>
							<thead>
							<tr>
							<th>Mã NV</th>
							<th>Họ Tên</th>
							<th>Ngày</th>
							</tr>
							</thead>
							<tbody>";
		if ($res != NULL) {
			while ($row = $res -> fetch_assoc()) {
				$this -> view -> msg .= "<tr>";
				$this -> view -> msg .= "<td>" . $row['MaNV'] . "</td>";
				$this -> view -> msg .= "<td>" . "<a href='staffInfo.php?staff=" . $row['MaNV'] . "'>" . $row['HoTen'] . "</a></td>";
				$this -> view -> msg .= "<td>" . $row['LichLV'] . "</td>";
				$this -> view -> msg .= "</tr>";
			}
		}
		$this -> view -> msg .= "</tbody></table></p>";
	}

}
?>