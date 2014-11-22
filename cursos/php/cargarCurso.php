<?php 
require('../../php/config.php');
$id=$_POST['id'];

$query ="SELECT * FROM Cursos WHERE id=".$id; 

$result = mysql_query($query)or die(mysql_error());
$num_row = mysql_num_rows($result);
$row=mysql_fetch_array($result);
if( $num_row >=1 ) { 
?>	
<div class="panel panel-default">
  <div class="panel-heading text-left">
	  Informaci&oacute;n del Curso
	  <i style="cursor:pointer;float:right;font-size:18px;" id="quitar_detalles_curso" class="fa fa-times"></i>
	  <span id="modificar_curso" style="cursor:pointer;float:right;font-size:18px;margin-right:5px;" class="glyphicon glyphicon-floppy-disk"></span>
	  <span style="display:none;" id="status_curso_modificado" class="label"></span>
  </div>
  <input name="id_curso_e" id="id_curso_e" type="hidden" value="<?php echo $row['id']; ?>" />
  <div class="panel-body" style="color:#fff;">
		<div class="col-md-6">
			<div class="form-group">
				<div class="input-group input-group-sm">
				  <div class="input-group-addon"><i class="fa fa-book"></i></div>
				  <input value="<?php echo $row['nombre'];?>" type="text" class="form-control" id="nombre_curso_e" name="nombre_curso_e" placeholder="Nombre del Curso">
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group">
				<div class="input-group input-group-sm">
				  <div class="input-group-addon"><i class="fa fa-sort-numeric-asc"></i></div>
				  <input value="<?php echo $row['modulos'];?>" type="text" class="form-control" id="modulos_curso_e" name="modulos_curso_e" placeholder="M&oacute;dulos">
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group">
				<div class="input-group input-group-sm">
				  <div class="input-group-addon"><i class="fa fa-sort-alpha-asc"></i></div>
				  <input value="<?php echo $row['secciones'];?>" type="text" class="form-control" id="secciones_curso_e" name="secciones_curso_e" placeholder="Secciones">
				</div>
			</div>
		</div>
	</div>
</div>

<?php }?>