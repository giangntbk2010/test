<?php
function navDraw() {
	echo "
<div id='nav'>
	<ul>
		<li>
			<a href='".__SITE_PATH.'index.php'."'>Trang chủ</a>
		</li>
		<li>
			<a href='".__SITE_PATH.'room.php'."'>Phòng Ban</a>
		</li>
		<li>
			<a href='".__SITE_PATH.'staff.php'."'>Nhân Viên</a>
		</li>
		<li>
			<a href='".__SITE_PATH.'project.php'."'>Dự Án</a>
		</li>
		<li>
			<a href='".__SITE_PATH.'chat.php'."'>Thảo luận</a>
		</li>
	</ul>
</div>
";
}
?>