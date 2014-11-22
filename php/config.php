<?php
$mysql_db_hostname = "localhost";
$mysql_db_user = "shaddai_arm";
$mysql_db_password = "shaddai2014";
$mysql_db_database = "shaddai_arm";

$con = mysql_connect($mysql_db_hostname, $mysql_db_user, $mysql_db_password)
or die("Could notconnect database");
mysql_select_db($mysql_db_database, $con)or die("Could not select database");
?>