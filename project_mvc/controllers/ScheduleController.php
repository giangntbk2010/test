<?php
class ScheduleController extends Controller {
	public $date = 0;
	public function __construct() {
		parent::__construct();
	}

	public function _setDate() {
		date_default_timezone_set('Asia/Ho_Chi_Minh');
		$this -> date = time();
	}

	public function _setNewDate($date) {
		$this -> date = $date;
	}

	public function action() {
        if($this->date==0)
            $this->_setDate();
        if(isset($_REQUEST["goto"])){
            // echo ($_REQUEST["viewDate"]);
            if(isset($_REQUEST["month"])){
                $month= $_REQUEST["month"];
                if(isset($_REQUEST["year"])){
                    $year=$_REQUEST["year"];
                    if($month!='' && $year!=''){
                        $this->date=mktime(0,0,0,$month,1,$year);
                    }
                }
            }
        }
        if(isset($_REQUEST["viewDate"]))
        {

            if(isset($_REQUEST["submit"])){
                $this->date=$_REQUEST["viewDate"];
                $this->insertDay($this->date);
            }
            if(isset($_REQUEST["return"]))
                $this->date=$_REQUEST["viewDate"];
        }
        if(isset($_REQUEST["date"])) $this->date=$_REQUEST["date"];

		$this -> checkSchedule($this -> date);
		$this -> makeSchedule($this -> date);
		$this -> model -> disconnect();
		$this -> view -> render('schedule');
	}

	private function checkSchedule($date) {
		$month = date("m", $date);
		$day = date("Y-m-d", $date);
        $datetime=time();
        $datetime=date("Y-m-d",$datetime);
        $res = $this -> model -> select($month);
		$this -> view -> msg .= "<p class='message'> Hôm nay là   <span style = 'color:red;font-size: 18px;'>" . $datetime . "</span>.    ";
		$i = 0;
		$time = strtotime(date("Y-m-d"));

		while ($row = $res -> fetch_assoc()) {
			$timeSelected = strtotime($row['LichLV']);
			if ($timeSelected == $time)
				$i = 1;
		}
		if ($i != 0) {
			$this -> view -> msg .= "  Bạn <span style='color:red;'>có</span> lịch làm việc. Hãy đến đúng giờ! </p>";
		} else {
			$this -> view -> msg .= "  Bạn <span style='color:red;'>không</span> có lịch làm việc.</p>";
		}
	}

	private function makeSchedule($date) {
		$currentDate = time();
		$viewDate = $date;
		$day = date('d', $date);
		$month = date('m', $date);
		$year = date('Y', $date);
		$firstDay = mktime(0, 0, 0, $month, 1, $year);
		$title = date('F', $firstDay);
		//This gets us the month name
		$dayOfWeek = date('D', $firstDay);
		//Here we find out what day of the week the first day of the month falls on
		$res = $this -> model -> select($month);

		$workDays = array();
		while ($row = $res -> fetch_assoc()) {
			$timeSelected = strtotime($row['LichLV']);
			$time = date("d", $timeSelected);
			$workDays[] = $time;
		}

		//Once we know what day of the week it falls on, we know how many blank days occure before it. If the first day of the week is a Sunday then it would be zero
		$blank = $this -> checkDayOfWeek($dayOfWeek);
		$daysInMonth = cal_days_in_month(0, $month, $year);
		//echo("$daysInMonth");
		//We then determine how many days are in the current month
		//Here we start building the table heads
        $this -> view -> msg .= "<p><a href='" . __SITE_PATH . "scheduleFactor.php?year=" . $year . "&month=" . $month . "&date=" . $viewDate . "' style='font-weight: bold'>Chi tiết lịch làm việc</a></p>";
        $this -> view -> msg .= "<p style='text-align: center; font-size: 25px'>$title $year";

		$this -> view -> msg .= "<form  id='timetable' style='background: #FCFAE6 ;' method='post' action='schedule.php'>";
		$this -> view -> msg .= "<select name='month' id='selectMonth'>";
		$this -> view -> msg .= "<option value='' selected disabled>Month</option>";
		$this -> view -> msg .= "<option value='1'>January</option>";
		$this -> view -> msg .= "<option value='2'>February</option>";
		$this -> view -> msg .= "<option value='3'>March</option>";
		$this -> view -> msg .= "<option value='4'>April</option>";
		$this -> view -> msg .= "<option value='5'>May</option>";
		$this -> view -> msg .= "<option value='6'>June</option>";
		$this -> view -> msg .= "<option value='7'>July</option>";
		$this -> view -> msg .= "<option value='8'>August</option>";
		$this -> view -> msg .= "<option value='9'>September</option>";
		$this -> view -> msg .= "<option value='10'>October</option>";
		$this -> view -> msg .= "<option value='11'>November</option>";
		$this -> view -> msg .= "<option value='12'>December</option>";
		$this -> view -> msg .= "</select>";

		$this -> view -> msg .= "<select name='year' id='selectYear'>";
		$this -> view -> msg .= "<option value='' selected disabled>Year</option>";
		$this -> view -> msg .= "<option value='2010'>2010</option>";
		$this -> view -> msg .= "<option value='2011'>2011</option>";
		$this -> view -> msg .= "<option value='2012'>2012</option>";
		$this -> view -> msg .= "<option value='2013'>2013</option>";
		$this -> view -> msg .= "<option value='2014'>2014</option>";
		$this -> view -> msg .= "<option value='2015'>2015</option>";
		$this -> view -> msg .= "<option value='2016'>2016</option>";
		$this -> view -> msg .= "<option value='2017'>2017</option>";
		$this -> view -> msg .= "<option value='2018'>2018</option>";
		$this -> view -> msg .= "</select>";

		$this -> view -> msg .= "<input type='submit' name='goto' id='goTime' value='go to'/>";



        $this -> view -> msg .="<p><table id='datatables' class='display'>
                            <thead>
                            <tr>
                            <th style='color: red' id='calendar-day-head'>CN</th>
                            <th id='calendar-day-head'>Thứ 2</th>
                            <th id='calendar-day-head'>Thứ 3</th>
                            <th id='calendar-day-head'>Thứ 4</th>
                            <th id='calendar-day-head'>Thứ 5</th>
                            <th id='calendar-day-head'>Thứ 6</th>
                            <th id='calendar-day-head'>Thứ 7</th>
                            </tr>
                            </thead>";
		$daysCount = 1;
		//This counts the days in the week, up to 7

		//first we take care of those blank days
		$this -> view -> msg .= "<tr>";
		while ($blank > 0) {
			$this -> view -> msg .= "<td></td>";
			$blank = $blank - 1;
			$daysCount++;
		}
		$dayNum = 1;
		//sets the first day of the month to 1

		//count up the days, untill we've done all of them in the month
		$i = 0;
		while ($dayNum <= $daysInMonth) {
			$checked = '';
			$disabled = '';
			$k = 0;
			foreach ($workDays as $key => $value) {
				if ($dayNum == $value)
					$k = 1;
			}

			if ($k == 1)
				$checked = "checked='checked'";
			$red = '';
			if ($daysCount == '1' && $dayNum != $day)
				$red = "style='color:red'";
			if ($month == date("m", $currentDate) && $year == date("Y", $currentDate) && $dayNum == date("d", $currentDate))
				$red = "style='font-weight:bold; color:blue;text-decoration:underline;'";
			if ($daysCount == '1' && $dayNum == $day)
				$red = "style='font-weight:bold;color:red;;text-decoration:underline'";
			if ($year < date("Y", $currentDate))
				$disabled = 'disabled';
			if ($year == date("Y", $currentDate) && $month < date("m", $currentDate))
				$disabled = 'disabled';
			if ($month == date("m", $currentDate) && $year == date("Y", $currentDate) && $dayNum <= date("d", $currentDate))
				$disabled = 'disabled';
			$this -> view -> msg .= "<td align= 'center' id='calendar-td'><span $red>$dayNum</span><br><input type='checkbox' name='day_check[]' value='$dayNum' $checked $disabled/></td>";
			$dayNum++;
			$daysCount++;
			$i++;
			//Make sure we start a new row every week
			if ($daysCount > 7) {
				$this -> view -> msg .= "</tr><tr>";
				$daysCount = 1;
			}
		}
		while ($daysCount > 1 && $daysCount <= 7) {
			$this -> view -> msg .= "<td> </td>";
			$daysCount++;
		}
		$this -> view -> msg .= "</tr>";
		$this -> view -> msg .= "</th></table>";
		$this -> view -> msg .= "</p>";
		$beforeMonth = $this -> prevMonthValue($date, $month, $year);
		$afterMonth = $this -> nextMonthValue($date, $month, $year);

		$this -> view -> msg .= "<input type='hidden' name='viewDate' value='$viewDate'/>";
		$this -> view -> msg .= "<ul style='float: left; height: 15px;'><li><a href='schedule.php?tag=1&date=$beforeMonth' style='font-weight: bold'>Previous</a></li>";
		$this -> view -> msg .= "<li><a href='schedule.php?tag=1&date=$afterMonth' style='font-weight: bold'>Next</a></li></ul>";
		$this -> view -> msg .= "<input type='submit' align ='center' class='gobutton' name='submit' value='submit'/>";
		$this -> view -> msg .= "</form><br>";
		$this -> view -> msg .= "<p class = 'message' style='text-align: left;  '><br><span style='color:red;'>Chú ý</span>: Những ngày đã qua không thể sửa xóa đăng kí: <br></p>";
	}

	public function insertDay($date) {
		$day = date('d', $date);
		$month = date('m', $date);
		$year = date('Y', $date);
		$datetime = time();

		if ($year == date("Y", $datetime) && $month == date("m", $datetime)) {
			$this -> model -> delete($year, $month, date("d", $datetime));
			if (isset($_REQUEST['day_check'])) {
				$box = $_REQUEST['day_check'];
				if (isset($_REQUEST['submit'])) {
					while (list($key, $val) = @each($box)) {
						settype($val, "integer");
						$dayValue = mktime(0, 0, 0, $month, $val, $year);
						$selectedTime = date("Y-m-d", $dayValue);
						$this -> model -> insert($selectedTime);
					}
				}
			}
		} else {
			if (isset($_REQUEST['day_check'])) {
				$this -> model -> delete($year, $month, 0);
				$box = $_REQUEST['day_check'];
				if (isset($_REQUEST['submit'])) {
					while (list($key, $val) = @each($box)) {
						settype($val, "integer");
						$dayValue = mktime(0, 0, 0, $month, $val, $year);
						$selectedTime = date("Y-m-d", $dayValue);
						$this -> model -> insert($selectedTime);
					}
				}
			} else {
				if ($year > date("Y", $datetime)) {
					$this -> model -> delete($year, $month, 0);
				}
				if ($year == date("Y", $datetime) && $month > date("m", $date)) {
					$this -> model -> delete($year, $month, 0);
				}
			}
		}
	}

	private function checkDayOfWeek($dayOfWeek) {
		switch($dayOfWeek) {
			case "Sun" :
				$blank = 0;
				break;
			case "Mon" :
				$blank = 1;
				break;
			case "Tue" :
				$blank = 2;
				break;
			case "Wed" :
				$blank = 3;
				break;
			case "Thu" :
				$blank = 4;
				break;
			case "Fri" :
				$blank = 5;
				break;
			case "Sat" :
				$blank = 6;
				break;
		}
		return $blank;
	}

	private function prevMonthValue($date, $month, $year) {
		if ($month == 1)
			$beforeMonth = $date - cal_days_in_month(0, 12, $year - 1) * 86400;
		else
			$beforeMonth = $date - cal_days_in_month(0, $month - 1, $year) * 86400;
		return $beforeMonth;
	}

	private function nextMonthValue($date, $month, $year) {
		if ($month == 12)
			$afterMonth = $date + cal_days_in_month(0, 1, $year + 1) * 86400;
		else
			$afterMonth = $date + cal_days_in_month(0, $month + 1, $year) * 86400;
		return $afterMonth;
	}

}
?>