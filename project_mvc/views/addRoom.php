<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Thêm Phòng Ban</title>

		<link href="public/css/admin-style.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="public/hot-sneaks/jquery-ui.css"  type="text/css" />
		<script type="text/javascript" src="public/js/jquery.js"></script>
		<script type="text/javascript" src="public/js/jquery-ui.js"></script>
		<script type="text/javascript" src="public/js/checkInputAddRoom.js"></script>
	</head>
	<body>

		<?php
		include ("top.php");
		navDraw();
		?>

		<div id="bodyPan">
			<div id="leftPan">
				<?php
				include ("login.php");
				include ("left_sidebar_admin.php");
				sidebarAdminDraw();
				?>
			</div>

			<div id="rightPan">
				<div id="rightbodyPan">
					<h1 id='h1Room'>Thêm Phòng</h1>
					<form name="addRoom" id="formAddNew" action="addRoomProcess.php" onsubmit="return checkInput();" method="post">
						<br>
						<br>
						<label class="elpadding">Tên Phòng(*):</label>
						<input type="text" name="roomNameAdding" id="roomNameAdding" class="fieldpadding"/>
						<label class="elpadding">Mã Phòng(*):</label>
						<input type="text" name="roomIdAdding"  id="roomIdAdding" class="fieldpadding" value="P"/>
						<label class="elpadding" >Chức năng:</label>
						<input type="text" name="featureAdding" id="featureAdding" class="fieldpadding" />
						<input type="submit" class="gobutton" name="submitAdd" id="submitAdd" value="SUBMIT" />
					</form>
				</div>
			</div>
		</div>
		<?php
		include ("bottom.php");
		footerDraw();
		?>
	</body>
</html>