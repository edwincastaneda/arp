<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>A.R.P. :: Iglesia El Shaddai</title>

<link href="css/style.css" type="text/css" rel="stylesheet" />
<link href="css/signin.css" type="text/css" rel="stylesheet" />
<link href="css/sticky-footer.css" type="text/css" rel="stylesheet" />

<link rel="shortcut icon" href="images/icon.ico" />

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<link href="css/clockface.css" type="text/css" rel="stylesheet" />
<link href="css/bootstrap-switch.css" type="text/css" rel="stylesheet">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="js/navegacion.js"></script>
<script type="text/javascript" src="js/jquery.numeric.js"></script>
<script type="text/javascript" src="js/login.js"></script>
<script type="text/javascript" src="js/jquery.cookie.js"></script>
<script type="text/javascript" src="js/funciones.js"></script>
<script type="text/javascript" src="js/clockface.js"></script>
<script type="text/javascript" src="js/bootstrap-switch.js"></script>
<script type="text/javascript" src="js/modal.js"></script>
<script type="text/javascript" src="js/transition.js"></script>

<script type="text/javascript" src="personas/js/personas.js"></script>
<script type="text/javascript" src="personas/js/recursos.js"></script>
<script type="text/javascript" src="cursos/js/cursos.js"></script>
<script type="text/javascript" src="cursos/js/asignaciones.js"></script>
<script type="text/javascript" src="control/js/control.js"></script>

</head>
<body>
<nav class="navbar navbar-inverse" role="navigation">
    <div class="container">
        <div class="navbar-header">
			<a style="color:#fff;" class="navbar-brand" href="http://elshaddai.net/arp/">ARP - Iglesia El Shaddai</a>
		</div>
		<div class="navbar-right navbar-header">
		<?php
		if (isset($_COOKIE["usuario"])) {?>
			<p style="color:#fff;" class="navbar-text col-md-12 text-right">Hola!  <b><?php echo $_COOKIE["usuario"];?></b>   &#124;   <a class='btn btn-success btn-sm' id='logout'><span class="glyphicon glyphicon-off"></span></a></p>
		<?php }else{?>
			<p style="color:#fff;" class="navbar-text col-md-12 text-right" id="saludo">Hola!  &#124;   No ha iniciado Sesi&oacute;n</a></p>
		<?php }?>
		</div>
	</div>
</nav>
<div class="container wrap">
	<div class="col-md-12 text-center" id="site_title"><img src="images/logo.png"/></div>	