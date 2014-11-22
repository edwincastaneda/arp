jQuery(function( $ ){	
//////////////////////////////////////////////:::CONTROL:::INICIO//////////////////////////////////////////

// BUSQUEDA
	$("#criterio_busqueda_personas_control").keydown(function(event){
	if ( event.which == 13 ) {
		 event.preventDefault();
		}
	});
	$("#criterio_busqueda_personas_control").keyup(function(event){
		$("#resultado_busqueda_personas_control").empty();
		criterio=$("#criterio_busqueda_personas_control").val();
		$.ajax({
			type: "POST",
			url: "control/php/buscarPersonaControl.php",
			data: "criterio="+criterio,


			success: function(html){
			if(html=="no-criterio"){
				$("#mensaje_busqueda_personas_control").html("Ingrese el criterio de b&uacute;squeda").hide().fadeIn( "fast" );
				$("#mensaje_busqueda_personas_control").removeClass('label-info');
				$("#mensaje_busqueda_personas_control").addClass('label-warning');
				$("#status_busqueda_personas_control").removeClass('fa-refresh fa-spin');
				$("#status_busqueda_personas_control").addClass('fa-search');
				}
			if(html=="no-resultados"){
				$("#mensaje_busqueda_personas_control").html("No se encontraron resultados").hide().fadeIn( "fast" );
				$("#mensaje_busqueda_personas_control").removeClass('label-warning');
				$("#mensaje_busqueda_personas_control").addClass('label-info');
				$("#status_busqueda_personas_control").removeClass('fa-refresh fa-spin');
				$("#status_busqueda_personas_control").addClass('fa-search');
				}
				
			if(html!="no-criterio" && html!="no-resultados"){
				wt=$("#criterio_busqueda_personas_control").width()+87;
				$("#resultado_busqueda_personas_control").css("width",wt);
				$("#mensaje_busqueda_personas_control").hide();
				$("#resultado_busqueda_personas_control").html(html).hide().slideDown( "fast" );
				$("#status_busqueda_personas_control").removeClass('fa-refresh fa-spin');
				$("#status_busqueda_personas_control").addClass('fa-search');
				}				
			},
			beforeSend:function()
			{
				$("#status_busqueda_personas_control").removeClass('fa-search');
				$("#status_busqueda_personas_control").addClass('fa-refresh fa-spin');
			}
		});	
	});

//CARGAR
	$( "body" ).on( 'click', '#load_personas_control', function () {
			id=$(this).attr("name");
			console.log("var: "+id);
			$.ajax({
			type: "POST",
			url: "control/php/cargarPersonaControl.php",
			data: "id="+id,


			success: function(html){

				$("#resultado_busqueda_personas_control").fadeOut(100);
				$("#cargar_busqueda_personas_control").show('fast');
				$("#cargar_busqueda_personas_control").html(html);
				$("#res_cargar_busqueda_personas_control").html("");
				$('#criterio_busqueda_personas_control').attr('readonly', true);
				$('#criterio_busqueda_personas_control').addClass('disable');
				$('#criterio_busqueda_personas_control').attr('disabled','disabled');
			},
			beforeSend:function()
			{
				 $("#res_cargar_busqueda_personas_control").html("Cargando...");

			}
		});	

	});
		
		
	function limpiarControl(){
		$('#criterio_busqueda_personas_control').attr('readonly', false);
		$('#criterio_busqueda_personas_control').removeClass('disable');
		$('#criterio_busqueda_personas_control').val("");
		$('#criterio_busqueda_personas_control').removeAttr('disabled');
		$("#cargar_busqueda_personas_control").empty(); 
		$("#mensaje_busqueda_personas_control").hide();
	}
		//REMOVER DETALLES DEL USUARIO
		$( "body" ).on( 'click', '#remover_detalles_control', function () {
		limpiarControl();
		});
		
		//CERRAR VENTANA CONTROL
		$( "body" ).on( 'click', '#cerrar_control', function () {
			limpiarControl();
		});
		
		
		//CERRAR VENTANA CONTROL Y ABRIR EDICION
		$( "body" ).on( 'click', 'i[rel="editar_persona_control"]', function () {
			$('#control').hide();
			$('#busqueda_boleta').show();
			limpiarControl();
		});
		
		
//////////////////////////////////////////////:::CONTROL:::FIN//////////////////////////////////////////	

});
