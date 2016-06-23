<?php
class AddUserProcessModel extends Model {
	public function __construct() {
		parent::__construct();
	}

	public function setData() {
		$newName = trim($_POST["nameAdding"]);
		$newId = trim($_POST["idAdding"]);
		$newPwd = trim($_POST["pwdAdding"]);
		$newBirth = trim($_POST["birthdayAdding"]);
		$newPhone = trim($_POST["phoneAdding"]);
		$newLevel = trim($_POST["levelAdding"]);
		$newRoom = trim($_POST["roomAdding"]);
		$isAdmin = trim($_POST["isAdmin"]);
		$newAddr = trim($_POST["addrAdding"]);
		$newMail = trim($_POST["mailAdding"]);
		$gender = trim($_POST['gender']);
		$imgURL = trim($_POST["imgAdding"]);

		$check = parent::query("SELECT MaNV FROM nhanvien WHERE MaNV LIKE '%$newId%'");
		if ($check -> num_rows == 0) {
			if ($imgURL == '')
				$imgURL = 'public/profilePictures/avatar.gif';
			$sql = "INSERT INTO nhanvien(MaNV,HoTen,NgaySinh,DiaChi,SDT,Password,MaPB,ChucVu,Email,IsAdmin,ImgUrl,GioiTinh)
				    VALUES ('$newId','$newName','$newBirth','$newAddr','$newPhone','$newPwd','$newRoom','$newLevel','$newMail','$isAdmin','$imgURL','$gender')";
			parent::query("set names utf8");
			$res = parent::realQuery($sql);
			parent::disconnect();
			if ($res != NULL) {
				echo "<script type='text/javascript'>alert('Add User Success! '); window.location = 'staffAdmin.php';</script>";
			} else
				echo "<script type='text/javascript'>alert('Add User Failed, Retry later !') ; window.location = 'addUser.php' ;</script>";
		} else {
			echo "<script type='text/javascript'>alert('MaNV have been in database !') ; window.location = 'addUser.php' ;</script>";
		}

	}

}
?>