<?php
$connect = mysql_connect('localhost', 'root', '');

if (!$connect) {
	die("Could not connect to Database!");
}

if (mysql_query("CREATE DATABASE my_db",$connect)) {
	echo "Database Created.";
}
else {
	echo "Error Creating database" . mysql_error();
}
mysql_close($connect);
?>