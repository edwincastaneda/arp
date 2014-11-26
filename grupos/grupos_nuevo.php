<div class="section submenu col-md-12" id="nuevo_grupo">
<h1 style="color:#fff;">Nuevo Grupo<a id="cerrar_nuevo_grupo" class="home_boton  btn btn-danger" name="grupos" ><span class="glyphicon glyphicon-remove"></span></a></h1>
<div class="panel panel-default">
  <div class="panel-heading text-left">
	  Informaci&oacute;n del Grupo
	  <span id="guardar_grupo" style="cursor:pointer;float:right;font-size:18px;" class="glyphicon glyphicon-floppy-disk"></span>
	  <span style="display:none;" id="status_grupo" class="label"></span>
  </div>
  <div class="panel-body" style="color:#fff;">
		<div class="col-md-9">
                    <div class="frm-group">
                        <div class="input-group input-group-sm">
                          <div class="input-group-addon"><i class="fa fa-users"></i></div>
                          <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripci&oacute;n del Grupo">
                        </div>
                    </div>
		</div>
		<div class="col-md-3">
                    <div class="form-group">
                        <div class="frm-group">    
                            <div class="input-group input-group-sm">
                              <div class="input-group-addon"><i class="fa fa-cogs"></i></div>
                              <select class="form-control" id="tipo_grupo" name="tipo_grupo" placeholder="Tipo"></select>
                              <span class="input-group-addon">Tipo</span>
                            </div>
                        </div>
                    </div>
		</div>
		<div class="col-md-9">
                    <div class="form-group">
                        <div class="input-group input-group-sm">
                          <div class="input-group-addon"><i class="fa fa-home"></i></div>
                          <input type="text" class="form-control" id="nombre_curso" name="direccion" placeholder="Direcci&oacute;n">
                        </div>
                    </div>
		</div>
                <div class="col-md-3">
                    <div class="form-group">
                        <div class="input-group input-group-sm">
                          <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                          <input type="text" class="form-control" id="nombre_curso" name="telefono" placeholder="Tel&eacute;fono">
                        </div>
                    </div>
		</div>
               
      		<div class="col-md-3">
                    <div class="form-group">  
                        <div class="input-group input-group-sm">
                          <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                          <select class="form-control" id="tipo_grupo" name="dia" placeholder="D&iacute;a">
                              <option value="Lunes">Lunes</option>
                              <option value="Martes">Martes</option>
                              <option value="Miercoles">Miercoles</option>
                              <option value="Jueves">Jueves</option>
                              <option value="Viernes">Viernes</option>
                              <option value="Sabado">Sabado</option>
                              <option value="Domingo">Domingo</option>
                          </select>
                          <span class="input-group-addon">D&iacute;a</span>
                        </div>
                    </div>
		</div>
                <div class="col-md-3">
                    <h4><span class="label label-primary" style="font-weight: normal;">Horario de actividad:</span></h4>
		</div>
                <div class="col-md-3">
                    <div class="form-group">
                            <div class="input-group input-group-sm">
                              <div class="input-group-addon"><span class="glyphicon glyphicon-time"></span></div>
                              <input type="text" class="form-control horas" value="2:30 PM" data-format="hh:mm A" id="hora_inicio" name="hora_inicio" placeholder="Hora" readonly="">
                              <span class="input-group-addon">Inicio</span>
                            </div>
                    </div>
		</div>
                <div class="col-md-3">
                    <div class="form-group">
                            <div class="input-group input-group-sm">
                              <div class="input-group-addon"><span class="glyphicon glyphicon-time"></span></div>
                              <input type="text" class="form-control horas" value="2:30 PM" data-format="hh:mm A" id="hora_fin" name="hora_fin" placeholder="Hora" readonly="">
                              <span class="input-group-addon">Fin</span>
                            </div>
                    </div>
		</div>
                <div class="col-md-12">
                    <div class="form-group">
                            <div class="input-group input-group-sm">
                              <div class="input-group-addon"><i class="fa fa-thumb-tack"></i></div>
                              <textarea class="form-control" rows="2" id="directrices" name="directrices" placeholder="Directrices"></textarea>
                            </div>
                    </div>
		</div>
                <div class="col-md-12">
                    <div class="form-group">
                            <div class="input-group input-group-sm">
                              <div class="input-group-addon"><i class="fa fa-bus"></i></div>
                              <textarea class="form-control" rows="2" id="transporte" name="transporte" placeholder="Transporte"></textarea>
                            </div>
                    </div>
		</div>
                
	</div>
</div>

</div>