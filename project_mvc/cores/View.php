<?php
class View {

	public $msg;
	public function __construct() {
	}

	public function render($link) {
		require (__VIEW_PATH . $link . ".php");
	}

	public function redirect($link = '') {
		ob_start();
		if ($link != '') {
			$link = __SITE_PATH . $link;
		} else {
			$link = __SITE_PATH;
		}
		header("Location:$link");
	}

}
?>