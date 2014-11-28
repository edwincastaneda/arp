<?php
require('../../php/config.php');

$query ="SELECT id, descripcion FROM cargos_servidores";

$result = mysql_query($query)or die(mysql_error());
$num_row = mysql_num_rows($result);
if( $num_row >=1 ) { ?>

<table class="table">
    <thead>
        <th class="text-center">#</th>
        <th class="text-center">Descripci&oacute;n</th>
        <th class="text-center">Acciones</th>
    </thead>
    <tbody id="rows_cargos">
<?php	while ($row = mysql_fetch_array($result)){	
 echo "<tr>"
    . "<td id='no_row'>{$row['id']}</td>"
    . "<td class='text-center'><input name='cargo' id='cargo' type='text' class='form-control input-sm' value='".utf8_decode($row['descripcion'])."' readonly/>"
            . "<input type='hidden' id='id_cargo' name='id_cargo' value='".$row['id']."' /></td>"
    . "<td class='text-center'>"
            . "<span id='eliminar_cargo' style='color:red;cursor:pointer;' class='glyphicon glyphicon-ban-circle'></span>&nbsp;&nbsp;"
            . "<span id='editar_cargo' style='color:#FFD400;cursor:pointer;' class='glyphicon glyphicon-pencil'></span>&nbsp;&nbsp;"
            . "<span id='agregar_cargo' style='color:greenyellow;cursor:pointer;' class='glyphicon glyphicon-plus'></span></td>"
    . "</tr>";
        }
?>
    </tbody>
</table>
<?php } ?>