<?php 
 $liderazgo=$_GET['r1'];
 $administracion=$_GET['r2'];
 $ensenanza=$_GET['r3'];
 $conocimiento=$_GET['r4'];
 $sabiduria=$_GET['r5'];
 $profecia=$_GET['r6'];
 $discernimiento=$_GET['r7'];
 $exhortacion=$_GET['r8'];
 $pastoreo=$_GET['r9'];
 $fe=$_GET['r10'];
 $evangelismo=$_GET['r11'];
 $apostolado=$_GET['r12'];
 $servicioayuda=$_GET['r13'];
 $misericordia=$_GET['r14'];
 $dar=$_GET['r15'];
 $hospitalidad=$_GET['r16'];
 //$url="http://iglesiaelshaddai.org/encuesta/print.php";
if($liderazgo!="" && $administracion!="" && $ensenanza!="" && $conocimiento!="" && $sabiduria!="" && $profecia!="" && $discernimiento!="" && $exhortacion!="" && $pastoreo!="" && $fe!="" && $evangelismo!="" && $apostolado!="" && $servicioayuda!="" && $misericordia!="" && $dar!="" && $hospitalidad!=""){
?>
<div id="centro_dones_espirituales">
<div id="grafica_dones_espirituales_dibujo" >
<div id="bar" style="height:<?php echo $liderazgo*10;?>px; background:#00FF00; margin-top:<?php echo ($liderazgo*10*-1)+250;?>px"></div>
<div id="bar" style="height:<?php echo $administracion*10;?>px; background:#FF0000; margin-top:<?php echo ($administracion*10*-1)+250;?>px"></div>
<div id="bar" style="height:<?php echo $ensenanza*10;?>px; background:#CC9900; margin-top:<?php echo ($ensenanza*10*-1)+250;?>px"></div>
<div id="bar" style="height:<?php echo $conocimiento*10;?>px; background:#FF3399; margin-top:<?php echo ($conocimiento*10*-1)+250;?>px"></div>
<div id="bar" style="height:<?php echo $sabiduria*10;?>px; background:#FFFF00; margin-top:<?php echo ($sabiduria*10*-1)+250;?>px"></div>
<div id="bar" style="height:<?php echo $profecia*10;?>px; background:#0000FF; margin-top:<?php echo ($profecia*10*-1)+250;?>px"></div>
<div id="bar" style="height:<?php echo $discernimiento*10;?>px; background:#99CCFF; margin-top:<?php echo ($discernimiento*10*-1)+250;?>px"></div>
<div id="bar" style="height:<?php echo $exhortacion*10;?>px; background:#669900; margin-top:<?php echo ($exhortacion*10*-1)+250;?>px"></div>
<div id="bar" style="height:<?php echo $pastoreo*10;?>px; background:#660000; margin-top:<?php echo ($pastoreo*10*-1)+250;?>px"></div>
<div id="bar" style="height:<?php echo $fe*10;?>px; background:#990000; margin-top:<?php echo ($fe*10*-1)+250;?>px"></div>
<div id="bar" style="height:<?php echo $evangelismo*10;?>px; background:#9999FF; margin-top:<?php echo ($evangelismo*10*-1)+250;?>px"></div>
<div id="bar" style="height:<?php echo $apostolado*10;?>px; background:#FF3300; margin-top:<?php echo ($apostolado*10*-1)+250;?>px"></div>
<div id="bar" style="height:<?php echo $servicioayuda*10;?>px; background:#00CCCC; margin-top:<?php echo ($servicioayuda*10*-1)+250;?>px"></div>
<div id="bar" style="height:<?php echo $misericordia*10;?>px; background:#996666; margin-top:<?php echo ($misericordia*10*-1)+250;?>px"></div>
<div id="bar" style="height:<?php echo $dar*10;?>px; background:#3333FF; margin-top:<?php echo ($dar*10*-1)+250;?>px"></div>
<div id="bar" style="height:<?php echo $hospitalidad*10;?>px; background:#333300; margin-top:<?php echo ($hospitalidad*10*-1)+250;?>px"></div>
</div>
</div>
<?php }else { 
echo "no-valida";
}
?>