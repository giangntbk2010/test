<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Các Phòng Ban của công ty</title>
		<link href="public/css/nobanner-style.css" rel="stylesheet" type="text/css" />
		<link href="public/css/demo_table_jui.css" rel="stylesheet" type="text/css" />
		<link href="public/hot-sneaks/jquery-ui.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="public/js/jquery.js"></script>
		<script type="text/javascript" src="public/js/jquery.dataTables.js"></script>
		<script type="text/javascript" src="public/js/createTable.js"></script>
		<script type="text/javascript" src="public/js/chat.js"></script>
	</head>
	<body>

		<?php
		include ("top.php");
		navDraw();
		?>

		<div id="bodyPan">
			<div id="leftPan">
				<?php
				include ("sidebar.php");
				sidebarDraw();
				include ("login.php");
				?>
			</div>
			<div id="rightPan">
				<div id="rightbodyPan">
					<h2 id='h2Chat' align="center">Thảo luận</h2>
					<?php
					if (!isset($_SESSION['name'])) {
						echo "<script type='text/javascript'>var r= confirm('Hãy Đăng nhập để xem thông tin');
							if( r==true)	window.location = '".__SITE_PATH.'loginPage.php'."';
							else 			window.location = '".__SITE_PATH.'index.php'."';
							</script> ";
					} else {
						main();
					}
					?>
				</div>
			</div>
		</div>

		<?php
		include ("bottom.php");
		footerDraw();
		?>
	</body>
</html>


<?php
function main(){
    $username =  $_SESSION["name"];
    echo "<div style='margin-left: 100px'>";
?>

<div id="username" style="visibility: hidden"><?php echo $username?></div>

<?php
    drawDisplayFormDiv();
    drawSendMSForm();
    echo "</div>";
}

function drawDisplayFormDiv()
{
    ?>

    <div class="listmessage">

        <div class="a">
            <a href="#" id="getmore">Xem tin cũ hơn</a>
        </div>

    </div>
    <?php
}


function drawSendMSForm()
{
    ?>
    <div class="divmessage" >
    <textarea rows="5" cols="100" class="messagebox" name="message" id="messageEdit" autofocus="true" placeholder="Bạn đang nghĩ gì..."></textarea>
    <input type="submit" name="send" value="Send" id="sendMsg" class="button">
    </div>
    <br>
    <div id="errordisplay" style="visibility: hidden"></div>

<?php
}
?>