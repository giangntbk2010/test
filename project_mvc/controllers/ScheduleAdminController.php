<?php
class ScheduleAdminController extends Controller {
	public function __consctruct() {
		parent::__construct();
	}
	
	public function action(){
		$this->view->render('scheduleAdmin');		
	}
}
?>