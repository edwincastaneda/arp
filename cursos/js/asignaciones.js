jQuery(function( $ ){		
//////////////////////////////////////////////:::ASIGNACION:::INICIO//////////////////////////////////////////
	
	// BUSQUEDA ASIGNACIONES - CURSOS
	$("#criterio_busqueda_cursos_asignacion").click(function(event){
		$("#resultado_busqueda_personas_asignacion").empty();
	});
	
	$("#criterio_busqueda_cursos_asignacion").keydown(function(event){
	if ( event.which == 13 ) {
		 event.preventDefault();
		}
	});
	$("#criterio_busqueda_cursos_asignacion").keyup(function(event){
		$("#resultado_busqueda_cursos_asignacion").empty();
		criterio=$("#criterio_busqueda_cursos_asignacion").val();
		$.ajax({
			type: "POST",
			url: "cursos/php/buscarCursoAAsignar.php",
			data: "criterio="+criterio,


			success: function(html){
			if(html=="no-criterio"){
				$("#mensaje_busqueda_cursos_asignacion").html("Ingrese el criterio de b&uacute;squeda de curso").hide().fadeIn( "fast" );
				$("#mensaje_busqueda_cursos_asignacion").removeClass('label-info');
				$("#mensaje_busqueda_cursos_asignacion").addClass('label-warning');
				$("#status_busqueda_cursos_asignacion").removeClass('fa-refresh fa-spin');
				$("#status_busqueda_cursos_asignacion").addClass('fa-search');
			}
			if(html=="no-resultados"){
				$("#mensaje_busqueda_cursos_asignacion").html("No se encontraron resultados").hide().fadeIn( "fast" );
				$("#mensaje_busqueda_cursos_asignacion").removeClass('label-warning');
				$("#mensaje_busqueda_cursos_asignacion").addClass('label-info');
				$("#status_busqueda_cursos_asignacion").removeClass('fa-refresh fa-spin');
				$("#status_busqueda_cursos_asignacion").addClass('fa-search');
			}
			if(html!="no-criterio" && html!="no-resultados"){
				wt=$("#criterio_busqueda_cursos_asignacion").width()+88;
				$("#resultado_busqueda_cursos_asignacion").css("width",wt);
				$("#mensaje_busqueda_cursos_asignacion").hide();
				$("#resultado_busqueda_cursos_asignacion").html(html).hide().fadeIn(100);
				$("#status_busqueda_cursos_asignacion").removeClass('fa-refresh fa-spin');
				$("#status_busqueda_cursos_asignacion").addClass('fa-search');
			}	
			},
			beforeSend:function()
			{
				$("#status_busqueda_cursos_asignacion").removeClass('fa-search');
				$("#status_busqueda_cursos_asignacion").addClass('fa-refresh fa-spin');
			}
		});	
	});
	
	// BUSQUEDA ASIGNACIONES - PERSONAS
	$("#criterio_busqueda_personas_asignacion").click(function(event){
		$("#resultado_busqueda_cursos_asignacion").empty();
	});
	
	$("#criterio_busqueda_personas_asignacion").keydown(function(event){
	if ( event.which == 13 ) {
		 event.preventDefault();
		}
	});
	$("#criterio_busqueda_personas_asignacion").keyup(function(event){
		$("#resultado_busqueda_personas_asignacion").empty();
		criterio=$("#criterio_busqueda_personas_asignacion").val();
		$.ajax({
			type: "POST",
			url: "cursos/php/buscarPersonaAAsignar.php",
			data: "criterio="+criterio,


			success: function(html){
			
			if(html=="no-criterio"){
				$("#mensaje_busqueda_personas_asignacion").html("Ingrese el criterio de b&uacute;squeda de persona").hide().fadeIn( "fast" );
				$("#mensaje_busqueda_personas_asignacion").removeClass('label-info');
				$("#mensaje_busqueda_personas_asignacion").addClass('label-warning');
				$("#status_busqueda_personas_asignacion").removeClass('fa-refresh fa-spin');
				$("#status_busqueda_personas_asignacion").addClass('fa-search');
			}
			if(html=="no-resultados"){
				$("#mensaje_busqueda_personas_asignacion").html("No se encontraron resultados").hide().fadeIn( "fast" );
				$("#mensaje_busqueda_personas_asignacion").removeClass('label-warning');
				$("#mensaje_busqueda_personas_asignacion").addClass('label-info');
				$("#status_busqueda_personas_asignacion").removeClass('fa-refresh fa-spin');
				$("#status_busqueda_personas_asignacion").addClass('fa-search');
			}
			if(html!="no-criterio" && html!="no-resultados"){
				wt=$("#criterio_busqueda_personas_asignacion").width()+88;
				$("#resultado_busqueda_personas_asignacion").css("width",wt);
				$("#mensaje_busqueda_personas_asignacion").hide();
				$("#resultado_busqueda_personas_asignacion").html(html).hide().fadeIn(100);
				$("#status_busqueda_personas_asignacion").removeClass('fa-refresh fa-spin');
				$("#status_busqueda_personas_asignacion").addClass('fa-search');
			}	
			},
			beforeSend:function()
			{
				$("#status_busqueda_personas_asignacion").removeClass('fa-search');
				$("#status_busqueda_personas_asignacion").addClass('fa-refresh fa-spin');
			}
		});	
	});
	
	//AGREGAR BOTON ASIGNAR
	function imprimirBoton(){
		if($('#cargar_personas_asignacion').html() != "" && $('#cargar_cursos_asignacion').html() != "") {
		$("#boton_asignar_curso").html("<h5><span style='color:#fff;' id='status_asignacion' class='label label-default' ></span></h5><input type='submit' value='Proceder' id='asignar_curso' class='btn btn-success btn-sm' />");
		}	
	}
	
	//CARGAR CURSOS - ASIGNACION
	//$('#load_cursos_asignacion').live('click' , function(){
	$( "body" ).on( 'click', '#load_cursos_asignacion', function () {
			id=$(this).attr("name");
			console.log("var: "+id);
			$.ajax({
			type: "POST",
			url: "cursos/php/cargarCursoAAsignar.php",
			data: "id="+id,


			success: function(html){
				
				$("#resultado_busqueda_cursos_asignacion").fadeOut(100);
				$("#cargar_cursos_asignacion").show('fast');
				$("#cargar_cursos_asignacion").html(html);
				$("#resultado_busqueda_cursos_asignacion").html("");
				$('#criterio_busqueda_cursos_asignacion').attr('readonly', true);
				$('#criterio_busqueda_cursos_asignacion').addClass('disable');
				$('#criterio_busqueda_cursos_asignacion').attr('disabled','disabled');
				$("#mensaje_busqueda_cursos_asignacion").html("");
				imprimirBoton();
			},
			beforeSend:function()
			{
				 $("#cargar_cursos_asignacion").html("<h4><span style='background:#000;color:#fff;' class='label'><i class='fa fa-spinner fa-spin'></i> Cargando...</span></h4>");

			}
		});	

	});
	
	//CARGAR PERSONAS - ASIGNACION
	//$('#load_personas_asignacion').live('click' , function(){
	$( "body" ).on( 'click', '#load_personas_asignacion', function () {
			id=$(this).attr("name");
			console.log("var: "+id);
			$.ajax({
			type: "POST",
			url: "cursos/php/cargarPersonaAAsignar.php",
			data: "id="+id,


			success: function(html){

				$("#resultado_busqueda_personas_asignacion").fadeOut(100);
				$("#cargar_personas_asignacion").show('fast');
				$("#cargar_personas_asignacion").html(html);
				$("#resultado_busqueda_personas_asignacion").html("");	
				$('#criterio_busqueda_personas_asignacion').attr('readonly', true);
				$('#criterio_busqueda_personas_asignacion').addClass('disable');
				$('#criterio_busqueda_personas_asignacion').attr('disabled','disabled');
				$("#mensaje_busqueda_personas_asignacion").html("");
				imprimirBoton();
			},
			beforeSend:function()
			{
				 $("#cargar_personas_asignacion").html("<h4><span style='background:#000;color:#fff;' class='label'><i class='fa fa-spinner fa-spin'></i> Cargando...</span></h4>");

			}
		});	

	});
	
	
	//REMOVER DETALLE DE ASIGNACION
	$( "body" ).on( 'click', '#remover_curso_asignacion', function () {
		$('#criterio_busqueda_cursos_asignacion').attr('readonly', false);
		$('#criterio_busqueda_cursos_asignacion').removeClass('disable');
		$('#criterio_busqueda_cursos_asignacion').val("");
		$("#cargar_cursos_asignacion").empty();
		$("#boton_asignar_curso").empty();
		$("#criterio_busqueda_cursos_asignacion").removeAttr('disabled');
	});
	
	$( "body" ).on( 'click', '#remover_persona_asignacion', function () {
		$('#criterio_busqueda_personas_asignacion').attr('readonly', false);
		$('#criterio_busqueda_personas_asignacion').removeClass('disable');
		$('#criterio_busqueda_personas_asignacion').val("");
		$("#cargar_personas_asignacion").empty();
		$("#boton_asignar_curso").empty();
		$("#criterio_busqueda_personas_asignacion").removeAttr('disabled');
	});
	
	$( "body" ).on( 'click', '#cerrar_asignar_cursos', function () {
		$('#criterio_busqueda_cursos_asignacion').attr('readonly', false);
		$('#criterio_busqueda_cursos_asignacion').removeClass('disable');
		$('#criterio_busqueda_cursos_asignacion').val("");
		$('#criterio_busqueda_cursos_asignacion').removeAttr('disabled');
		$("#cargar_cursos_asignacion").empty();
		$('#criterio_busqueda_personas_asignacion').attr('readonly', false);
		$('#criterio_busqueda_personas_asignacion').removeClass('disable');
		$('#criterio_busqueda_personas_asignacion').val("");
		$('#criterio_busqueda_personas_asignacion').removeAttr('disabled');
		$("#cargar_personas_asignacion").empty();
		$("#boton_asignar_curso").empty();
		$("#resultado_busqueda_personas_asignacion").empty();
		$("#resultado_busqueda_cursos_asignacion").empty();
		$("#mensaje_busqueda_personas_asignacion").hide();
		$("#mensaje_busqueda_cursos_asignacion").hide();
	});
	
	//ASIGNAR CURSO A BOLETA
	//$('#asignar_curso').live('click' , function(){
	$( "body" ).on( 'click', '#asignar_curso', function () {
		id_boleta=$("#id_boleta_asignacion").val();
		id_curso=$("#id_curso_asignacion").val();
		ano=$("#ano_asignacion").val();
		mes=$("#mes_asignacion").val();
        modulo=$("#modulo").val();
         $.ajax({
            type: "POST",
           	url: "cursos/php/asignarCurso.php",
			data:"id_boleta="+id_boleta+"&id_curso="+id_curso+"&ano="+ano+"&mes="+mes+"&modulo="+modulo,

            success: function(html){
			  if(html=='true')
              {
				$("#asignar_curso").hide('fast');
				$("#remover_persona_asignacion").hide('fast');
				$("#remover_curso_asignacion").hide('fast');
				$("#status_asignacion").hide().html("&iexcl;Asignaci&oacute;n realizada con &eacute;xito!").fadeIn('slow');
				$("#status_asignacion").removeClass('label-info');
				$("#status_asignacion").addClass('label-success');
              }
              else
              {
                 $("#status_asignacion").hide().html("&iexcl;Asignaci&oacute;n NO realizada, intente de nuevo!").fadeIn('slow');
				 $("#status_asignacion").removeClass('label-info');
				 $("#status_asignacion").addClass('label-danger');
              }
			  },
				beforeSend:function()
			  {
                 $("#status_asignacion").hide().html("<i class='fa fa-refresh fa-spin'></i> Asignando...").fadeIn('slow');
				 $("#status_asignacion").removeClass('label-default');
				 $("#status_asignacion").removeClass('label-danger');
			     $("#status_asignacion").addClass('label-info');
				 
              }
        });
         return false;
	});
	
	
//////////////////////////////////////////////:::ASIGNACION:::FIN//////////////////////////////////////////	

});