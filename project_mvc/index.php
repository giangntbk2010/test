<?php
//define path
require_once ("config/define_path.php");
require_once ("config/define_database.php");
//end define path
require_once (__CORE_PATH . "Session.php");
require_once (__CORE_PATH . "Controller.php");
require_once (__CORE_PATH . "View.php");
require_once (__CORE_PATH . "Model.php");
require_once (__CORE_PATH . "Bootstrap.php");
$bootstrap = new Bootstrap();
?>