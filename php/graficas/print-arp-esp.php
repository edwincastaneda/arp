<?php 
$liderazgo = isset($_GET['r1']) ? $_GET['r1'] : '';
$administracion = isset($_GET['r2']) ? $_GET['r2'] : '';
$ensenanza = isset($_GET['r3']) ? $_GET['r3'] : '';
$conocimiento = isset($_GET['r4']) ? $_GET['r4'] : '';
$sabiduria = isset($_GET['r5']) ? $_GET['r5'] : '';
$profecia = isset($_GET['r6']) ? $_GET['r6'] : '';
$discernimiento = isset($_GET['r7']) ? $_GET['r7'] : '';
$exhortacion = isset($_GET['r8']) ? $_GET['r8'] : '';
$pastoreo = isset($_GET['r9']) ? $_GET['r9'] : '';
$fe = isset($_GET['r10']) ? $_GET['r10'] : '';
$evangelismo = isset($_GET['r11']) ? $_GET['r11'] : '';
$apostolado = isset($_GET['r12']) ? $_GET['r12'] : '';
$servicioayuda = isset($_GET['r13']) ? $_GET['r13'] : '';
$misericordia = isset($_GET['r14']) ? $_GET['r14'] : '';
$dar = isset($_GET['r15']) ? $_GET['r15'] : '';
$hospitalidad = isset($_GET['r16']) ? $_GET['r16'] : '';

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