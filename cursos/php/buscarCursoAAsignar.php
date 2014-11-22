<?php
require('../../php/config.php');
$criterio=$_POST['criterio'];

$query ="SELECT id, nombre, modulos FROM Cursos WHERE 
id LIKE '".$criterio."' OR 
nombre LIKE '".$criterio."%' OR 
modulos LIKE '".$criterio."'";

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
			<th>Nombre</th>
			<th class="text-center">M&oacute;dulos</th>
			<th class="text-center">Secciones</th>
			<th class="text-center">Acciones</th>
		</thead>
		<tbody>
	<?php	while ($row = mysql_fetch_array($result)){	
			echo "<tr>
				<td>{$row['id']}</td>
				<td>{$row['nombre']}</td>
				<td class='text-center'>{$row['modulos']}</td>
				<td class='text-center'>{$row['secciones']}</td>
				<td class='text-center'><i style='cursor:pointer;font-size:18px;' class='fa fa-plus-square-o' id='load_cursos_asignacion' name='{$row['id']}'></i></td>
				</tr>";
		}
	?> 	</tbody>
	</table>
	</div>
	</div>
	<?php }
	else{
	echo 'no-resultados';
	}
}
?>