<?php

class ProjectInfoController extends Controller {
	public function __construct() {
		parent::__construct();
	}

	public function action() {
		$this -> getData();
		$this -> view -> render('projectInfo');
	}

	public function getData() {
		$res = $this -> model -> select();
		if ($res -> num_rows >= 0) {
			$this -> view -> msg = "<p><table id='datatables' class='display'><thead>
								<tr><th>Tên Dự Án</th><th>Mã Nhân Viên</th><th>Họ Tên</th></tr>
								</thead>
								<tbody>";
			while ($row = $res -> fetch_assoc()) {
				$this -> view -> msg .= "<tr>";
				$this -> view -> msg .= "<td>" . $row['TenDA'] . "</td>";

				$this -> view -> msg .= "<td>" . $row['MaNV'] . "</td>";

				$this -> view -> msg .= "<td><a href='" . __SITE_PATH . "staffInfo.php?staff=" . $row['MaNV'] . "'>" . $row['HoTen'] . "</a></td>";
				$this -> view -> msg .= "</tr>";
			}
			$this -> view -> msg .= "</tbody></table></p>";
		}
	}

}
?>