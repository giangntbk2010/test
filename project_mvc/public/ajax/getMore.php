<link href="style.css" rel="stylesheet" type="text/css"/>

<?php

$timelimit;
if(isset($_REQUEST['timelimit']) && !empty($_REQUEST['timelimit']))
{
    $timelimit = $_REQUEST['timelimit'];
}

else {
    $timelimit = 0;
}
echo "<div>";
$connect = mysql_connect("localhost","root","");
mysql_query("SET character_set_results=utf8", $connect);
mysql_select_db("tiep",$connect );

$sql = "SELECT * FROM ( SELECT * FROM `message` WHERE TimeSend < $timelimit ORDER BY TimeSend DESC LIMIT 5) AS t ORDER BY TimeSend ASC ";

mysql_query("SET character_set_client=utf8", $connect);
mysql_query("SET character_set_connection=utf8", $connect);
$result = mysql_query($sql,$connect);
if(mysql_num_rows($result) >0 )
while($set=mysql_fetch_array($result)){
    echo "<div class='messageelement'> ";
    echo "<b style='margin-right: 5px; padding-left: 10px'> ".$set['Sender']."</b>";
    echo "<pre>".$set['Content']."</pre>";
    echo "<div class='timesend' style='height: 0px'>".$set['TimeSend']."</div>";
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    echo "<div class = 'divTime'>".date('Y-m-d H:i:s',$set['TimeSend'])."</div>";
    echo "</div>";
}

echo "</div>";

?>
