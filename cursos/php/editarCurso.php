<?php 
require('../../php/config.php');
$id=$_POST['id'];
$nombre=$_POST['nombre'];
$modulos=$_POST['modulos'];
$usuario=$_COOKIE["usuario"];
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

$query = "UPDATE Cursos SET 
nombre='".$nombre."',modulos='".$modulos."', modificacion=NOW(), usuario='".$usuario."' WHERE id='".$id."'";

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