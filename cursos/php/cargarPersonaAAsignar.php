<?php 
require('../../php/config.php');
$id=$_POST['id'];

$query ="SELECT id, nombre1, nombre2, apellido1, apellido2, apellidoc, nombreu, telefono, celular, correo FROM Boletas WHERE id=".$id; 

$result = mysql_query($query)or die(mysql_error());
$num_row = mysql_num_rows($result);
$row=mysql_fetch_array($result);


if( $num_row >=1 ) { 
?>
<div class="panel panel-default asignacion_detalle">
  <div class="panel-heading text-left">
	  Informaci&oacute;n de Persona
	  <i style="cursor:pointer;float:right;font-size:18px;" id="remover_persona_asignacion" class="fa fa-times"></i>
  </div>
  <div class="panel-body">
	<input name="id_boleta_asignacion" id="id_boleta_asignacion" type="hidden" value="<?php echo $row['id']; ?>" />
	<div class="col-md-6">
		<ul class="list-group text-left">
			<li class="list-group-item"><b>Identificador: </b> <?php echo $row['id'];?></li>
			<li class="list-group-item"><b>Nombres: </b><?php echo $row['nombre1']." ".$row['nombre2']; ?></li>
			<li class="list-group-item"><b>Tel&eacute;fonos: </b><?php echo $row['telefono']." ".$row['telefono'];?></li>
		</ul>
	</div>
	<div class="col-md-6">
		<ul class="list-group text-left">
			<li class="list-group-item"><b>Nombre Usual: </b><?php echo $row['nombreu'];?></li>
			<li class="list-group-item"><b>Apellidos: </b><?php echo $row['apellido1']." ".$row['apellido2'];?></li>
			<li class="list-group-item"><b>Correo Electr&oacute;nico: </b><?php echo $row['correo'];?></li>
		</ul>
	</div>
  </div>
</div>


<?php }?>