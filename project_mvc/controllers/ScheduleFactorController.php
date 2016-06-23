<?php

class ScheduleFactorController extends Controller {
    public $year='';
    public $month='';
    public $date='';
    public function __construct() {
        parent::__construct();
    }

    public function action() {
        $this -> getData();
        $this -> view -> render('scheduleFactor');
    }

    public function getData() {
        if(isset($_REQUEST["date"])) $this->date=$_REQUEST["date"];
        if(isset($_REQUEST["year"])) $this->year=$_REQUEST["year"];
        if(isset($_REQUEST["month"])) $this->month=$_REQUEST["month"];
        $res = $this -> model -> select($this->year,$this->month);
        if ($res -> num_rows >= 0) {
            $this -> view -> msg = "<p><table id='datatables' class='display'>
									<thead>
									<tr><th>Ngày</th><th>Số giờ</th></tr>
									</thead>
									<tbody>";
            $sum=0;
            $xau="Mới đăng kí";

            while ($row = $res -> fetch_assoc()) {
                $this -> view -> msg .= "<tr>";
                $this -> view -> msg .= "<td>" . $row['Ngay'] . "</td>";
                if($row['SoGio']!=null){
                    $sum=$sum+$row['SoGio'];
                    $minutes = $row['SoGio']%60;
                    $hours = ($row['SoGio']-$minutes)/60;
                    $gioPhut=$hours."h".$minutes;
                    $this -> view -> msg .= "<td>" . $gioPhut . "</td>";
                }
                else $this -> view -> msg .= "<td>" .$xau. "</td>";
                //$this -> view -> msg .= "<td><a href='" . __SITE_PATH . "staffInfo.php?staff=" . $row['MaNV'] . "'>" . $row['HoTen'] . "</a></td>";
                $this -> view -> msg .= "</tr>";
            }
            $this -> view -> msg .= "</tbody></table></p>";
            $minutes = $sum%60;
            $hours = ($sum-$minutes)/60;
            $this -> view -> msg .= "<p>Tổng số giờ đã làm: $hours giờ $minutes phút</p><br>";
        }
    }

}
?>