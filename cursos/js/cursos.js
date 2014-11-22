jQuery(function( $ ){	
//////////////////////////////////////////////:::CURSOS:::INICIO//////////////////////////////////////////

	//VALIDAR CAMPOS NUMERICOS
	$(document).ready(function(){
		$('#modulos_curso').numeric(","); 
	});
	
	//CERRAR VENTANAS
	$("#cerrar_nuevo_curso").click(function() {	
			$('#nombre_curso').val("");	
			$('#modulos_curso').val("");	
			$('#secciones_curso').val("");			
			$('#status_curso').hide('fast');	
			$("#mensaje_busqueda_cursos").hide();
	});
	
	$("#cerrar_busqueda_cursos").click(function() {
			$('#resultado_busqueda_cursos').hide();
			$('#cargar_busqueda_cursos').hide();
			$('#criterio_busqueda_cursos').val("");
			$('#todos_cursos').attr("checked",false);
			$('#res_cargar_busqueda_cursos').html('');
			$("#mensaje_busqueda_cursos").hide();
			
	});
	
	// GUARDAR
	$("#guardar_curso").click(function(){
		nombre_curso=$("#nombre_curso").val();
        modulos_curso=$("#modulos_curso").val();
		secciones_curso=$("#secciones_curso").val();
         $.ajax({
            type: "POST",
           	url: "cursos/php/nuevoCurso.php",
			data:"nombre_curso="+nombre_curso+"&modulos_curso="+modulos_curso+"&secciones_curso="+secciones_curso,

            success: function(html){
			  if(html=='true')
              {
				$("#guardar_curso").hide('fast');
				$("#status_curso").removeClass('label-info');
				$("#status_curso").addClass('label-success');
				$("#status_curso").html("&iexcl;Guardado!");
				$("#status_curso").fadeIn("slow");
			  }
              else
              {	
				$("#status_curso").removeClass('label-info');
				$("#status_curso").addClass('label-danger');
                $("#status_curso").html("&iexcl;Error!");
				$("#status_curso").fadeIn("slow");
			  }
			  },
				beforeSend:function()
			  {
				$("#status_curso").removeClass('label-danger');
				$("#status_curso").addClass('label-info');
                $("#status_curso").html("<i class='fa fa-refresh fa-spin'></i> Guardando...");
				$("#status_curso").fadeIn("slow");
              }
        });
         return false;
	});
	
	
	// BUSQUEDA

	$("#criterio_busqueda_cursos").keydown(function(event){
	if ( event.which == 13 ) {
		 event.preventDefault();
		}
	});
	$("#criterio_busqueda_cursos").keyup(function(event){
		$("#resultado_busqueda_cursos").empty();
		$('#todos_cursos').attr("checked",false);
		criterio=$("#criterio_busqueda_cursos").val();
		$.ajax({
			type: "POST",
			url: "cursos/php/buscarCurso.php",
			data: "criterio="+criterio,


			success: function(html){
				if(html=="no-criterio"){
				$("#mensaje_busqueda_cursos").html("Ingrese el criterio de b&uacute;squeda").hide().fadeIn( "fast" );
				$("#mensaje_busqueda_cursos").removeClass('label-info');
				$("#mensaje_busqueda_cursos").addClass('label-warning');
				$("#status_busqueda_cursos").removeClass('fa-refresh fa-spin');
				$("#status_busqueda_cursos").addClass('fa-search');
				}
				if(html=="no-resultados"){
				$("#mensaje_busqueda_cursos").html("No se encontraron resultados").hide().fadeIn( "fast" );
				$("#mensaje_busqueda_cursos").removeClass('label-warning');
				$("#mensaje_busqueda_cursos").addClass('label-info');
				$("#status_busqueda_cursos").removeClass('fa-refresh fa-spin');
				$("#status_busqueda_cursos").addClass('fa-search');
				}
				if(html!="no-criterio" && html!="no-resultados"){
				wt=$("#criterio_busqueda_cursos").width()+87;
				$("#resultado_busqueda_cursos").css("width",wt);
				$("#mensaje_busqueda_cursos").hide();
				$("#resultado_busqueda_cursos").html(html).hide().slideDown( "fast" );
				$("#status_busqueda_cursos").removeClass('fa-refresh fa-spin');
				$("#status_busqueda_cursos").addClass('fa-search');
				}
			},
			beforeSend:function()
			{
				$("#status_busqueda_cursos").removeClass('fa-search');
				$("#status_busqueda_cursos").addClass('fa-refresh fa-spin');
			}
		});	
	});
	
	$( "body" ).on( 'click', '#todos_cursos', function () {
		if($('#todos_cursos').is(':checked')===true){
		criterio="todos";	 
		}else{
		criterio=$("#criterio_busqueda_cursos").val();	
		}
		$.ajax({
			type: "POST",
			url: "cursos/php/buscarCurso.php",
			data: "criterio="+criterio,
			success: function(html){
				if(html!="no-criterio" && html!="no-resultados"){
					wt=$("#criterio_busqueda_cursos").width()+87;
					$("#resultado_busqueda_cursos").css("width",wt);
					$("#resultado_busqueda_cursos").html(html).hide().slideDown( "fast" );
					
					$("#status_busqueda_cursos").removeClass('fa-refresh fa-spin');
					$("#status_busqueda_cursos").addClass('fa-search');
					$("#mensaje_busqueda_cursos").hide();
				}else{
					$("#resultado_busqueda_cursos").slideUp( "fast" );
					$("#status_busqueda_cursos").removeClass('fa-refresh fa-spin');
					$("#status_busqueda_cursos").addClass('fa-search');
				}
			},
			beforeSend:function()
			{
				$("#status_busqueda_cursos").removeClass('fa-search');
				$("#status_busqueda_cursos").addClass('fa-refresh fa-spin');
			}
		});	
	});
	
	//CARGAR
	$( "body" ).on( 'click', '#load_cursos', function () {
			id=$(this).attr("name");
			$.ajax({
			type: "POST",
			url: "cursos/php/cargarCurso.php",
			data: "id="+id,
			success: function(html){
				$("#resultado_busqueda_cursos").fadeOut(100);
				$("#cargar_busqueda_cursos").show('fast');
				$("#res_cargar_busqueda_cursos").html(html);			
			},
			beforeSend:function()
			{
				 $("#res_cargar_busqueda_cursos").html("<h4><span style='background:#000;color:#fff;' class='label'><i class='fa fa-spinner fa-spin'></i> Cargando...</span></h4>");
			}
		});	

	});
	
	//MODIFICAR
	$( "body" ).on( 'click', '#modificar_curso', function () {
		id_e=$("#id_curso_e").val();
		nombre_e=$("#nombre_curso_e").val();
        modulos_e=$("#modulos_curso_e").val();
         $.ajax({
            type: "POST",
           	url: "cursos/php/editarCurso.php",
			data:"nombre="+nombre_e+"&modulos="+modulos_e+"&id="+id_e,

            success: function(html){
			  if(html=='true')
              {
				$("#modificar_curso").hide('fast');
				$("#cargar_busqueda_cursos").hide('2000');
				$("#status_curso_modificado").removeClass('label-info');
				$("#status_curso_modificado").addClass('label-success');
				$("#status_curso_modificado").html("&iexcl;Modificado!");
				$("#status_curso_modificado").fadeIn("slow");	
              }
              else
              {
                $("#status_curso_modificado").removeClass('label-info');
				$("#status_curso_modificado").addClass('label-danger');
                $("#status_curso_modificado").html("&iexcl;Error!");
				$("#status_curso_modificado").fadeIn("slow");
			  }
			  },
				beforeSend:function()
			  {
                $("#status_curso_modificado").removeClass('label-danger');
				$("#status_curso_modificado").addClass('label-info');
                $("#status_curso_modificado").html("<i class='fa fa-refresh fa-spin'></i> Guardando...");
				$("#status_curso_modificado").fadeIn("slow");
              }
        });
         return false;
	});
	
	$( "body" ).on( 'click', '#quitar_detalles_curso', function () {
			$("#res_cargar_busqueda_cursos").html("");
			$("#criterio_busqueda_cursos").val("");	
			$('#todos_cursos').attr("checked",false);
	});		
	
//////////////////////////////////////////////:::CURSOS:::FIN//////////////////////////////////////////		
});