<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Các Phòng Ban của công ty</title>
		<link href="public/css/admin-style.css" rel="stylesheet" type="text/css" />
		<link href="public/css/demo_table_jui.css" rel="stylesheet" type="text/css" />
		<link href="public/hot-sneaks/jquery-ui.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="public/js/jquery.js"></script>
		<script type="text/javascript" src="public/js/jquery.dataTables.js"></script>
		<script type="text/javascript" src="public/js/createTable.js"></script>
		<script type="text/javascript" src="public/js/deleteAccept.js"></script>
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
					<h1 id='h1Room'>Phòng-Ban</h1>
					<?php
					if (!isset($_SESSION['name'])) {
						echo "<script type='text/javascript'>
						 var r= confirm('Hãy Đăng nhập để xem thông tin');
						 if( r==true) 	window.location = '" . __SITE_PATH . "loginPage.php';
						 else 		 	window.location = '" . __SITE_PATH . "index.php';
						 </script> ";
					} else {
						echo $this -> msg;
					}
					?>
					<ul>
						<a href="addRoom.php">
						<li>
							Thêm Phòng
						</li></a>
					</ul>
				</div>
			</div>
		</div>

		<?php
		include ("bottom.php");
		footerDraw();
		?>
	</body>
</html>
