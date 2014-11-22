<?php 
require('../../php/config.php');
$id=$_POST['id'];

$query ="SELECT * FROM Cursos WHERE id=".$id; 

$result = mysql_query($query)or die(mysql_error());
$num_row = mysql_num_rows($result);
$row=mysql_fetch_array($result);


if( $num_row >=1 ) { 
?>
<div class="panel panel-default asignacion_detalle">
  <div class="panel-heading text-left">
	  Informaci&oacute;n de Curso
	  <i style="cursor:pointer;float:right;font-size:18px;" id="remover_curso_asignacion" class="fa fa-times"></i>
  </div>
  <div class="panel-body">
	<input name="id_curso_asignacion" id="id_curso_asignacion" type="hidden" value="<?php echo $row['id']; ?>" />
	<div class="col-md-6">
		<ul class="list-group text-left">
			<li class="list-group-item"><b>Nombre: </b> <?php echo $row['nombre'];?></li>
		</ul>
	</div>
	<div class="col-md-6">
		<ul class="list-group text-center">
			<li class="list-group-item">
			<form class="form-inline" role="form">
			<select id="modulo" name="modulo" class="form-control input-sm" placeholder="M&oacute;dulo">
			<?php 
			for ($i = 1; $i <= $row['modulos']; $i++) {
			echo "<option value="."'".$i."'>".$i."</option>";
			}
			?>	
			</select>
			<select id="ano_asignacion" name="ano_asignacion" class="form-control input-sm" >
				<option value="2013">2013</option>
				<option value="2014">2014</option>	 
			</select>
			<select id="mes_asignacion" name="mes_asignacion" class="form-control input-sm">
				<option value="00">(Mes)</option>
				<option value="1">Enero</option>
				<option value="2">Febrero</option>
				<option value="3">Marzo</option>
				<option value="4">Abril</option>
				<option value="5">Mayo</option>
				<option value="6">Junio</option>
				<option value="7">Julio</option>
				<option value="8">Agosto</option>
				<option value="9">Septiembre</option>
				<option value="10">Octubre</option>
				<option value="11">Noviembre</option>
				<option value="12">Diciembre</option>	 
			</select>
			<select id="seccion_asignacion" name="seccion_asignacion" class="form-control input-sm" >
				<option value="A">A</option>
				<option value="B">B</option>	 
			</select>
			</form>
			</li>
		</ul>
	</div>
  </div>
</div>


<?php }?>