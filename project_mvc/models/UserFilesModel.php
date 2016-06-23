<?php
class UserFilesModel extends  Model{
	public function __construct(){
		parent::__construct();
	}
	
	public function select(){
		$id = Session::get('id');
		parent::query("set names utf8");
		$res = parent::query("select File from files where MaNV = '$id'");
		parent::disconnect();
		return $res;
	}
}
?>