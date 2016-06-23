function checkInput() {
	var newPass = document.form_login.newPass.value;
	var retypePass = document.form_login.retypePass.value;
	if (newPass == "" || retypePass == "") {
		alert("Chưa nhâp lại mật khẩu và xác nhận");
		window.location("changePassword.php");
	} else if (newPass != retypePass) {
		alert("Lỗi nhập 2 trường không khớp");
		window.location("changePassword.php");
	}
}
