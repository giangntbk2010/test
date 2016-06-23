<?php
class ChatController extends Controller {

	public function __construct() {
		parent::__construct();
	}

	public function action() {
		$this -> view -> render('chat');
	}

}
?>