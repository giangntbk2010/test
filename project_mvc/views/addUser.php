<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Thêm Nhân Viên</title>

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
    	<h1 id='h1User'>Thêm Nhân Viên</h1>
        	<form name="addUser" id="formAddNew" action="addUserProcess.php" onsubmit="return checkInput();" method="post">
                <br><br>
                <label class="elpadding">Họ và tên(*):</label>
                <input type="text" name="nameAdding" id="nameAdding" class="fieldpadding"/>
                <label class="elpadding">Mã NV(*):</label>
                <input type="text" name="idAdding"  id="idAdding" class="fieldpadding" value="NV"/>
                <label class="elpadding" >Password(*):</label>
                <input type="text" name="pwdAdding" id="pwdAdding" class="fieldpadding" />
                <label class="elpadding">Ngày sinh:</label>
                <input type="text" name="birthdayAdding"  id="date" class="fieldpadding"/>
                <label class="elpadding">Giới tính:</label>
                <fieldset>
                <input type="radio"  name="gender" id="gender" value="Nam" class="fieldpadding" /><span class="elpadding">Nam</span>
                <label class="elpadding"> </label>
                <input type="radio"  name="gender" id="gender" value="Nữ" class="fieldpadding" /><span class="elpadding">Nữ</span>
                </fieldset>
                <label class="elpadding">Điện thoại(*):</label>
                <input type="text" name="phoneAdding" id="phoneAdding" class="fieldpadding"/>
                <label class="elpadding">Email(*):</label>
                <input type="text" name="mailAdding" id="mailAdding" class="fieldpadding" value="@ckg.com"/>
                <label class="elpadding">Phòng(*):</label>
                <!--<input type="text" name="roomAdding" id="roomAdding" class="fieldpadding"/> -->
                <!-- edit Code -->

                <select name="roomAdding" id="roomAdding">
                     <?php 
                    $rows = explode("%", $this->msg);
                    foreach( $rows as $v){
                    ?>
                    <option value="<?php echo $v; ?>" ><?php echo $v; ?></option>
                    <?php } ?>
                </select>
                <label class="elpadding">Chức vụ(*):</label>
                <input type="text" name="levelAdding" id="levelAdding"class="fieldpadding"/>
                <label class="elpadding">Is Admin?(*)</label>
                <fieldset>
                <input type="radio"  name="isAdmin" id="isAdmin" value="1" class="fieldpadding" /><span class="elpadding">Có</span>
                <label class="elpadding"> </label>
                <input type="radio"  name="isAdmin" id="isAdmin" value="0" class="fieldpadding" /><span class="elpadding">Không</span>
                </fieldset>
                <label class="elpadding">Địa chỉ:</label>
                <input type="text" name="addrAdding" id="addrAdding" class="fieldpadding"/>
                <label class="elpadding">Ảnh đại diện:</label>
                <input type="file" name="imgAdding" id="imgAdding" class= "fieldpadding"/>
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