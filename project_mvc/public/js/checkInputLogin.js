function checkLogin() {
	var id = document.form_login.userid.value;
	var pwd = document.form_login.userpwd.value;
	if (id == "" || pwd == "") {
		alert("Hãy nhập đủ ID Nhân viên và mật khẩu ");
		return false;
	}
	return true;
}