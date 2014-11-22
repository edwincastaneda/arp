<?php 
require('../../php/config.php');
$id=$_POST['id'];
$nombre1=$_POST['nombre1'];
$nombre2=$_POST['nombre2'];
$apellido1=$_POST['apellido1'];
$apellido2=$_POST['apellido2'];
$apellidoc=$_POST['apellidoc'];
$nombreu=$_POST['nombreu'];
$genero=$_POST['genero'];
$estadoc=$_POST['estadoc'];
$fechan=$_POST['fechan'];
$direccion=$_POST['direccion'];
$pais=$_POST['pais'];
$departamento=$_POST['departamento'];
$municipio=$_POST['municipio'];
$puo=$_POST['puo'];
$trabajo=$_POST['trabajo'];
$universidad=$_POST['universidad'];
$colegio=$_POST['colegio'];
$telefono=$_POST['telefono'];
$celular=$_POST['celular'];
$correo=$_POST['correo'];
$hora=$_POST['hora'];
$iglesia=$_POST['iglesia'];
$iglesian=$_POST['iglesian'];
$tiempoc=$_POST['tiempoc'];
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

$query = "UPDATE Boletas SET 
nombre1='".$nombre1."',nombre2='".$nombre2."',apellido1='".$apellido1."',apellido2='".$apellido2."',apellidoc='".$apellidoc."',nombreu='".$nombreu."',genero='".$genero."',estadoc='".$estadoc."',fechan='".$fechan."',direccion='".$direccion."',pais='".$pais."',departamento='".$departamento."',municipio='".$municipio."',puo='".$puo."',trabajo='".$trabajo."',universidad='".$universidad."',colegio='".$colegio."',telefono='".$telefono."',celular='".$celular."',correo='".$correo."',hora='".$hora."',iglesia='".$iglesia."',iglesian='".$iglesian."',tiempoc='".$tiempoc."',usuario='".$usuario."', modificacion=NOW() WHERE id='".$id."'";

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