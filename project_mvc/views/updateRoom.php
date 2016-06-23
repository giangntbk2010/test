<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Chỉnh sửa thông tin Phòng Ban</title>

		<link href="public/css/admin-style.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="public/hot-sneaks/jquery-ui.css"  type="text/css" />
		<script type="text/javascript" src="public/js/jquery.js"></script>
		<script type="text/javascript" src="public/js/jquery-ui.js"></script>
		<script type="text/javascript" src="public/js/checkInputAddRoom.js"></script>
		<script type="text/javascript" src="public/js/jquery.watermark.js"></script>
		<script type="text/javascript" charset="utf-8" src="public/js/searchInfo.js"></script>
		<script type="text/javascript" src="public/js/checkInputSearch.js"></script>
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
					<h1 id='h1Edit'>Sửa thông tin</h1>
					<?php
					if (!isset($_SESSION['name'])) {
						echo "<script type='text/javascript'>var r= confirm('Hãy Đăng nhập để xem thông tin');
							if( r==true)	window.location = '".__SITE_PATH.'loginPage.php'."';
							else 			window.location = '".__SITE_PATH.'index.php'."';
							</script> ";
					} else{
					$row = explode("%", $this -> msg);
					?>
					<form name="addRoom" id="formUpdate" action="updateRoomProcess.php?MaPB=<?php echo $row[0]; ?>" onsubmit="return checkInput();" method="post">
						<br>
						<br>
						<label class="elpadding">Tên Phòng(*):</label>
						<input type="text" name="roomNameAdding" id="roomNameAdding" class="fieldpadding" value="<?php echo $row[1]; ?>"/>
						<label class="elpadding" >Chức năng:</label>
						<input type="text" name="featureAdding" id="featureAdding" class="fieldpadding" value ="<?php echo $row[2]; ?>"/>
						<input type="submit" class="gobutton" name="submitAdd" id="submitAdd" value="SUBMIT" />
					</form>
					<h3>Tìm kiếm trong trang</h3>
					<ul>
						<div id="searchContent">
							<form name="searchPan" id="searchPan" method="get" action="searchInfo.php" onsubmit="return checkInputSearch();">
								<div>
									<strong>Thông tin: </strong><span id="searchName"></span>
								</div>
								<table>
									<tr>
										<td>
										<input type="text" name="searchInfo" id="searchInfo" />
										</td>
										<td>
										<input type="submit" class="gobutton" id="search" value="search" />
										</td>
									</tr>
								</table>
								<div id="searchResultHints" ></div>
							</form>
						</div>
					</ul>
				</div>
			</div>
		</div>
		<?php
		include ("bottom.php");
		footerDraw();
		}?>
	</body>
</html>