<?php 
require('../../php/config.php');
$nombre_curso=$_POST['nombre_curso'];
$modulos_curso=$_POST['modulos_curso'];
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


$query = "INSERT INTO Cursos VALUES ('','".$nombre_curso."','".$modulos_curso."','','".$usuario."', NOW())";


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