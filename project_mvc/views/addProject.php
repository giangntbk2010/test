<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Thêm Dự Án</title>

		<link href="public/css/admin-style.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="public/hot-sneaks/jquery-ui.css"  type="text/css" />
		<script type="text/javascript" src="public/js/jquery.js"></script>
		<script type="text/javascript" src="public/js/jquery-ui.js"></script>
		<script type="text/javascript" src="public/js/checkInputAddProject.js"></script>
		<script type="text/javascript" src="public/js/datepicker.js"></script>
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
					<h1 id='h1Project'>Thêm Dự Án</h1>
					<form name="addProject" id="formAddNew" action="addProjectProcess.php" onsubmit="return checkInput();" method="post">
						<br>
						<br>
						<label class="elpadding">Tên Dự Án(*):</label>
						<input type="text" name="projectNameAdding" id="projectNameAdding" class="fieldpadding"/>
						<label class="elpadding">Mã Dự Án(*):</label>
						<input type="text" name="projectIdAdding"  id="projectIdAdding" class="fieldpadding" value="DA"/>
						<label class="elpadding" >Kinh phí:</label>
						<input type="text" name="feeAdding" id="feeAdding" class="fieldpadding" />
						<label class="elpadding">Ngày bắt đầu(*):</label>
						<input type="text" name="startDayAdding"  id="date" class="fieldpadding"/>
						<label class="elpadding">Ngày kết thúc(*):</label>
						<input type="text" name="endDayAdding"  id="date1" class="fieldpadding"/>
						<label class="elpadding">Trạng thái : </label>
						<fieldset>
							<input type="radio"  name="projectStatus" id="projectStatus" value="Đang tiến hành" class="fieldpadding"/>
							<span class="elpadding">Đang tiến hành</span>
							<span class="elpadding"></span>
							<input type="radio"  name="projectStatus" id="projectStatus" value="Hoàn thành" class="fieldpadding" />
							<span class="elpadding">Hoàn thành</span>
							<span class="elpadding"></span>
							<input type="radio"  name="projectStatus" id="projectStatus" value="Tạm ngưng" class="fieldpadding" />
							<span class="elpadding">Tạm ngưng</span>
							<span class="elpadding"></span>
							<input type="radio"  name="projectStatus" id="projectStatus" value="Hủy Bỏ" class="fieldpadding" />
							<span class="elpadding">Hủy Bỏ</span>
						</fieldset>
						<br>
						<br>
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