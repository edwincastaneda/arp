<?php
$mysql_db_hostname = "localhost";
$mysql_db_user = "developer";
$mysql_db_password = "developer";
$mysql_db_database = "shaddai_arp";

$con = mysql_connect($mysql_db_hostname, $mysql_db_user, $mysql_db_password)
or die("Could notconnect database");
mysql_select_db($mysql_db_database, $con)or die("Could not select database");
?>