<?php 
require('../../php/config.php');
$id_boleta=$_POST['id_boleta'];
$id_curso=$_POST['id_curso'];
$ano=$_POST['ano'];
$mes=$_POST['mes'];
$modulo=$_POST['modulo'];

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


$query = "INSERT INTO Asignacion_Cursos VALUES ('','".$id_boleta."','".$id_curso."','".$modulo."','".$ano."','".$mes."', NOW())";


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