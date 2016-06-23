<?php
class Bootstrap {

	public function __construct() {
		if (isset($_GET['url'])) {
			$url = rtrim($_GET['url'], "/");
			$url = explode('.', $url);
			$name = $url[0];
		} else {
			$name = "index";
		}
		$fileController = __CONTROLLER_PATH . ucfirst($name) . "Controller.php";
		if (file_exists($fileController)) {
			require_once ($fileController);
		} else {
			require_once (__CONTROLLER_PATH . "ErrorController.php");
			$controller = new ErrorController();
			$controller -> action();
			return false;
		}
		$nameController = ucfirst($name) . "Controller";
		$controller = new $nameController;
		$controller -> loadModel($name);
		$controller -> action();

	}

}
?>