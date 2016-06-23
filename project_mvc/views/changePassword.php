<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Đổi mật khẩu</title>
		<link href="public/css/main-style.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="public/js/jquery.js"></script>
		<script type="text/javascript" src="public/js/checkInputChange.js"></script>
	</head>
	<body>

		<?php
		include ("top.php");
		navDraw();
		?>

		<div id="bodyPan">
			<div id="bodyCenter">
				<h2>Nhập mật khẩu mới để đổi mật khẩu?</h2>
				<form id="form_login" name="form_login" action="changePasswordProcess.php" method="post" >
					<br>
					<br>
					<br>
					<br>
					<label class="elpadding">Nhập Mật khẩu mới: </label>
					<input type="password" name="newPass" id="newPass" class="fieldpadding"/>
					<label class="elpadding">Re-type:</label>
					<input type="password" name="retypePass" id="retypePass" class="fieldpadding"/>
					<input type="submit" class="gobutton" name="changePass" id="changePass" value="SUBMIT" onclick=" return checkInput();"/>
				</form>
				<div class="message" id="message"></div>
			</div>
		</div>

		<?php
		include ("bottom.php");
		footerDraw();
		?>
	</body>
</html>
