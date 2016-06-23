<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Công ty GTK & Friends </title>
		<link  href="public/css/main-style.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="public/js/checkInputLogin.js"></script>
	</head>
	<body>

		<!-- ....................................
		*
		* 			Menu select option */
		*
		*......................................-->

		<?php
		include ("top.php");
		navDraw();
		?>

		<!--........................................
		*
		* Header include menu and cover photo
		*
		*........................................-->

		<?php
		include ("header.php");
		headerDraw();
		?>

		<!--..............................................
		*
		*  Main Body of webpage
		*
		*...............................................-->

		<div id="bodyPan">

			<!--
			* Left Panel having login box
			*-->

			<div id="leftPan">
				<?php
				include ("login.php");
				?>
			</div>

			<!--
			* Left Panel having login box
			*-->

			<div id="rightPan">
				<div id="rightbodyPan">
					<h2>Giới thiệu</h2>
					<p class="bluetext">
						Công ty GTK SOLUTIONS xin cảm ơn các bạn đã ghé thăm
					</p>
					<p>
						Thực tế hiện nay, lực lượng lao động đang ngày càng một gia tăng, đặc biệt là lực lượng lao động trình độ cao. Trong đó có cả sinh viên chúng ta, những người lao động vào thời gian rảnh rỗi. Vì thế hình thức làm việc partime ngày càng phổ biến.
						<br>
						Một công ty với hình thức part time cần thiết phải có sự quản lý lực lượng lao động này. Nếu có sự quản lý tốt sẽ tận dụng được tối đa thời gian, và nâng cao hiệu quả lao động.
						<br>
						Hơn thế nữa ứng dụng của công nghệ thông tin vào lao động ngày càng trở nên phổ biến, đặc biệt là ứng dụng của internet và website với sự tiện lợi của nó.
						<br>
						Chính vì thế việc tạo ra những trang web để quản lí nhân viên cho các công ty với hình thức làm việc partime là cần thiết.
					</p>
					<div id="rightbodymore">
						<a href="#">more</a>
					</div>
					<h3>Dịch vụ</h3>
					<ul>
						<li>
							Phát triển Website
						</li>
						<li>
							Mobile software Center(Android, iOS, WindownPhone)
						</li>
						<li>
							Thiết kế Banner quảng cáo
						</li>
						<li>
							Số hóa tài liệu văn bản
						</li>
					</ul>
					<div id="rightbodymorenext">
						<a href="#">more</a>
					</div>
				</div>
			</div>
		</div>

		<!--..............................................
		*
		*  Footer of site
		*
		*...............................................-->

		<?php
		include ("bottom.php");
		footerDraw();
		?>
	</body>
</html>
