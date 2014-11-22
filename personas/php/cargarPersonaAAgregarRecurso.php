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
	  Recursos de Persona
	  <i style="cursor:pointer;float:right;font-size:18px;" id="remover_persona_recursos" class="fa fa-times"></i>
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
	
<?php $query2 ="SELECT count(*) as contador, url_dones_e, url_dones_m FROM Recursos WHERE id_boleta=".$id; 

$result2 = mysql_query($query2)or die(mysql_error());
$num_row2 = mysql_num_rows($result2);
$row2=mysql_fetch_array($result2);


if( $row2['contador']>0 ) { 
$asignado=true;
?>

	<div class="col-md-6">
		<ul class="list-group text-left">
			<?php if ($row2['url_dones_e']==""){
				echo '<li class="list-group-item" ><i style="color:red;" class="fa fa-times-circle" id="test_dones_e_icon"></i> Test de Dones Espirituales</li>';
				$asignado=false;
				}else{
				$enabled_e="disabled";
				echo '<li class="list-group-item"><i style="color:#00FF00;" class="fa fa-check-circle" id="test_dones_e_icon"></i> Test de Dones Espirituales</li>';
				}
			?>
		</ul>
	</div>
	<div class="col-md-6">
		<ul class="list-group text-left">
			<?php			
				if ($row2['url_dones_m']==""){ 
				echo '<li class="list-group-item"><i style="color:red;" class="fa fa-times-circle" id="test_dones_m_icon"></i> Test de Dones Motivacionales</li>';
				$asignado=false;
				}else{
				$enabled_m="disabled";
				echo '<li class="list-group-item"><i style="color:#00FF00;" class="fa fa-check-circle" id="test_dones_m_icon"></i> Test de Dones Motivacionales</li>';
				}
			?>
		</ul>
	</div>


<?php }else{ ?>
<input name="existe_recursos" id="existe_recursos" type="hidden" value="no" />
	<div class="col-md-6">
		<ul class="list-group text-left">
			<li class="list-group-item" ><i style="color:red;" class="fa fa-times-circle" id="test_dones_e_icon"></i> Test de Dones Espirituales</li>
		</ul>
	</div>
	<div class="col-md-6">
		<ul class="list-group text-left">
			<li class="list-group-item" ><i style="color:red;" class="fa fa-times-circle" id="test_dones_m_icon"></i> Test de Dones Motivacionales</li>
		</ul>
	</div>
<? }?>


<?php if($asignado==false){ ?>
<div class="col-md-6">
	<ul class="list-group text-left">
		<div class="input-group input-group-sm">
			<div class="input-group-addon"><i class="fa fa-link"></i></div>
			<input type="text" class="form-control" id="test_dones_espirituales" name="test_dones_espirituales" autocomplete="off" placeholder="Test de dones espirituales" value=<?php echo '"'.$row2['url_dones_e'].'" class="'.substr($enabled_e, 0, -1).' required input_field" '.$enabled_e;?>>
			<span class="input-group-addon">URL</span>
		</div>
	</ul>
	<div id="status_message_dones_espirituales"></div>
	<div id="load_test_dones_espirituales" class="label label-danger"></div>
	<div class="modal fade" id="grafica_test_dones_espirituales" tabindex="-1" data-backdrop="static" data-keyboard="false" role="dialog" aria-labelledby="testde" aria-hidden="true">
	  <div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<h4 class="modal-title" id="testde">Test de Dones Espirituales</h4>
		  </div>
		  <div class="modal-body" id="grafica_test_es"></div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-danger btn-sm" id="cambiar_grafica_es" data-dismiss="modal">Cambiar</button>
			<button type="button" class="btn btn-success btn-sm" id="aprobar_grafica_es">Aprobar</button>
		  </div>
		</div>
	  </div>
	</div>
	</div>
<div class="col-md-6">
	<ul class="list-group text-left">
		<div class="input-group input-group-sm">
			<div class="input-group-addon"><i class="fa fa-link"></i></div>
			<input type="text" class="form-control" id="test_dones_motivacionales" name="test_dones_motivacionales" autocomplete="off" placeholder="Test de dones motivacionales" value=<?php echo '"'.$row2['url_dones_m'].'" class="'.substr($enabled_m, 0, -1).' required input_field" '.$enabled_m; ?>>
			<span class="input-group-addon">URL</span>
		</div>
	</ul>
	<div id="status_message_dones_motivacionales"></div>
	<div id="load_test_dones_motivacionales" class="label label-danger"></div>		

	<div class="modal fade" id="grafica_test_dones_motivacionales" tabindex="-1" data-backdrop="static" data-keyboard="false" role="dialog" aria-labelledby="testdm" aria-hidden="true">
	  <div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<h4 class="modal-title" id="testdm">Test de Dones Motivacionales</h4>
		  </div>
		  <div class="modal-body" id="grafica_test_mo"></div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-danger btn-sm" id="cambiar_grafica_mo" data-dismiss="modal">Cambiar</button>
			<button type="button" class="btn btn-success btn-sm" id="aprobar_grafica_mo">Aprobar</button>
		  </div>
		</div>
	  </div>
	</div>
	</div>
</div>

<?php } ?>
</div>	
</div>	
<?php }?>