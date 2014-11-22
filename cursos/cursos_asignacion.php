<div class="section submenu col-md-12" id="asignacion_curso"> 
<div class="page-header">
<h1 style="color:#fff;">Asignar Curso<a id="cerrar_asignar_cursos" class="home_boton  btn btn-danger" name="cursos" ><span class="glyphicon glyphicon-remove"></span></a></h1>
</div>
<div class="col-md-12 text-left">
		<div class="form-group">
			<div class="input-group input-group-sm">
			  <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
			  <input type="text" class="form-control" id="criterio_busqueda_personas_asignacion" name="criterio_busqueda_personas_asignacion" placeholder="Criterio de B&uacute;squeda de Persona" autocomplete="off">
			  <span class="input-group-addon"><i id="status_busqueda_personas_asignacion" class="fa fa-search"></i></span>
			</div>
			<div id="resultado_busqueda_personas_asignacion" style="position:absolute;z-index:10;"></div>
		</div>
		<h5 class="text-center"><span id="mensaje_busqueda_personas_asignacion" class="label"></span></h5>
		<div class="form-group" style="z-index:1;">
			<div class="input-group input-group-sm">
			  <div class="input-group-addon"><i class="fa fa-book"></i></div>
			  <input type="text" class="form-control" id="criterio_busqueda_cursos_asignacion" name="criterio_busqueda_cursos_asignacion" placeholder="Criterio de B&uacute;squeda de Curso" autocomplete="off">
			  <span class="input-group-addon"><i id="status_busqueda_cursos_asignacion" class="fa fa-search"></i></span>
			</div>
			<div id="resultado_busqueda_cursos_asignacion" style="position:absolute;z-index:10;"></div>
		</div>
		<h5 class="text-center"><span id="mensaje_busqueda_cursos_asignacion" class="label"></span></h5>
</div>
<div class="col-md-12">
	<div id="cargar_personas_asignacion"></div>
	<div id="cargar_cursos_asignacion"></div>
	<div id="boton_asignar_curso"></div>
</div>
</div>