<?php
function sidebarAdminDraw() {
	echo "
<div id='manager'>
	<h3>Quản lý</h3>
	<ul>
		<li>
			<a href='".__SITE_PATH."staffAdmin.php'>Quản lý Nhân Viên</a>
		</li>
		<li>
			<a href='".__SITE_PATH."projectAdmin.php'>Quản lý Dự Án</a>
		</li>
		<li>
			<a href='".__SITE_PATH."roomAdmin.php'>Quản lý Phòng Ban</a>
		</li>
		<li>
			<a href='".__SITE_PATH."scheduleAdmin.php'>Quản lý Thời gian</a>
		</li>
	</ul>
</div>
";
}
?>