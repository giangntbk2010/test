<?php
class UpdateStaffProcessModel extends Model {
	public function __construct() {
		parent::__construct();
	}

	public function getRequest() {
		return $_GET['MaNV'];
	}

	public function setData() {
		$updateName = trim($_POST["nameAdding"]);
		$id = trim($_GET["MaNV"]);
		$updatePwd = trim($_POST["pwdAdding"]);
		$updateBirth = trim($_POST["birthdayAdding"]);
		$updatePhone = trim($_POST["phoneAdding"]);
		$updateLevel = trim($_POST["levelAdding"]);
		$updateRoom = trim($_POST["roomAdding"]);
		$updateAdmin = trim($_POST["isAdmin"]);
		$updateAddr = trim($_POST["addrAdding"]);
		$updateMail = trim($_POST["mailAdding"]);
		$updateGender = trim($_POST['gender']);
		$updateImgURL = trim($_POST["imgAdding"]);

		$nowAvatar = trim($_GET["avatar"]);

		if ($updateAddr == '')
			$updateAddr = 'N/A';
		if ($nowAvatar == '') {
			if ($updateImgURL == '')
				$updateImgURL = 'public/profilePictures/avatar.gif';
			else
				$updateImgURL = 'public/profilePictures/' . $updateImgURL;
		} else {
			if ($updateImgURL == '')
				$updateImgURL = $nowAvatar;
			else
				$updateImgURL = 'public/profilePictures/' . $updateImgURL;
		}
		parent::query("set names utf8");
		$sql = "UPDATE nhanvien
	 			SET HoTen = '$updateName', Password = '$updatePwd', NgaySinh = '$updateBirth', MaPB = '$updateRoom', 
	 				DiaChi = '$updateAddr', SDT = '$updatePhone' , ChucVu = '$updateLevel', IsAdmin = '$updateAdmin',
					GioiTinh = '$updateGender',Email = '$updateMail',ImgUrl = '$updateImgURL'
				WHERE MaNV = '$id'";
		$res = parent::query($sql);
		$this -> disconnect();
		return $res;
	}

}
?>