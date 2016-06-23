<?php

    echo "<div>";
    $connect = mysql_connect("localhost","root","");
    mysql_query("SET character_set_results=utf8", $connect);
    mysql_select_db("tiep",$connect );
    $sql = "SELECT count(*) FROM message where 1";
    $result1 = mysql_query($sql);
    $rows = mysql_fetch_array($result1)[0];
    $begin = $rows-6;
if($begin < 0)
    $begin = 0;

    $sql = "SELECT * FROM `message` WHERE 1 ORDER BY 'TimeSend' ASC LIMIT $begin,$rows";
    mysql_query("SET character_set_client=utf8", $connect);
    mysql_query("SET character_set_connection=utf8", $connect);
    $result = mysql_query($sql);

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
