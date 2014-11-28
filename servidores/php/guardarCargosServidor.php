<?php
require('../../php/config.php');


$id_cargo = explode(",", $_POST['id_cargo']);
$cargo = explode(",", $_POST['cargo']);

$query ="SELECT id, descripcion FROM cargos_servidores";
$result = mysql_query($query)or die("ERROR! Listar Cargos: ".mysql_error());
$num_row = mysql_num_rows($result);   
$cont=0;
$arr_cont = count($cargo);

if($num_row>0){
    while($rs=mysql_fetch_array($result)){
        if($cont<$arr_cont){
        $update ="UPDATE cargos_servidores SET descripcion='".utf8_encode($cargo[$cont])."' "
                    . "WHERE id=".$rs['id'];
        mysql_query($update)or die("ERROR! Actualizar Cargo: ".mysql_error());
        }
        if($cont>=$arr_cont){
            $delete="DELETE FROM cargos_servidores WHERE id=".$rs['id'];
            mysql_query($delete)or die("ERROR! Eliminar Cargo: ".mysql_error());
        }
    $cont++;    
    }  
}

for (; ; ) {
    if ($cont >= $arr_cont) {
        break; 
    }
    $insert="INSERT INTO cargos_servidores (descripcion) VALUES('".utf8_encode($cargo[$cont])."');";
    mysql_query($insert)or die("ERROR! Agregar Cargo: ".mysql_error());
    $cont++;
}



$query ="SELECT id, descripcion FROM cargos_servidores";

$result = mysql_query($query)or die("ERROR! Listar Cargos: ".mysql_error());
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
            . "<input type='hidden' id='id_cargo' name='id_cargo' value='{$row['id']}' /></td>"
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