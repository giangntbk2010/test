<?php
class UploadFileModel extends  Model {
	public function __construct() {
		parent::__construct();
	}

	public function handleUpload() {
		$id = $_GET['MaNV'];
		$filePath = "public/userFiles/" . $id."/";
		$localFolder = "./" . $filePath;
		if (!is_dir($localFolder)) {
			mkdir($localFolder, 775);
		}
		if ($_FILES) {
			$filename = $_FILES['fileupload']['name'];
			$filePath .= $filename;
			move_uploaded_file($_FILES['fileupload']['tmp_name'], "$localFolder$filename");
			$res = $this -> insert($filePath);
			if (! $res )
				return FALSE;
		} else {
			return FALSE;
		}
		return TRUE;

	}

	private function insert($file) {
		$MaNV = trim($_GET['MaNV']);
		parent::query("set names utf8");
		$sql = "INSERT INTO files(MaNV, File) VALUES('$MaNV', '$file')";
		$res = parent::realQuery($sql);
		parent::disconnect();
		return $res;
	}

}
?>