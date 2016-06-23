<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>User's files</title>
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
					<?php
					$file = explode(":", $this -> msg);
					if (!isset($_SESSION['name'])) { ?>
			
					<?php
					echo "<script type='text/javascript'>var r= confirm('Hãy Đăng nhập để xem thông tin');
					if( r==true)	window.location = '".__SITE_PATH.'loginPage.php'."';
					else 			window.location = '".__SITE_PATH.'index.php'."';
					</script> ";
					} else {?>
					<h2 id='h2File'>Tài liệu của <?php echo $_SESSION['name']?> </h2>
					<form id="form_upload" action="uploadFile.php?MaNV=<?php echo $_SESSION['id']?>" method="post" enctype="multipart/form-data">
						<input name="fileupload" type="file" value="File Upload"><br>
						<input type="submit" class="gobutton" name="upload" value="Upload">
					</form>
					<p>	
						<?php foreach ($file as $key => $value) {
							if ($value == null) continue; 
							echo "<a target='_blank' href='".__SITE_PATH."$value'>".__SITE_PATH."$value</a><br><br>";
						}?>
					</p>
					<?php } ?>
				</div>
			</div>
		</div>

		<?php
		include ("bottom.php");
		footerDraw();
		?>
	</body>
</html>