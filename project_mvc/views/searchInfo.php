<?php 
  if( isset($_SESSION['isAdmin']) ){
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<title>Kết quả</title>
		<link href="public/css/admin-style.css" rel="stylesheet" type="text/css" />
		<link href="public/css/demo_table_jui.css" rel="stylesheet" type="text/css" />
		<link href="public/hot-sneaks/jquery-ui.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="public/js/jquery.js"></script>
		<script type="text/javascript" src="public/js/loginProcess.js"></script>
		<script type="text/javascript" src="public/js/jquery.watermark.js"></script>
		<script type="text/javascript" src="public/js/searchInfo.js"></script>
		<script type="text/javascript" src="public/js/jquery.dataTables.js"></script>
		<script type="text/javascript" src="public/js/createTable.js"></script>
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
					<h2 id='h1Manager'>Kết quả</h2>
					<p class="bluetext">
						Công ty CKG SOLUTIONS _ Chúng ta là 1
					</p>
					<?php
					echo $this -> msg;
					?>
					<ul>
						<li>
							<?php echo "<a href='" . __SITE_PATH . "admin.php'>Trở về trang trước</a>"; ?>
						</li>
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
<?php }else {
	echo "<script type='text/javascript'>
	alert('Permisssion Access');
	</script> ";
	}
?>