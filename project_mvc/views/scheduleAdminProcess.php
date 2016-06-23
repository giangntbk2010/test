<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Quản lý Thời gian làm việc </title>
		<link href="public/css/admin-style.css" rel="stylesheet" type="text/css" />
		<link href="public/css/demo_table_jui.css" rel="stylesheet" type="text/css" />
		<link href="public/hot-sneaks/jquery-ui.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="public/js/jquery.js"></script>
		<script type="text/javascript" src="public/js/loginProcess.js"></script>
		<script type="text/javascript" src="public/js/jquery.dataTables.js"></script>
		<script type="text/javascript" src="public/js/createTable.js"></script>
		<script type="text/javascript" src="public/js/deleteAccept.js"></script>
		<script type="text/javascript" src="public/js/datepicker.js"></script>
		<script type="text/javascript" src="public/js/jquery-ui.js"></script>

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
					<h2 id='h1Schedule'>Quản lý Lịch làm việc</h2>
					<?php
					if (!isset($_SESSION['name'])) {
					echo "<script type='text/javascript'>	var r= confirm('Hãy Đăng nhập để xem thông tin');
					if( r==true) 	window.location = '" . __SITE_PATH . "loginPage.php';
					else 		 	window.location = '" . __SITE_PATH . "index.php';
					</script> ";
					}else{
					?>
					<form id='timetable' action='scheduleProcess.php' method='get'>
						<label class='elpadding'>Đi đến ngày:</label>
						<input type='text' id='date' name = 'dateView' class='fieldpadding'/>
						<input type='submit' class='gobutton'  name='goSchedule' id='goSchedule' value="SUBMIT"/>
					</form>
					<div class='message' id='message'>
						<?php
						echo $this -> msg;
						?>
					</div>
				</div>
			</div>
		</div>
		<?php } ?>
		<?php
		include ("bottom.php");
		footerDraw();
		?>
	</body>
</html>