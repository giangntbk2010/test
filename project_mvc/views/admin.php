<?php
  if( isset($_SESSION['isAdmin']) ){  
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<title>Công ty GTK & Friends</title>
		<link href="public/css/admin-style.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="public/js/jquery.js"></script>
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
					<h2 id='h1Manager'>Quản lý</h2>

					<p class="bluetext">
						Công ty GTK SOLUTIONS Công ty hàng đầu Việt Nam
					</p>
					<?php
					$info = explode("/", $this -> msg);
					?>
					<p>
						<h3>Thống kê số lượng</h3>
						<ul>
							<li>
								Tổng số Nhân Viên: <?php echo $info[0]; ?>
								Người
							</li>
							<li>
								Tổng số Dự Án    : <?php echo $info[1]; ?>
								Dự án
							</li>
							<li>
								Tổng số Phòng ban: <?php echo $info[2]; ?>
								Phòng
							</li>
						</ul>
					</p>

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
		?>
	</body>
</html>
<?php }else {
	echo "<script type='text/javascript'>
	alert('Bạn không có quyền truy cập trang này');
	</script> ";
	}
?>