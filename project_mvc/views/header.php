<?php
function headerDraw() {
	echo "
<div id='header'>
	<div id='headerLeft'>
		<div id='schedule'>
			<h2>Lịch làm việc</h2>
			<a href='".__SITE_PATH."schedule.com'>&nbsp;</a>
		</div>
		<div id='workRoom'>
			<h2>Phòng Ban</h2>
			<a href='".__SITE_PATH."room.com'>&nbsp;</a>
		</div>
		<div id='userInfo'>
			<h2>Cá nhân</h2>
			<a href='".__SITE_PATH."userInfo.com'>&nbsp;</a>
		</div>
	</div>
	<h1>Best Company</h1>
</div>
";
}
?>
