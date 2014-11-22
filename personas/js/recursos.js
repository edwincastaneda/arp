
jQuery(function( $ ){	
//////////////////////////////////////////////:::RECURSOS:::INICIO//////////////////////////////////////////	


function imprimirBotonRecursos(){
		input_e=$('#test_dones_espirituales').val()
		input_m=$('#test_dones_motivacionales').val()
		if((input_e !== ""  || input_m !== "") || (input_e !== ""  && input_m !== "")) {
		$("#boton_asignar_recurso").show();
		}else{
			$("#boton_asignar_recurso").hide('fast');
		}	
	}
	
// BUSQUEDA RECURSOS - PERSONAS

	$("#criterio_busqueda_personas_recursos").keydown(function(event){
	if ( event.which == 13 ) {
		 event.preventDefault();
		}
	});
	$("#criterio_busqueda_personas_recursos").keyup(function(event){
		$("#resultado_busqueda_personas_recursos").empty();
		criterio=$("#criterio_busqueda_personas_recursos").val();
		$.ajax({
			type: "POST",
			url: "personas/php/buscarPersonaAgregarRecurso.php",
			data: "criterio="+criterio,


			success: function(html){
				if(html=="no-criterio"){
				$("#mensaje_busqueda_personas_recursos").html("Ingrese el criterio de b&uacute;squeda").hide().fadeIn( "fast" );
				$("#mensaje_busqueda_personas_recursos").removeClass('label-info');
				$("#mensaje_busqueda_personas_recursos").addClass('label-warning');
				$("#status_asignacion_recursos").removeClass('fa-refresh fa-spin');
				$("#status_asignacion_recursos").addClass('fa-search');
				}
				if(html=="no-resultados"){
				$("#mensaje_busqueda_personas_recursos").html("No se encontraron resultados").hide().fadeIn( "fast" );
				$("#mensaje_busqueda_personas_recursos").removeClass('label-warning');
				$("#mensaje_busqueda_personas_recursos").addClass('label-info');
				$("#status_asignacion_recursos").removeClass('fa-refresh fa-spin');
				$("#status_asignacion_recursos").addClass('fa-search');
				}
				if(html!="no-criterio" && html!="no-resultados"){
				wt=$("#criterio_busqueda_personas_recursos").width()+87;
				$("#resultado_busqueda_personas_recursos").css("width",wt);
				$("#mensaje_busqueda_personas_recursos").hide();
				$("#resultado_busqueda_personas_recursos").html(html).hide().slideDown( "fast" );
				$("#status_asignacion_recursos").removeClass('fa-refresh fa-spin');
				$("#status_asignacion_recursos").addClass('fa-search');
				}	
				
			},
			beforeSend:function()
			{
				$("#status_asignacion_recursos").removeClass('fa-search');
				$("#status_asignacion_recursos").addClass('fa-refresh fa-spin');
			}
		});	
	});
	
	
	//CARGAR PERSONAS - ASIGNACION
	$( "body" ).on( 'click', '#load_personas_recursos', function () {
			id=$(this).attr("name");
			
			$.ajax({
			type: "POST",
			url: "personas/php/cargarPersonaAAgregarRecurso.php",
			data: "id="+id,


			success: function(html){
				$("#resultado_busqueda_personas_recursos").fadeOut(100);
				$("#res_cargar_busqueda_personas_recursos").show('fast');
				$("#res_cargar_busqueda_personas_recursos").html(html);
				$("#resultado_busqueda_personas_recursos").html("");
				$('#criterio_busqueda_personas_recursos').attr('disabled','disabled');
				$('#detalle_recursos_disponibles').show('fast');
			},
			beforeSend:function(){
				 $("#resultado_busqueda_personas_recursos").html("<h5 class='text-center'><span style='background:#000;color:#fff;' class='label'><i class='fa fa-spinner fa-spin'></i> Cargando...</span></h5>");
			}
		});	

	});
	
	$( "body" ).on( 'click', '#cerrar_recursos_boleta', function () {
		$('#criterio_busqueda_personas_recursos').val("");
		$('#criterio_busqueda_personas_recursos').removeAttr('disabled');
		$("#mensaje_busqueda_personas_recursos").hide();
		$("#cargar_personas_recursos").empty();
		$("#boton_asignar_recurso").hide();
		$("#resultado_busqueda_personas_recursos").empty();
		$("#resultado_busqueda_cursos_recursos").empty();
		$("#test_dones_espirituales").empty();
		$("#test_dones_motivacionales").empty();
		$('#test_dones_espirituales').removeAttr('disabled');
		$('#test_dones_motivacionales').removeAttr('disabled');
		$("#res_cargar_busqueda_personas_recursos").empty();
	});
	

	$( "body" ).on( 'click', '#remover_persona_recursos', function () {
		$('#criterio_busqueda_personas_recursos').val("");
		$('#criterio_busqueda_personas_recursos').removeAttr('disabled');
		$("#cargar_personas_recursos").empty();
		$("#res_cargar_busqueda_personas_recursos").empty();
		$("#boton_asignar_recurso").hide();
		$('#detalle_recursos_disponibles').hide();
		$('#test_dones_motivacionales').val('');
		$('#test_dones_espirituales').val('');
		$("#grafica_test_dones_espirituales").empty();
		$("#grafica_test_dones_motivacionales").empty();
		$('#test_dones_espirituales').attr('readonly', false);
		$('#test_dones_espirituales').removeClass('disable');
		$('#test_dones_motivacionales').attr('readonly', false);
		$('#test_dones_motivacionales').removeClass('disable');
		$('#test_dones_espirituales').removeAttr('disabled');
		$('#test_dones_motivacionales').removeAttr('disabled'); 
	});

//SELECCIONAR GRAFICAS	
	$( "body" ).on( 'click', '#aprobar_grafica_es', function () {
		imprimirBotonRecursos();
		$('#grafica_test_dones_espirituales').modal('hide');
		$('#test_dones_espirituales').attr('disabled','disabled');
		$('#status_asignacion_recursos').empty();
		
	});
	
	$( "body" ).on( 'click', '#cambiar_grafica_es', function () {
		$('#grafica_test_dones_espirituales').modal('hide');
		$('#test_dones_espirituales').val("");
	});
	
	$( "body" ).on( 'click', '#aprobar_grafica_mo', function () {
		imprimirBotonRecursos();
		$('#grafica_test_dones_motivacionales').modal('hide');
		$('#test_dones_motivacionales').attr('disabled','disabled');
		$('#status_asignacion_recursos').empty();
	});
	
		
//GRAFICAR
			$( "body" ).on( 'keyup blur change input paste', '#test_dones_espirituales', function () {
			var url_test = $("#test_dones_espirituales").val();
			var flag = url_test.indexOf("?");
			var parametros = url_test.substr(flag+1,url_test.length);
			$.ajax({
				type: "GET",
				url: "php/graficas/print-arp-esp.php",
				data: parametros,
	
	
				success: function(html){
				if(html=="no-valida"){
					$("#load_test_dones_espirituales").html("URL no valida, intente nuevamente!");
					$("#status_message_dones_espirituales").html("");
				}
				if(url_test==""){
					$("#load_test_dones_espirituales").html("");
					$("#status_message_dones_espirituales").html("");
				}
				if(url_test!="" && html!="no-valida"){
					$("#grafica_test_es").html(html);
					$("#grafica_test_dones_espirituales").modal('show');
					$("#status_message_dones_espirituales").html("");
				}
				},
				beforeSend:function()
				{
					 $("#status_message_dones_espirituales").html("<span class='label' style='background:#000;'><i class='fa fa-refresh fa-spin'></i> Cargando...</span>");
					 $("#load_test_dones_espirituales").html("");
				}
			});
	});
	$( "body" ).on( 'keyup blur change input paste', '#test_dones_motivacionales', function () {
			var url_test = $("#test_dones_motivacionales").val();
			var flag = url_test.indexOf("?");
			var parametros = url_test.substr(flag+1,url_test.length);
			$.ajax({
				type: "GET",
				url: "php/graficas/print-arp-mot.php",
				data: parametros,
	
	
				success: function(html){
				if(html=="no-valida"){
					$("#load_test_dones_motivacionales").html("URL no valida, intente nuevamente!");
					$("#status_message_dones_motivacionales").html("");
				}	
				if(url_test==""){
					$("#load_test_dones_motivacionales").html("");
					$("#status_message_dones_motivacionales").html("");
				}
				if(url_test!="" && html!="no-valida"){
					$("#grafica_test_mo").html(html);
					$("#grafica_test_dones_motivacionales").modal('show');
					$("#status_message_dones_motivacionales").html("");
				}
				},
				beforeSend:function()
				{
					 $("#status_message_dones_motivacionales").html("<span class='label' style='background:#000;'><i class='fa fa-refresh fa-spin'></i> Cargando...</span>");
					 $("#load_test_dones_motivacionales").html("");
				}
			});	
	});
	
	
	//ASIGNAR RECURSOS A BOLETA
	//$('#asignar_recurso').live('click' , function(){
	$( "body" ).on( 'click', '#asignar_recurso', function () {
		id_boleta_val=$("#id_boleta_asignacion").val();
        url_dones_esp_val=$('#test_dones_espirituales').val();
		url_dones_mot_val=$('#test_dones_motivacionales').val();
			
		existe_val=$('#existe_recursos').val();
         $.ajax({
            type: "POST",
           	url: "personas/php/agregrarRecurso.php",
			//data:"id_boleta="+id_boleta+"&url_dones_esp="+url_dones_esp+"&url_dones_mot="+url_dones_mot+"&existe="+existe,
			data: { id_boleta: id_boleta_val, url_dones_esp: url_dones_esp_val, url_dones_mot: url_dones_mot_val, existe:existe_val },

            success: function(html){
			  if(html=='true')
				  {
					$("#boton_asignar_recurso").hide('fast');
					$("#remover_persona_recursos").hide('fast');
					$('#test_dones_espirituales').prop("disabled", true);
					$('#test_dones_motivacionales').prop("disabled", true); 
					$("#status_asignacion_recursos").html("&iexcl;Asignaci&oacute;n realizada con &eacute;xito!");
				  }else{
					 $("#status_asignacion_recursos").html("&iexcl;Asignaci&oacute;n NO realizada, intente de nuevo!");
				  }
			  },
				beforeSend:function()
			  {
                 $("#status_asignacion_recursos").html("Asignando...")
              }
			  
        });
         return false;
	});
	
//////////////////////////////////////////////:::RECURSOS:::FIN//////////////////////////////////////////	

});