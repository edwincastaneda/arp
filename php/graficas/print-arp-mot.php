<?php 
 $profecia = isset($_GET['r1']) ? $_GET['r1'] : '';
 $servicio = isset($_GET['r2']) ? $_GET['r2'] : '';
 $ensenanza = isset($_GET['r3']) ? $_GET['r3'] : '';
 $exhortacion = isset($_GET['r4']) ? $_GET['r4'] : '';
 $dar = isset($_GET['r5']) ? $_GET['r5'] : '';
 $administracion = isset($_GET['r6']) ? $_GET['r6'] : '';
 $misericordia = isset($_GET['r7']) ? $_GET['r7'] : '';
 
 //$url="http://iglesiaelshaddai.org/encuesta/dones/print.php";
if($profecia!="" && $servicio!="" && $ensenanza!="" && $exhortacion!="" && $dar!="" && $administracion!="" && $misericordia!="" ){
?>
<div id="centro_dones_motivacionales">
<div id="grafica_dones_motivacionales_dibujo">
<div id="bar_m" style="height:<?php echo $profecia*10;?>px; background:#0000FF; margin-top:<?php echo ($profecia*10*-1)+250;?>px"></div>
<div id="bar_m" style="height:<?php echo $servicio*10;?>px; background:#00CCCC; margin-top:<?php echo ($servicio*10*-1)+250;?>px"></div>
<div id="bar_m" style="height:<?php echo $ensenanza*10;?>px; background:#CC9900; margin-top:<?php echo ($ensenanza*10*-1)+250;?>px"></div>
<div id="bar_m" style="height:<?php echo $exhortacion*10;?>px; background:#669900; margin-top:<?php echo ($exhortacion*10*-1)+250;?>px"></div>
<div id="bar_m" style="height:<?php echo $dar*10;?>px; background:#3333FF; margin-top:<?php echo ($dar*10*-1)+250;?>px"></div>
<div id="bar_m" style="height:<?php echo $administracion*10;?>px; background:#FF0000; margin-top:<?php echo ($administracion*10*-1)+250;?>px"></div>
<div id="bar_m" style="height:<?php echo $misericordia*10;?>px; background:#996666; margin-top:<?php echo ($misericordia*10*-1)+250;?>px"></div>
</div>
</div>
<?php }else { 
echo "no-valida";
}
?>