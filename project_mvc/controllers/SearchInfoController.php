<?php

class SearchInfoController extends Controller {
	public function __construct() {
		parent::__construct();
	}

	public function action() {
		$this -> getData();
		$this -> view -> render('searchInfo');
	}

	public function getData() {
		$res = $this -> model -> search();
		if ($res -> num_rows >= 0) {
			$this -> view -> msg = "<p><table id='datatables' class='display'>
              <thead><tr><th>ID</th><th>Thông tin tìm kiếm </th></tr></thead>
              <tbody>";
			while ($row = $res -> fetch_assoc()) {
				$this -> view -> msg .= "<tr>";
				$this -> view -> msg .= "<td>" . $row['col1'] . "</td>";
				$str = substr($row['col1'], 0, 2);
				if ($str == "NV")
					$this -> view -> msg .= "<td><a href='" . __SITE_PATH . "staffInfo.php?staff=" . $row['col1'] . "'>" . $row['col2'] . "</a></p> ";
				else if ($str == "DA")
					$this -> view -> msg .= "<td><a href='" . __SITE_PATH . "projectInfor.php?project=" . $row['col1'] . "'>" . $row['col2'] . "</a></p> ";
				else if ($str == "P1" || $str == "P2" || $str == "P3" || $str == "P4")
					$this -> view -> msg .= "<td><a href='" . __SITE_PATH . "roomInfor.php?room=" . $row['col1'] . "'>" . $row['col2'] . "</a></p> ";
				$this -> view -> msg .= "</tr>";
			}
			$this -> view -> msg .= "</tbody></table></p>";
		}
	}

}
?>