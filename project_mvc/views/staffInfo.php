<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Thông tin nhân viên</title>
		<link href="public/css/nobanner-style.css" rel="stylesheet" type="text/css" />
	</head>
	<body>

		<?php
		include ("top.php");
		navDraw();
		?>

		<div id="bodyPan">
			<div id="leftPan">
				<?php
				include ("sidebar.php");
				sidebarDraw();
				include ("login.php");
				?>
			</div>
			<div id="rightPan">
				<div id="rightbodyPan">
					<h2 id='h2User'><?php echo "<a href= '".__SITE_PATH.'staff.php'." title='Quay trở về Danh sách Nhân Viên'>Thông Tin</a>"
					?></h2>
					<?php
					if (!isset($_SESSION['name'])) {
						echo "<script type='text/javascript'>var r= confirm('Hãy Đăng nhập để xem thông tin');
								if( r==true)	window.location = '".__SITE_PATH.'loginPage.php'."';
								else			window.location = '".__SITE_PATH.'index.php'."';
				                </script> ";
					} else {
						echo $this -> msg;
					}
					?>
					<ul>
						<a href="staffFiles.php">
						<li>
							Trang Tài liệu cá nhân 
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