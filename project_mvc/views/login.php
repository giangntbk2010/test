<?php
if( ! isset($_SESSION["name"]) && ! isset($_SESSION["isAdmin"])) {
?>
<div id="leftmemberPan">
	<h2>member <span>login</span></h2>
	<form  id="form_login" name="form_login" action="user.php" method="post">
		<label>Mã NV</label>
		<input type="text" name="userid" id="userid"/>
		<label class="pwdpadding">Password</label>
		<input class="fieldpadding" type="password" name="userpwd" id="userpwd"/>
		<div id="leftPango">
			<p class="textposition">
				<a href="#">Quên mật khẩu?</a>
			</p>
			<input type="submit" class="gobutton" id="login" name="login" value="login" onclick="checkLogin()"/>
		</div>
	</form>
	<div class="message" id="message"></div>
</div>
<?php
}else if ( isset($_SESSION["name"]) && ! isset($_SESSION["isAdmin"]) )   {
?>
<div id="leftmemberPan">
	<h2>member <span>login</span></h2>
	<p class='message'>
		<span style='color:#709CA1' ><?php echo Session::get('name'); ?></span>
		<br>
		<?php echo "<a href='".__SITE_PATH.'userInfo.php'."'> Thông tin chi tiết</a> "?>
		<br>
		<?php echo "<a href='" . __SITE_PATH . 'user.php' . "'>Đăng xuất</a>"; ?>
	</p>
</div>
<?php
}else if ( isset($_SESSION["name"]) && isset($_SESSION["isAdmin"]) ) {
?>
<div id="leftmemberPan">
	<h2>member <span>login</span></h2>
	<p class='message'>
		Admin <span style='color:#709CA1' ><?php echo Session::get('name'); ?></span>
		<br>
		<?php echo "<a href='".__SITE_PATH.'userInfo.php'."'> Thông tin chi tiết</a> "?>
		<br>
		<?php echo "<a href='" . __SITE_PATH . "admin.php' target='_blank'> Trang Quản lý</a> "; ?>
		<br>
		<?php echo "<a href='" . __SITE_PATH . 'user.php' . "'>Đăng xuất</a>"; ?>
	</p>
</div>
<?php
}else{
?>
<div id="leftmemberPan">
	<h2>member <span>login</span></h2>
	<form  id="form_login" name="form_login" action="user.php" method="post">
		<label>Your ID</label>
		<input type="text" name="userid" id="userid"/>
		<label class="pwdpadding">Password</label>
		<input class="fieldpadding" type="password" name="userpwd" id="userpwd"/>
		<div id="leftPango">
			<p class="textposition">
				<a href="#">Quên mật khẩu?</a>
			</p>
			<input type="submit" class="gobutton" id="login" name="login" value="login" onclick="checkLogin()/>
		</div>
	</form>
	<div class="message" id="message"></div>
</div>
<?php
}
?>