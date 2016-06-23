<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Chỉnh sửa thông tin Nhân Viên</title>

<link href="public/css/admin-style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="public/hot-sneaks/jquery-ui.css"  type="text/css" />
<script type="text/javascript" src="public/js/jquery.js"></script>
<script type="text/javascript" src="public/js/jquery-ui.js"></script>
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
        	<form name="addUser" id="formAddNew" action="updateStaffProcess.php?MaNV=<?php echo $row[0]; ?>&avatar=<?php echo $row[10]; ?>" onsubmit="return checkInput();" method="post">
                <br><br>
                <label class="elpadding">Họ và tên:</label>
                <input type="text" name="nameAdding"  id="nameAdding" class="fieldpadding" value="<?php echo $row[1]; ?>" />
                <label class="elpadding" >Password:</label>
                <input type="text" name="pwdAdding" id="pwdAdding" class="fieldpadding" value="<?php echo $row[5]; ?>" />
                <label class="elpadding">Ngày sinh:</label>
                <input type="text" name="birthdayAdding"  id="date" class="fieldpadding" value="<?php echo $row[2]; ?>"/>
                <label class="elpadding">Giới tính:</label>
                <fieldset>
                <?php 
                if ($row[11]=='Nam') {
                ?>
                <input type="radio"  name="gender" id="gender" value="Nam" class="fieldpadding" checked/><span class="elpadding">Nam</span>
                <label class="elpadding"> </label>
                <input type="radio"  name="gender" id="gender" value="Nữ" class="fieldpadding" /><span class="elpadding">Nữ</span>
                <?php
				}else if ( $row[11] == 'Nữ'){
                ?>
                <input type="radio"  name="gender" id="gender" value="Nam" class="fieldpadding" /><span class="elpadding">Nam</span>
                <label class="elpadding"> </label>
                <input type="radio"  name="gender" id="gender" value="Nữ" class="fieldpadding" checked/><span class="elpadding">Nữ</span>
                <?php
				}else{
                ?>
                <input type="radio"  name="gender" id="gender" value="Nam" class="fieldpadding"/><span class="elpadding">Nam</span>
                <label class="elpadding"> </label>
                <input type="radio"  name="gender" id="gender" value="Nữ" class="fieldpadding" /><span class="elpadding">Nữ</span>
                <?php } ?>
                </fieldset>
                <label class="elpadding">Số điện thoại:</label>
                <input type="text" name="phoneAdding" id="phoneAdding" class="fieldpadding" value="<?php echo $row[4]; ?>"/>
                <label class="elpadding">Email:</label>
                <input type="text" name="mailAdding" id="mailAdding" class="fieldpadding" value="<?php echo $row[8]; ?>"/>
                <label class="elpadding">Phòng:</label>
                <input type="text" name="roomAdding" id="roomAdding" class="fieldpadding" value="<?php echo $row[6]; ?>"/>
                <label class="elpadding">Chức vụ:</label>
                <input type="text" name="levelAdding" id="levelAdding"class="fieldpadding" value="<?php echo $row[7]; ?>"/>
                <label class="elpadding">Is Admin?</label>
                <fieldset>
                <?php
                    if( $row[9]== 1){
                ?>
                <input type="radio"  name="isAdmin" id="isAdmin" value="1" class="fieldpadding" checked/><span class="elpadding">Có</span>
                <label class="elpadding"> </label>
                <input type="radio"  name="isAdmin" id="isAdmin" value="0" class="fieldpadding" /><span class="elpadding">Không</span>
                <?php
				}else if ($row[9]==0){
                ?>
                <input type="radio"  name="isAdmin" id="isAdmin" value="1" class="fieldpadding" /><span class="elpadding">Có</span>
                <label class="elpadding"> </label>
                <input type="radio"  name="isAdmin" id="isAdmin" value="0" class="fieldpadding" checked/><span class="elpadding">Không</span>
                <?php }else{ ?>
                <input type="radio"  name="isAdmin" id="isAdmin" value="1" class="fieldpadding" /><span class="elpadding">Có</span>
                <label class="elpadding"> </label>
                <input type="radio"  name="isAdmin" id="isAdmin" value="0" class="fieldpadding" checked/><span class="elpadding">Không</span>
                <?php } ?>
                </fieldset>
                <label class="elpadding">Địa chỉ:</label>
                <input type="text" name="addrAdding" id="addrAdding" class="fieldpadding" value="<?php echo $row[3]; ?>"/>
                <?php $img = explode("/", $row[10]); ?>
                <label class="elpadding">Ảnh đại diện:</label><fieldset><label id='linkAvatar' class='elpadding'><?php echo $img[2]; ?></label>
                <input type="file" name="imgAdding" id="imgAdding" class= "fieldpadding" /></fieldset>
                <input type="submit" class="gobutton" name="submitAdd" id="submitAdd" value="SUBMIT" />
            </form>
        </div>
    </div>
</div>
<?php
include ("bottom.php");
footerDraw();
}
?>
</body>
</html>