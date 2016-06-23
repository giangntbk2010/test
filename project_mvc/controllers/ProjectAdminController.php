<?php
require_once ("ProjectController.php");
class ProjectAdminController extends ProjectController {
	public function construct() {
		parent::__construct();
	}

	public function action() {
		$this -> getData();
		$this -> view -> render('projectAdmin');
	}

	public function getData() {
		$res = $this -> model -> select();
		if ($res -> num_rows >= 0) {
			$this -> view -> msg = "<p><table id='datatables' class='display'>
								<thead>
								<tr><th>Mã DA</th><th>Tên Dự Án</th><th>Kinh phí</th><th>Ngày bắt đầu</th><th>Ngày kết thúc</th><th>Trạng thái</th><th>Chỉnh sửa</th></tr>
								</thead>
								<tbody>";
			while ($row = $res -> fetch_assoc()) {
				$this -> view -> msg .= "<tr>";
				$this -> view -> msg .= "<td>" . $row['MaDA'] . "</td>";
				$this -> view -> msg .= "<td><a href='" . __SITE_PATH . "projectInfo.php?project=" . $row['MaDA'] . "'>" . $row['TenDA'] . "</a></td>";
				$this -> view -> msg .= "<td>" . $row['KinhPhi'] . "</td>";
				$this -> view -> msg .= "<td>" . $row['NgayBD'] . "</td>";
				$this -> view -> msg .= "<td>" . $row['NgayKT'] . "</td>";
				$this -> view -> msg .= "<td>" . $row['TrangThai'] . "</td>";
				$this -> view -> msg .= "<td><a href='". __SITE_PATH . "deleteProject.php?MaDA=" . $row['MaDA'] . "' onclick='return confirmDelete()'>Xóa</a>    ||     <a href='updateProject.php?MaDA=" . $row['MaDA'] . "'>Sửa</a></td>";
				$this -> view -> msg .= "</tr>";
			}
			$this -> view -> msg .= "</tbody></table></p>";
		}
	}

}
?>