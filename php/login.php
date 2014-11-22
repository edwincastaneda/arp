<?php 
require('config.php');
$username = $_POST['user'];
//$password = $_POST['pwd'];
$password = md5($_POST['pwd']);
$con = mysql_connect($mysql_db_hostname, $mysql_db_user, $mysql_db_password)
or die("Could notconnect database");
mysql_select_db($mysql_db_database, $con)or die("Could not select database");

$query = "SELECT * FROM Usuarios WHERE usuario='".$username."' AND password='".$password."'";

$result = mysql_query($query)or die(mysql_error());
$num_row = mysql_num_rows($result);
$row=mysql_fetch_array($result);

if( $num_row >=1 ) { 
echo 'true';
$_SESSION['user_name']=$row['usuario'];
}
else{
echo 'false';
}
?>