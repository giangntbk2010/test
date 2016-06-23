<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Chỉnh sửa thông tin Dự Án</title>

		<link href="public/css/admin-style.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="public/hot-sneaks/jquery-ui.css"  type="text/css" />
		<script type="text/javascript" src="public/js/jquery.js"></script>
		<script type="text/javascript" src="public/js/jquery-ui.js"></script>
		<script type="text/javascript" src="public/js/jquery.watermark.js"></script>
		<script type="text/javascript" charset="utf-8" src="public/js/searchInfo.js"></script>
		<script type="text/javascript" src="public/js/checkInputSearch.js"></script>
		<script type="text/javascript" src="public/js/checkInputAddUser.js"></script>
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
			<?php
			$row = explode("%", $this -> msg);
			$joiner = explode("#", $row[6]);
			?>

			<div id="rightPan">
				<div id="rightbodyPan">
					<h1 id='h1Edit'>Sửa thông tin</h1>
					<form name="addUser" id="formUpdate" action="updateProjectProcess.php?MaDA=<?php echo $row[0]; ?>" onsubmit="return checkInput();" method="post">
						<br>
						<br>
						<label class="elpadding">Tên Dự Án:</label>
						<input type="text" name="projectNameAdding" id="projectNameAdding" class="fieldpadding" value="<?php echo $row[1]; ?>"/>
						<label class="elpadding" >Kinh phí:</label>
						<input type="text" name="feeAdding" id="feeAdding" class="fieldpadding" value="<?php echo $row[2]; ?>"/>
						<label class="elpadding">Ngày bắt đầu:</label>
						<input type="text" name="startDayAdding"  id="date" class="fieldpadding" value="<?php echo $row[3]; ?>"/>
						<label class="elpadding">Ngày kết thúc:</label>
						<input type="text" name="endDayAdding"  id="date1" class="fieldpadding" value="<?php echo $row[4]; ?>"/>
						<label class="elpadding">Trạng thái : </label>
						<fieldset>
							<?php
if($row[5]== 'Đang tiến hành'){
							?>
							<input type="radio"  name="projectStatus" id="projectStatus" value="Đang tiến hành" class="fieldpadding" checked />
							<span class="elpadding">Đang tiến hành</span>
							<span class="elpadding"></span>
							<input type="radio"  name="projectStatus" id="projectStatus" value="Hoàn Thành" class="fieldpadding" />
							<span class="elpadding">Hoàn thành</span>
							<span class="elpadding"></span>
							<input type="radio"  name="projectStatus" id="projectStatus" value="Tạm Ngưng" class="fieldpadding" />
							<span class="elpadding">Tạm ngưng</span>
							<span class='elpadding' ></span>
							<input type="radio"  name="projectStatus" id="projectStatus" value="Hủy Bỏ" class="fieldpadding" />
							<span class="elpadding">Hủy Bỏ</span>
							<?php }else if($row[5] == 'Hoàn Thành'){ ?>
							<input type="radio"  name="projectStatus" id="projectStatus" value="Đang tiến hành" class="fieldpadding"/>
							<span class="elpadding">Đang tiến hành</span>
							<span class="elpadding"></span>
							<input type="radio"  name="projectStatus" id="projectStatus" value="Hoàn Thành" class="fieldpadding" checked/>
							<span class="elpadding">Hoàn thành</span>
							<span class="elpadding"></span>
							<input type="radio"  name="projectStatus" id="projectStatus" value="Tạm Ngưng" class="fieldpadding" />
							<span class="elpadding">Tạm ngưng</span>
							<span class='elpadding' ></span>
							<input type="radio"  name="projectStatus" id="projectStatus" value="Hủy Bỏ" class="fieldpadding" />
							<span class="elpadding">Hủy Bỏ</span>
							<?php }else if($row[5] == 'Tạm Ngưng'){ ?>
							<input type="radio"  name="projectStatus" id="projectStatus" value="Đang tiến hành" class="fieldpadding" />
							<span class="elpadding">Đang tiến hành</span>
							<span class="elpadding"></span>
							<input type="radio"  name="projectStatus" id="projectStatus" value="Hoàn Thành" class="fieldpadding" />
							<span class="elpadding">Hoàn thành</span>
							<span class="elpadding"></span>
							<input type="radio"  name="projectStatus" id="projectStatus" value="Tạm Ngưng" class="fieldpadding" checked />
							<span class="elpadding">Tạm ngưng</span>
							<span class='elpadding' ></span>
							<input type="radio"  name="projectStatus" id="projectStatus" value="Hủy Bỏ" class="fieldpadding" />
							<span class="elpadding">Hủy Bỏ</span>
							<?php }else if($row[5] == 'Hủy Bỏ'){ ?>
							<input type="radio"  name="projectStatus" id="projectStatus" value="Đang tiến hành" class="fieldpadding"  />
							<span class="elpadding">Đang tiến hành</span>
							<span class="elpadding"></span>
							<input type="radio"  name="projectStatus" id="projectStatus" value="Hoàn Thành" class="fieldpadding" />
							<span class="elpadding">Hoàn thành</span>
							<span class="elpadding"></span>
							<input type="radio"  name="projectStatus" id="projectStatus" value="Tạm Ngưng" class="fieldpadding" />
							<span class="elpadding">Tạm ngưng</span>
							<span class='elpadding' ></span>
							<input type="radio"  name="projectStatus" id="projectStatus" value="Hủy Bỏ" class="fieldpadding" checked />
							<span class="elpadding">Hủy Bỏ</span>
							<?php }else{ ?>
							<input type="radio"  name="projectStatus" id="projectStatus" value="Đang tiến hành" class="fieldpadding"  />
							<span class="elpadding">Đang tiến hành</span>
							<span class="elpadding"></span>
							<input type="radio"  name="projectStatus" id="projectStatus" value="Hoàn Thành" class="fieldpadding" />
							<span class="elpadding">Hoàn thành</span>
							<span class="elpadding"></span>
							<input type="radio"  name="projectStatus" id="projectStatus" value="Tạm Ngưng" class="fieldpadding" />
							<span class="elpadding">Tạm ngưng</span>
							<span class='elpadding' ></span>
							<input type="radio"  name="projectStatus" id="projectStatus" value="Hủy Bỏ" class="fieldpadding" />
							<span class="elpadding">Hủy Bỏ</span>
							<?php } ?>
						</fieldset>
						<br>
						<br>
						<label class="elpadding">Tham gia</label>
						<?php
if( $joiner == NULL) {
						?>
						<textarea class="fieldpadding" rows="3"  name="joinAdding"> </textarea>																		
						<?php }else{ ?>
						<textarea class="fieldpadding" rows="3"  name="joinAdding"><?php
						foreach ($joiner as $k => $v)
							if ($v != null)
								echo $v . ',';
 						?></textarea>																
						<?php } ?>
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
		?>
	</body>
</html>