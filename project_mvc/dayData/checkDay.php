<?php
/**
 * Created by PhpStorm.
 * User: TG
 * Date: 12/14/13
 * Time: 9:39 AM
 */
$server='localhost';
$username='root';
$password='';
$database="projectweb";
$table_name='dklv';
$connect=mysql_connect($server,$username,$password);
if(!$connect){
    die("Cannot connect to server");
}
else{
    $date=time();
    $day=date("d",$date);
    $month=date("m",$date);
    $year=date("Y",$date);
    $days=date("Y-m-d",$date);
    echo("@$days@");
    $nameFile=$days.".txt";
    echo ("$nameFile");
    $fp=fopen($nameFile,"r")or exit("Cannot found this file");
    mysql_select_db($database);
    $queryDelete="DELETE FROM dklv WHERE YEAR(LichLV) = '$year' and MONTH(LichLV)='$month' and DAY(LichLV)='$day'";
    //mysql_query($queryDelete,$connect);

    if (mysql_query($queryDelete, $connect)){
           print "Delete from $database was successful!</font>";
       }else {
            print "Delete from $database failed!</font>";
        }
    while(($buffer=fgets($fp,4090))!=false){
        $excute=explode(" ",$buffer);
        $MSNV=trim($excute[0]);
        $minutes=trim($excute[1]);
        //echo ("@$MSNV@$minutes@");
        mysql_select_db($database);
        $queryInsert="INSERT INTO dklv VALUES('$MSNV','$days','$minutes')";
        //mysql_query($queryInsert,$connect);

        if (mysql_query($queryInsert, $connect)){
            print "Insert into $database was successful!</font>";
        }else {
            print "Insert into $database failed!</font>";
        }
    }
    if (!feof($fp)) {
        echo "Error: unexpected fgets() fail\n";
    }
    fclose($fp);
    mysql_close($connect);
}