<?php 
require('../../php/config.php');
$id_boleta=$_POST['id_boleta'];
$url_dones_esp=$_POST['url_dones_esp'];
$url_dones_mot=$_POST['url_dones_mot'];
$existe=$_POST['existe'];
function begin()
{
mysql_query("BEGIN");
}

function commit()
{
mysql_query("COMMIT");
}

function rollback()
{
mysql_query("ROLLBACK");
}



begin(); // transaction begins

if ($existe=="si"){
$query = "UPDATE Recursos SET url_dones_e='".$url_dones_esp."', url_dones_m='".$url_dones_mot."', modificacion=NOW() WHERE id_boleta='".$id_boleta."'";
}
if ($existe=="no"){
$query = "INSERT INTO Recursos VALUES ('".$id_boleta."','".$url_dones_esp."','".$url_dones_mot."', NOW())";
}

//echo $query;

$result = mysql_query($query);



if(!$result)
{
rollback(); // transaction rolls back
echo "false";
exit;
}
else
{
commit(); // transaction is committed
echo "true";
}



?>