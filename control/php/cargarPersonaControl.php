<?php 
require('../../php/config.php');
$id=$_POST['id'];

$query ="SELECT id, nombre1, nombre2, apellido1, apellido2, estadoc, nombreu, telefono, celular, correo, genero, fechan, telefono, celular, correo, direccion, pais, departamento,  municipio, puo, iglesia, iglesian, tiempoc FROM Boletas WHERE id=".$id; 


$result = mysql_query($query)or die(mysql_error());
$num_row = mysql_num_rows($result);
$row=mysql_fetch_array($result);

$fechan = explode("-", $row['fechan']);
$tiempoc = explode("-", $row['tiempoc']);

if( $num_row >=1 ) { 
?>

<div class="panel panel-default">
  <div class="panel-heading text-left">
	  Informaci&oacute;n de Personal
	  <i style="cursor:pointer;float:right;font-size:18px;" id="remover_detalles_control" class="fa fa-times"></i>
	  <i style="cursor:pointer;float:right;font-size:18px;margin-right:5px;" id="load_personas" rel="editar_persona_control" class="fa fa-pencil" name="<?php echo $row['id'];?>"></i>
  </div>
  <div class="panel-body text-left"> 
	<?php 
	if($row['genero']=="Hombre"){
	$nombre='<i style="font-size:19px;" class="fa fa-male"></i>';
	}
	if($row['genero']=="Mujer"){
	$nombre='<i style="font-size:19px;"  class="fa fa-female"></i>';
	}
	if($row['genero']=="--"){
	$nombre='<i style="font-size:19px;"  class="fa fa-user"></i>';
	}
	$nombre=$nombre." ".ucwords($row['nombre1'].' '.$row['nombre2'].' '.$row['apellido1'].' '.$row['apellido2']);
	if($row['nombreu']!=""){
	$nombre=$nombre.' <br/><b>ALIAS</b> '.ucwords($row['nombreu']);
	}
	echo '<div class="col-md-12" style="margin-bottom:10px;">'.$nombre.'</div>';
	?>

	<div class="col-md-6">
	<ul class="list-group">
	
			<?php 
				$porcentaje=0;
				if ($row['nombre1']==""){
				echo '<li class="list-group-item"><i style="color:red;" class="fa fa-times-circle"></i> Primer Nombre</li>';
				}else{
				$porcentaje++;
				echo '<li class="list-group-item"><i style="color:#00FF00;" class="fa fa-check-circle"></i> Primer Nombre</li>';
				}
				if ($row['nombre2']==""){ 
				echo '<li class="list-group-item"><i style="color:red;" class="fa fa-times-circle"></i> Segundo Nombre</li>';
				}else{
				$porcentaje++;
				echo '<li class="list-group-item"><i style="color:#00FF00;" class="fa fa-check-circle"></i> Segundo Nombre</li>';
				}
				if ($row['apellido1']==""){ 
				echo '<li class="list-group-item"><i style="color:red;" class="fa fa-times-circle"></i> Primer Apellido</li>';
				}else{
				$porcentaje++;
				echo '<li class="list-group-item"><i style="color:#00FF00;" class="fa fa-check-circle"></i> Primer Apellido</li>';
				}
				if ($row['apellido2']==""){ 
				echo '<li class="list-group-item"><i style="color:red;" class="fa fa-times-circle"></i> Segundo Apellido</li>';
				}else{
				$porcentaje++;
				echo '<li class="list-group-item"><i style="color:#00FF00;" class="fa fa-check-circle"></i> Segundo Apellido</li>';
				}
				if ($row['nombreu']==""){ 
				echo '<li class="list-group-item"><i style="color:red;" class="fa fa-times-circle"></i> Nombre Usual/Apodo</li>';
				}else{
				$porcentaje++;
				echo '<li class="list-group-item"><i style="color:#00FF00;" class="fa fa-check-circle"></i> Nombre Usual/Apodo</li>';
				}
				if ($row['genero']=="--"){ 
				echo '<li class="list-group-item"><i style="color:red;" class="fa fa-times-circle"></i> Genero</li>';
				}else{
				$porcentaje++;
				echo '<li class="list-group-item"><i style="color:#00FF00;" class="fa fa-check-circle"></i> Genero</li>';
				}
				if ($row['estadoc']=="--"){ 
				echo '<li class="list-group-item"><i style="color:red;" class="fa fa-times-circle"></i> Estado Civil</li>';
				}else{
				$porcentaje++;
				echo '<li class="list-group-item"><i style="color:#00FF00;" class="fa fa-check-circle"></i> Estado Civil</li>';
				}
				if ($row['fechan']=="0000-00-00"){ 
				echo '<li class="list-group-item"><i style="color:red;" class="fa fa-times-circle"></i> Fecha de Nacimiento</li>';
				}else{
					if ($fechan[0]=="0000"){
					echo '<li class="list-group-item"><i style="color:#F5E107;" class="fa fa-exclamation-circle"></i> Fecha de Nacimiento (Sin A&ntilde;o)</li>';
					}
					if ($fechan[1]=="00"){
					echo '<li class="list-group-item"><i style="color:#F5E107;" class="fa fa-exclamation-circle"></i> Fecha de Nacimiento (Sin Mes)</li>';
					}
					if ($fechan[2]=="00"){
					echo '<li class="list-group-item"><i style="color:#F5E107;" class="fa fa-exclamation-circle"></i> Fecha de Nacimiento (Sin D&iacute;a)</li>';
					}
					if ($fechan[0]!="0000" && $fechan[1]!="00" && $fechan[2]!="00"){
					echo '<li class="list-group-item"><i style="color:#00FF00;" class="fa fa-check-circle"></i> Fecha de Nacimiento</li>';
					$porcentaje++;
					}
				}
				
			?>
		</ul>
		</div>
	<div class="col-md-6">
	<ul class="list-group">
			<?php if ($row['direccion']==""){
				echo '<li class="list-group-item"><i style="color:red;" class="fa fa-times-circle"></i> Direcci&oacute;n</li>';
				}else{
				$porcentaje++;
				echo '<li class="list-group-item"><i style="color:#00FF00;" class="fa fa-check-circle"></i> Direcci&oacute;n</li>';
				}
				if ($row['telefono']==""){ 
				echo '<li class="list-group-item"><i style="color:red;" class="fa fa-times-circle"></i> Tel&eacute;fono Residencial</li>';
				}else{
				$porcentaje++;
				echo '<li class="list-group-item"><i style="color:#00FF00;" class="fa fa-check-circle"></i> Tel&eacute;fono Residencial</li>';
				}
				if ($row['celular']==""){ 
				echo '<li class="list-group-item"><i style="color:red;" class="fa fa-times-circle"></i> Tel&eacute;fono M&oacute;vil</li>';
				}else{
				$porcentaje++;
				echo '<li class="list-group-item"><i style="color:#00FF00;" class="fa fa-check-circle"></i> Tel&eacute;fono M&oacute;vil</li>';
				}
				if ($row['correo']==""){ 
				echo '<li class="list-group-item"><i style="color:red;" class="fa fa-times-circle"></i> Correo Electr&oacute;nico</li>';
				}else{
				$porcentaje++;
				echo '<li class="list-group-item"><i style="color:#00FF00;" class="fa fa-check-circle"></i> Correo Electr&oacute;nico</li>';
				}
				if ($row['pais']==""){ 
				echo '<li class="list-group-item"><i style="color:red;" class="fa fa-times-circle"></i> Pa&iacute;s</li>';
				}else{
				$porcentaje++;
				echo '<li class="list-group-item"><i style="color:#00FF00;" class="fa fa-check-circle"></i> Pa&iacute;s</li>';
				}
				if ($row['departamento']==""){ 
				echo '<li class="list-group-item"><i style="color:red;" class="fa fa-times-circle"></i> Departamento</li>';
				}else{
				$porcentaje++;
				echo '<li class="list-group-item"><i style="color:#00FF00;" class="fa fa-check-circle"></i> Departamento</li>';
				}
				if ($row['municipio']==""){ 
				echo '<li class="list-group-item"><i style="color:red;" class="fa fa-times-circle"></i> Municipio</li>';
				}else{
				$porcentaje++;
				echo '<li class="list-group-item"><i style="color:#00FF00;" class="fa fa-check-circle"></i> Municipio</li>';
				}
				if ($row['puo']=="--"){ 
				echo '<li class="list-group-item"><i style="color:red;" class="fa fa-times-circle"></i> Profesi&oacute;n u Oficio</li>';
				}else{
				$porcentaje++;
				echo '<li class="list-group-item"><i style="color:#00FF00;" class="fa fa-check-circle"></i> Profesi&oacute;n u Oficio</li>';
				}
			?>
		</ul>
	</div>
</div>
</div>
<div class="panel panel-default">
  <div class="panel-heading text-left">
	  Informaci&oacute;n Congregacional
</div>
  <div class="panel-body text-left"> 
  <div class="col-md-6">               
		<ul class="list-group">
			<?php if ($row['iglesia']=="No"){
				echo '<li class="list-group-item">Asiste a Iglesia El Shaddai? <span style="color:red;"><b>No</b></span></li>';
				echo '<li class="list-group-item">Iglesia a la que asiste: '.$row['iglesian'].'</li>';
				}else{
				echo '<li class="list-group-item">Asiste a Iglesia El Shaddai? <span style="color:#17CB17;"><b>Si</b></span></li>';
				}
				if ($tiempoc[0]==""){ 
				echo '<li class="list-group-item"><i style="color:#F5E107;" class="fa fa-exclamation-circle"></i> Tiempo de congregarse (Sin cantidad)</li>';
				}
				if ($tiempoc[1]==""){
				echo '<li class="list-group-item"><i style="color:#F5E107;" class="fa fa-exclamation-circle"></i> Tiempo de congregarse (Sin unidad de tiempo)</li>';
				}
				if ($tiempoc[0]!="" && $tiempoc[1]!=""){
				$porcentaje++;
				echo '<li class="list-group-item"><i style="color:#00FF00;" class="fa fa-check-circle"></i> Tiempo de congregarse</li>';
				}
				
			?>
		</ul>
	</div>

	<div class="col-md-6 text-center">
	<h4 style="margin:0px;">Integridad de la Boleta</h4>
	<?php 
	$por_aux=($porcentaje*100)/17;
	$por_aux=explode(".",$por_aux);
	$resultado=$por_aux[0];
	if($resultado<=20){?>
	<span style="color:red; font-size:65px;"><? echo $resultado."%";?></span>
	<?php }if($resultado>20 && $resultado<85){?>
	<span style="color:#F5E107; font-size:65px;"><? echo $resultado."%";?></span>
	<?php }if($resultado>=85){?>
	<span style="color:#17CB17; font-size:65px;"><? echo $resultado."%";?></span>
	<?php }?>
	
	</div>
</div>
</div>

<?php
// CURSOS
$query ="SELECT  C.nombre, A.modulo, A.ano, A.mes, A.fecha FROM Asignacion_Cursos as A, Cursos as C WHERE A.id_boleta=".$id." AND C.id=A.id_curso" ; 

$result = mysql_query($query)or die(mysql_error());
$num_row = mysql_num_rows($result);

if( $num_row >=1 ) {
?>

<div class="panel panel-default">
	<div class="panel-heading text-left">
	  Cursos Asignados
	</div>
	<div class="panel-body text-left"> 

<table class="table table-striped">
<tr>
<th>Curso</th>
<th class="text-center">M&oacute;dulo</th>
<th class="text-center">A&ntilde;o</th>
<th class="text-center">Mes</th>
<th class="text-center">Fecha de Asignaci&oacute;n</th>
</tr>
<?php 
while ($row = mysql_fetch_array($result)){	
if($row['mes']!="0"){
$mes=$row['mes'];
}else{
$mes="";
}
echo '<tr><td><i class="fa fa-book"></i> ' .$row['nombre'].'</td>
<td class="text-center">'.$row['modulo'].'</td>
<td class="text-center">'.$row['ano'].'
<td class="text-center">'.$mes.'</td>
<td class="text-center">'.$row['fecha']."</td></tr>";
}
?>
</table>
</div>
</div>
<?php } //FIN CURSOS?>


<?php
//TESTS
$query ="SELECT  url_dones_e, url_dones_m FROM Recursos WHERE id_boleta=".$id; 

$result = mysql_query($query)or die(mysql_error());
$num_row = mysql_num_rows($result);
$row = mysql_fetch_array($result);
if( $num_row >=1) {

$test_don_e=explode("?",$row['url_dones_e']);
$test_don_m=explode("?",$row['url_dones_m']);


parse_str($test_don_e[1], $r1);
parse_str($test_don_m[1], $r2);
?>
<?php if($row['url_dones_e']!=""){ ?>
<div class="col-md-6" style="padding-left:0;">
<div class="panel panel-default">
  <div class="panel-heading text-left">
	  Tests de Dones Espirituales
  </div>
  <div class="panel-body text-center">      
	<div id="centro_dones_espirituales">
		<div id="grafica_dones_espirituales_dibujo">
			<div id="bar" style="height:<?php echo $r1['r1']*10;?>px; background:#00FF00; margin-top:200px"></div>
			<div id="bar" style="height:<?php echo $r1['r2']*10;?>px; background:#FF0000; margin-top:160px"></div>
			<div id="bar" style="height:<?php echo $r1['r3']*10;?>px; background:#CC9900; margin-top:200px"></div>
			<div id="bar" style="height:<?php echo $r1['r4']*10;?>px; background:#FF3399; margin-top:200px"></div>
			<div id="bar" style="height:<?php echo $r1['r5']*10;?>px; background:#FFFF00; margin-top:200px"></div>
			<div id="bar" style="height:<?php echo $r1['r6']*10;?>px; background:#0000FF; margin-top:200px"></div>
			<div id="bar" style="height:<?php echo $r1['r7']*10;?>px; background:#99CCFF; margin-top:200px"></div>
			<div id="bar" style="height:<?php echo $r1['r8']*10;?>px; background:#669900; margin-top:200px"></div>
			<div id="bar" style="height:<?php echo $r1['r9']*10;?>px; background:#660000; margin-top:200px"></div>
			<div id="bar" style="height:<?php echo $r1['r10']*10;?>px; background:#990000; margin-top:200px"></div>
			<div id="bar" style="height:<?php echo $r1['r11']*10;?>px; background:#9999FF; margin-top:200px"></div>
			<div id="bar" style="height:<?php echo $r1['r12']*10;?>px; background:#FF3300; margin-top:200px"></div>
			<div id="bar" style="height:<?php echo $r1['r13']*10;?>px; background:#00CCCC; margin-top:200px"></div>
			<div id="bar" style="height:<?php echo $r1['r14']*10;?>px; background:#996666; margin-top:200px"></div>
			<div id="bar" style="height:<?php echo $r1['r15']*10;?>px; background:#3333FF; margin-top:200px"></div>
			<div id="bar" style="height:<?php echo $r1['r16']*10;?>px; background:#333300; margin-top:200px"></div>
		</div>
	</div>
  </div>
</div>
</div>
<?php } ?>
<?php if($row['url_dones_m']!=""){?> 
<div class="col-md-6" style="padding-right:0;">
<div class="panel panel-default">
  <div class="panel-heading text-left">
	  Tests de Dones Motivacionales
  </div>
  <div class="panel-body text-center">      
	<div id="centro_dones_motivacionales">
		<div id="grafica_dones_motivacionales_dibujo">
			<div id="bar_m" style="height:<?php echo $r2['r1']*10;?>px; background:#0000FF; margin-top:200px"></div>
			<div id="bar_m" style="height:<?php echo $r2['r2']*10;?>px; background:#00CCCC; margin-top:160px"></div>
			<div id="bar_m" style="height:<?php echo $r2['r3']*10;?>px; background:#CC9900; margin-top:200px"></div>
			<div id="bar_m" style="height:<?php echo $r2['r4']*10;?>px; background:#669900; margin-top:200px"></div>
			<div id="bar_m" style="height:<?php echo $r2['r5']*10;?>px; background:#3333FF; margin-top:200px"></div>
			<div id="bar_m" style="height:<?php echo $r2['r6']*10;?>px; background:#FF0000; margin-top:200px"></div>
			<div id="bar_m" style="height:<?php echo $r2['r7']*10;?>px; background:#996666; margin-top:200px"></div>
		</div>
	</div>
  </div>
</div>
</div>
<?php } ?>   
<?php } // FIN TESTS ?>
<?php } ?>
