<div class="section submenu col-md-12" id="busqueda_persona"> 
<div class="page-header">
<h1 style="color:#fff;">Buscar Persona<a id="cerrar_busqueda" class="home_boton  btn btn-danger" name="personas" ><span class="glyphicon glyphicon-remove"></span></a></h1>
</div>

<div class="col-md-12 text-left">
	<div class="form-group">
		<div class="checkbox">
			<label style="color:#fff;">
				<input type="checkbox" name="todos_personas" id="todos_personas"> Mostrar Todo
			</label>
		</div>
	</div>
		<div class="form-group">
			<div class="input-group input-group-sm">
			  <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
			  <input type="text" class="form-control" id="criterio_busqueda" name="criterio_busqueda" placeholder="Criterio de B&uacute;squeda" autocomplete="off">
			  <span class="input-group-addon"><i id="status_busqueda" class="fa fa-search"></i></span>
			</div>
			<div id="resultado_busqueda" style="position:absolute;z-index:10;width:100%;"></div>
		</div>
</div>
	<div id="cargar_busqueda"></div>
	<h5><span id="mensaje_busqueda" class="label"></span></h5>
<div class="col-md-12">
	<span id="res_cargar_busqueda"></span>
</div>


</div>