<?php
function sidebarDraw() {
	echo "
<div id='leftPanMenu'>
	<div id='schedule'>
		<h2>Lịch làm việc</h2>
		<a href='".__SITE_PATH."schedule.php'>&nbsp;</a>
	</div>
	<div id='workRoom'>
		<h2>Phòng Ban</h2>
		<a href='".__SITE_PATH."room.php'>&nbsp;</a>
	</div>
	<div id='userInfo'>
		<h2>Cá nhân</h2>
		<a href='".__SITE_PATH."userInfo.php'>&nbsp;</a>
	</div>
</div>
";
}
?>
