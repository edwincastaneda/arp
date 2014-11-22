<?php
require('../../php/config.php');
$criterio=$_POST['criterio'];

$query ="SELECT id, nombre1, nombre2, apellido1, apellido2, apellidoc, nombreu, telefono, celular, correo FROM Boletas WHERE 
id LIKE '".$criterio."' OR 
nombre1 LIKE '".$criterio."%' OR 
nombre2 LIKE '".$criterio."%' OR 
apellido1 LIKE '".$criterio."%' OR 
apellido2 LIKE '".$criterio."%' OR 
apellidoc LIKE '".$criterio."%' OR 
nombreu LIKE '".$criterio."%' OR 
telefono LIKE '".$criterio."' OR 
celular LIKE '".$criterio."' OR 
correo LIKE '".$criterio."%'";

//echo $query;
if ($criterio==""){
	echo 'no-criterio';
}else{
	$result = mysql_query($query)or die(mysql_error());
	$num_row = mysql_num_rows($result);
	//$row=mysql_fetch_array($result);
	if( $num_row >=1 ) { ?>
	<div class="panel panel-default" style="max-height:400px;overflow:auto;">
		<div class="panel-body text-left">
		<table class="table table-hover">
		<thead>
			<th>#</th>
			<th>Nombres y Apellidos</th>
			<th class="text-center">Apellido Casada</th>
			<th class="text-center">Nombre Usual</th>
			<th class="text-center">Tel&eacute;fonos</th>
			<th class="text-center">Correo Electr&oacute;nico</th>
			<th class="text-center">Acciones</th>
		</thead>
		<tbody>
	<?php	while ($row = mysql_fetch_array($result)){
			
			echo "<tr>
				<td>{$row['id']}</td>
				<td>{$row['nombre1']} {$row['nombre2']} {$row['apellido1']} {$row['apellido2']}</td>
				<td class='text-center'>{$row['apellidoc']}</td>
				<td class='text-center'>{$row['nombreu']}</td>
				<td class='text-center'>{$row['telefono']} {$row['celular']}</td>
				<td class='text-center'>{$row['correo']}</td>
				<td class='text-center'><i style='cursor:pointer;font-size:18px;' class='fa fa-plus-square-o' id='load_personas_recursos' name='{$row['id']}'></i></td>
			</tr>";
		}
	?> </tbody>
	</table>	
	</div>
	</div>
	<?php }
	else{
	echo 'no-resultados';
	}
}
?>