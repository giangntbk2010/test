<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Trang Đăng nhập </title>
		<link href="public/css/main-style.css" rel="stylesheet" type="text/css" />
	</head>
	<body>

		<?php
		include ("top.php");
		navDraw();
		?>

		<div id="bodyPan">
			<div id="bodyCenter">
				<h2>Lỗi đăng nhập ! Phải đăng nhập mới có quyền xem trang này</h2>
				<form id="form_login" name="form_login" action="user.php" method="post">
					<br>
					<br>
					<br>
					<br>
					<label class="elpadding">Mã NV: </label>
					<input type="text" name="userid" id="userid" class="fieldpadding"/>
					<label class="elpadding">Password:</label>
					<input type="password" name="userpwd" id="userpwd" class="fieldpadding"/>
					<input type="submit" class="gobutton" name="login" id="login" value="LOGIN" />
					<a href='#'><label>Quên mật khẩu</label></a>
				</form>
				<div class="message" id="message"><?php echo $this -> msg; ?></div>
			</div>
		</div>

		<?php
		include ("bottom.php");
		footerDraw();
		?>
	</body>
</html>
