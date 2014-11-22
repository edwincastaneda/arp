<?php //session_start(); ?>
<?php require('header.php'); ?>
<?php //if(isset($_SESSION)){
if (isset($_COOKIE["usuario"])) {?>
<div id="menu" class="col-md-12 text-center">
<div class="page-header">
<h1 style="color:#fff;">Menu Principal</h1>
</div>
	<div class="icono"><a name="personas" class="personas boton" rel="menu"><span>Personas</span></a></div>
	<div class="icono"><a name="cursos" class="cursos boton" rel="menu" ><span>Cursos</span></a></div>
	<div class="icono"><a name="control" class="control boton" rel="menu" ><span>Control</span></a></div>
	<div class="icono"><a name="grupos" class="grupos boton" rel="menu" ><span>Grupos</span></a></div>
	<div class="icono"><a name="servidores" class="servidores boton" rel="menu" ><span>Servidores</span></a></div>
</div>

<?php
}else{
?>
<div class="container" id="login_form" >
	<div class="col-md-3"></div>
	<div class="col-md-6 text-left">
		<form class="form-signin" role="form" method="post">
			<h2 class="form-signin-heading text-center" style="color:#fff;"><span style="color:#00FF00;" class="glyphicon glyphicon-off"></span> Iniciar Sesi&oacute;n</h2>
			<input type="text" class="form-control" name="user_name" id="user_name" placeholder="Usuario" autofocus="">
			<input type="password" class="form-control" name="password" id="password" placeholder="Contrase&ntilde;a">
			<button id="login" class="btn btn-lg btn-success btn-block" type="submit">Iniciar Sesi&oacute;n</button>
		 </form>
		 <h5 class="text-center"><span class="label" id="alerta"></span></h5>
	 </div>
	 <div class="col-md-3"></div>
</div><!-- container -->

<?php }?>

<?php require('menu.php'); ?>
<?php require('footer.php'); ?>