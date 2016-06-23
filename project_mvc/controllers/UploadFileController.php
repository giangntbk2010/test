<?php
class UploadFileController extends Controller {
	public function __construct() {
		parent::__construct();
	}

	public function action() {
		$this -> handle();
	}

	private function handle() {
		$res = $this -> model -> handleUpload();
		if ($res) {
			$this->view->redirect('userFiles');
		}else{
			$this->view->render('errorUpload');
		}
	}

}
?>