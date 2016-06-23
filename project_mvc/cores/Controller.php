<?php
class Controller {

	protected $model;
	protected $view;

	public function __construct() {
		Session::init();
		$this -> view = new View();
	}

	public function loadModel($nameModel) {
		$path = __MODEL_PATH . ucfirst($nameModel) . "Model.php";
		if (file_exists($path)) {
			require_once ($path);
			$nameModel = ucfirst($nameModel) . "Model";
			$this -> model = new $nameModel;
			if ($this -> model -> connect_error) {
				header("location: errorDatabase.php");
			}
		}
	}

}
?>