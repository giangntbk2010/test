<?php

$connect = null;
$sender = "";
$message = "";
$time = 0;

main();

function main() {
	connectDB();
	closeConnect();

}

function connectDB() {
	global $connect;
	$connect = mysql_connect("localhost", "root", "");
	mysql_query("SET character_set_results=utf8", $connect);
	if ($connect) {
		mysql_select_db("tiep");

		if (isset($_REQUEST['sender']) && isset($_REQUEST['message'])) {
			sendSMS();
		}
	} else {
		echo "Connect Error";
		die("Connect error");
	}
}

function closeConnect() {
	global $connect;
	mysql_close($connect);
}

function sendSMS() {
	global $time;
	global $sender;
	global $message;
	global $connect;

	$sender = $_REQUEST['sender'];
	$message = $_REQUEST['message'];
	$time = $_REQUEST['time'];

	echo "$sender $message $time";

	//    print_r($_REQUEST);
	mysql_query("SET character_set_client=utf8", $connect);
	mysql_query("SET character_set_connection=utf8", $connect);

	$sql = "INSERT INTO `message` (`Id`, `Sender`, `Content`, `TimeSend`) VALUES (NULL, '$sender', '$message', '$time')";

	mysql_query($sql, $connect);

}
