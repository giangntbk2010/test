<?php
function footerDraw() {
	echo "
<div id='footer'>
	<div id='footernext'>
		<ul>
			<li>
				<a href='".__SITE_PATH."index.php'>Trang chủ </a>|
			</li>
			<li>
				<a href='".__SITE_PATH."room.php'>Phòng ban</a> |
			</li>
			<li>
				<a href='".__SITE_PATH."project.php'>Dự án</a>|
			</li>
			<li>
				<a href='".__SITE_PATH."staff.php'>Nhân Viên</a> |
			</li>
			<li>
				<a href='".__SITE_PATH."chat.php'>Thảo luận</a>
			</li>
		</ul>
		<p>
			Công ty TNHH GTK & FRIENDS
			<br>
			Copyright &copy all right reaserved
		</p>
	</div>
</div>
";
}
?>