<?php
require_once ("RoomController.php");
class RoomAdminController extends RoomController {

	public function __construct() {
		parent::__construct();
	}

	public function action() {
		$this -> getData();
		$this -> view -> render('roomAdmin');
	}

	public function getData() {
		$res = $this -> model -> select();
		if ($res -> num_rows >= 0) {
			$this -> view -> msg = "<p><table id='datatables' class='display'>
									<thead>
									<tr>
									<th>Mã Phòng</th><th>Tên Phòng</th><th>Trưởng Phòng</th><th>Chức năng</th><th>Chỉnh sửa</th>
									</tr>
									</thead>
									<tbody>";
			while ($row = $res -> fetch_assoc()) {
				$this -> view -> msg .= "<tr>";
				$this -> view -> msg .= "<td>" . $row['MaPB'] . "</td>";
				$this -> view -> msg .= "<td><a href='" . __SITE_PATH . "roomInfo.php?room=" . $row['MaPB'] . "'>" . $row['TenPB'] . "</a></td>";
				$this -> view -> msg .= "<td><a href='" . __SITE_PATH . "staffInfo.php?staff=" . $row['MaNV'] . "'>" . $row['HoTen'] . "</a></td>";
				$this -> view -> msg .= "<td>" . $row['CV'] . "</td>";
				$this -> view -> msg .= "<td><a href='deleteRoom.php?MaPB=" . $row['MaPB'] . "' onclick='return confirmDelete()'>Xóa</a>    ||     <a href='updateRoom.php?MaPB=" . $row['MaPB'] . "'>Sửa</a></td>";
				$this -> view -> msg .= "</tr>";
			}
			$this -> view -> msg .= "</tbody></table></p>";
		}
	}

}
?>