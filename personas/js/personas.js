jQuery(function( $ ){
//////////////////////////////////////////////:::BOLETAS:::PERSONAS:::INICIO//////////////////////////////////////////	
	//VALIDAR CAMPOS NUMERICOS
	$(document).ready(function(){
		$('#tiempoc').numeric(","); 
		$('#telefono').numeric(",");
		$('#celular').numeric(",");
	});
	$( document ).ajaxStop(function() {
		$('#tiempoc_e').numeric(","); 
		$('#telefono_e').numeric(",");
		$('#celular_e').numeric(",");
	});
	// GUARDAR
	$("#guardar_boleta").click(function(){
		nombre1=$("#nombre1").val();
        nombre2=$("#nombre2").val();
		apellido1=$("#apellido1").val();
		apellido2=$("#apellido2").val();
		apellidoc=$("#apellidoc").val();
		nombreu=$("#nombreu").val();
		genero=$("#genero").val();
		estadoc=$("#estadoc").val();
		fechan=$("#fechan_a").val()+"-"+$("#fechan_m").val()+"-"+$("#fechan_d").val();
		direccion=$("#direccion").val();
		pais=$("#pais").val();
		departamento=$("#departamento").val();
		municipio=$("#municipio").val();
		puo=$("#puo").val();
		trabajo=$("#trabajo").val();
		universidad=$("#universidad").val();
		colegio=$("#colegio").val();
		telefono=$("#telefono").val();
		celular=$("#celular").val();
		correo=$("#correo").val();
		hora=$("#hora").val();
		iglesia=$("#iglesia").val();
		iglesian=$("#iglesian").val();
		tiempoc=$("#tiempoc").val()+"-"+$("#cantidad").val();
         $.ajax({
            type: "POST",
           	url: "personas/php/nuevaPersona.php",
			data:"nombre1="+nombre1+"&nombre2="+nombre2+"&apellido1="+apellido1+"&apellido2="+apellido2+"&apellidoc="+apellidoc+"&nombreu="+nombreu+"&genero="+genero+"&estadoc="+estadoc+"&fechan="+fechan+"&direccion="+direccion+"&pais="+pais+"&departamento="+departamento+"&municipio="+municipio+"&puo="+puo+"&trabajo="+trabajo+"&universidad="+universidad+"&colegio="+colegio+"&telefono="+telefono+"&celular="+celular+"&correo="+correo+"&hora="+hora+"&iglesia="+iglesia+"&iglesian="+iglesian+"&tiempoc="+tiempoc,

            success: function(html){
			  if(html=='true')
              {
				$("#guardar_boleta").hide('fast');
				$("#status_boleta").html("&iexcl;Boleta guardada con &eacute;xito!");
              }
              else
              {
                 $("#status_boleta").html("&iexcl;Boleta NO guardada, intente de nuevo!");
              }
			  },
				beforeSend:function()
			  {
                 $("#status_boleta").html("Guardando Boleta...")
              }
        });
         return false;
	});
	
	
	//MODIFICAR
	$( "body" ).on( 'click', '#modificar_persona', function () {
		id_e=$("#id_e").val();
		nombre1_e=$("#nombre1_e").val();
        nombre2_e=$("#nombre2_e").val();
		apellido1_e=$("#apellido1_e").val();
		apellido2_e=$("#apellido2_e").val();
		apellidoc_e=$("#apellidoc_e").val();
		nombreu_e=$("#nombreu_e").val();
		genero_e=$("#genero_e").val();
		estadoc_e=$("#estadoc_e").val();
		fechan_e=$("#fechan_a_e").val()+"-"+$("#fechan_m_e").val()+"-"+$("#fechan_d_e").val();
		direccion_e=$("#direccion_e").val();
		pais_e=$("#pais_e").val();
		departamento_e=$("#departamento_e").val();
		municipio_e=$("#municipio_e").val();
		puo_e=$("#puo_e").val();
		trabajo_e=$("#trabajo_e").val();
		universidad_e=$("#universidad_e").val();
		colegio_e=$("#colegio_e").val();
		telefono_e=$("#telefono_e").val();
		celular_e=$("#celular_e").val();
		correo_e=$("#correo_e").val();
		hora_e=$("#hora_e").val();
		iglesia_e=$("#iglesia_e").val();
		iglesian_e=$("#iglesian_e").val();
		tiempoc_e=$("#tiempoc_e").val()+"-"+$("#cantidad_e").val();
         $.ajax({
            type: "POST",
           	url: "personas/php/editarPersona.php",
			data:"nombre1="+nombre1_e+"&nombre2="+nombre2_e+"&apellido1="+apellido1_e+"&apellido2="+apellido2_e+"&apellidoc="+apellidoc_e+"&nombreu="+nombreu_e+"&genero="+genero_e+"&estadoc="+estadoc_e+"&fechan="+fechan_e+"&direccion="+direccion_e+"&pais="+pais_e+"&departamento="+departamento_e+"&municipio="+municipio_e+"&puo="+puo_e+"&trabajo="+trabajo_e+"&universidad="+universidad_e+"&colegio="+colegio_e+"&telefono="+telefono_e+"&celular="+celular_e+"&correo="+correo_e+"&hora="+hora_e+"&iglesia="+iglesia_e+"&iglesian="+iglesian_e+"&tiempoc="+tiempoc_e+"&id="+id_e,

            success: function(html){
			  if(html=='true')
              {
				$("#modificar_persona").hide('fast');
				$("#status_boleta_modificada").html("&iexcl;Boleta modificada con &eacute;xito!");
				$("#cargar_busqueda").hide('2000');
              }
              else
              {
                 $("#status_boleta_modificada").html("&iexcl;Boleta NO modificada, intente de nuevo!");
              }
			  
			  if(html=='true')
              {
				$("#modificar_persona").hide('fast');
				$("#cargar_busqueda_personas").hide('2000');
				$("#status_persona_modificada").removeClass('label-info');
				$("#status_persona_modificada").addClass('label-success');
				$("#status_persona_modificada").html("&iexcl;Modificado!");
				$("#status_persona_modificada").fadeIn("slow");	
              }
              else
              {
                $("#status_persona_modificada").removeClass('label-info');
				$("#status_persona_modificada").addClass('label-danger');
                $("#status_persona_modificada").html("&iexcl;Error!");
				$("#status_persona_modificada").fadeIn("slow");
			  }
			  
			  },
				beforeSend:function()
			  {
                 $("#status_boleta_modificada").html("Guardando cambios en Boleta...")
              }
        });
         return false;
	});
				
				
	// BUSQUEDA
	//$("#criterio_busqueda").focus();
	$("#criterio_busqueda").keydown(function(event){
	if ( event.which == 13 ) {
		 event.preventDefault();
		}
	});
	$("#criterio_busqueda").keyup(function(event){
		$("#resultado_busqueda").empty();
		$('#todos_personas').attr("checked",false);
		criterio=$("#criterio_busqueda").val();
		$.ajax({
			type: "POST",
			url: "personas/php/buscarPersona.php",
			data: "criterio="+criterio,


			success: function(html){
				if(html=="no-criterio"){
				$("#mensaje_busqueda").html("Ingrese el criterio de b&uacute;squeda").hide().fadeIn( "fast" );
				$("#mensaje_busqueda").removeClass('label-info');
				$("#mensaje_busqueda").addClass('label-warning');
				$("#status_busqueda").removeClass('fa-refresh fa-spin');
				$("#status_busqueda").addClass('fa-search');
				}
				if(html=="no-resultados"){
				$("#mensaje_busqueda").html("No se encontraron resultados").hide().fadeIn( "fast" );
				$("#mensaje_busqueda").removeClass('label-warning');
				$("#mensaje_busqueda").addClass('label-info');
				$("#status_busqueda").removeClass('fa-refresh fa-spin');
				$("#status_busqueda").addClass('fa-search');
				}
				if(html!="no-criterio" && html!="no-resultados"){
				wt=$("#criterio_busqueda").width()+87;
				$("#resultado_busqueda").css("width",wt);
				$("#mensaje_busqueda").hide();
				$("#resultado_busqueda").html(html).hide().slideDown( "fast" );
				$("#status_busqueda").removeClass('fa-refresh fa-spin');
				$("#status_busqueda").addClass('fa-search');
				}	
			},
			beforeSend:function()
			{
				$("#status_busqueda").removeClass('fa-search');
				$("#status_busqueda").addClass('fa-refresh fa-spin');
			}
		});	
	});
	
	$( "body" ).on( 'click', '#todos_personas', function () {
		if($('#todos_personas').is(':checked')===true){
		criterio="todos";	 
		}else{
		criterio=$("#criterio_busqueda").val();	
		}
		$.ajax({
			type: "POST",
			url: "personas/php/buscarPersona.php",
			data: "criterio="+criterio,
			success: function(html){
			
			if(html!="no-criterio" && html!="no-resultados"){
				wt=$("#criterio_busqueda").width()+87;
				$("#resultado_busqueda").css("width",wt);
				$("#resultado_busqueda").html(html).hide().slideDown( "fast" );
				
				$("#status_busqueda").removeClass('fa-refresh fa-spin');
				$("#status_busqueda").addClass('fa-search');
				$("#mensaje_busqueda").hide();
			}else{
				$("#resultado_busqueda").slideUp( "fast" );
				$("#status_busqueda").removeClass('fa-refresh fa-spin');
				$("#status_busqueda").addClass('fa-search');
			}
			},
			beforeSend:function()
			{
				$("#status_busqueda").removeClass('fa-search');
				$("#status_busqueda").addClass('fa-refresh fa-spin');
			}
		});	
	});
	
	
	//CARGAR
	//$('#load_personas').live('click' , function(){
	$( "body" ).on( 'click', '#load_personas', function () {
			id=$(this).attr("name");
			$.ajax({
			type: "POST",
			url: "personas/php/cargarPersona.php",
			data: "id="+id,


			success: function(html){

				$("#resultado_busqueda").fadeOut(100);
				$("#cargar_busqueda").show('fast');
				$("#res_cargar_busqueda").html(html);	
				
				$( document ).ajaxStop(function() {
				  if($("#iglesia_e").val()=="No"){
						$("#iglesia_casilla_e").show('fast');				
					}
				});
				
			},
			beforeSend:function()
			{
				 $("#res_cargar_busqueda").html("<h4><span style='background:#000;color:#fff;' class='label'><i class='fa fa-spinner fa-spin'></i> Cargando...</span></h4>");


			}
		});	

	});

	//ASISTE A LA IGLESIA?
	$("#iglesia_casilla").hide();
	$( document ).ajaxStop(function() {
	  $("#iglesia_casilla_e").hide();
	});
	$("#iglesia").change(function() {
	  if($("#iglesia").val()=="No"){
		  	$('#iglesian').val("");
		  	$("#iglesia_casilla").show('fast');
		  }else{
		$("#iglesia_casilla").hide('fast');
		}
	});
	//$("#iglesia_e").live('click' , function(){
	$( "body" ).on( 'click', '#iglesia_e', function () {
	  if($("#iglesia_e").val()=="No"){
		  	$('#iglesian_e').val("");
		  	$("#iglesia_casilla_e").show('fast');
		  }else{
		$("#iglesia_casilla_e").hide('fast');
		}
	});
	
	//CERRAR VENTANAS
	$("#cerrar_busqueda").click(function() {
			$("#resultado_busqueda").hide();
			$("#cargar_busqueda").hide();
			$('#id_e').val("");		
			$('#nombre1_e').val("");	
			$('#nombre2_e').val("");	
			$('#apellido1_e').val("");	
			$('#apellido2_e').val("");	
			$('#apellidoc_e').val("");	
			$('#nombreu_e').val("");	
			$('#genero_e').val("");	
			$("#estadoc_e").val("");
			$("#fechan_a_e").val("");
			$("#fechan_m_e").val("");
			$("#fechan_d_e").val("");
			$("#direccion_e").val("");
			$("#pais_e").val("");
			$("#departamento_e").val("");
			$("#municipio_e").val("");
			$("#puo_e").val("");
			$("#trabajo_e").val("");
			$("#universidad_e").val("");
			$("#colegio_e").val("");
			$("#telefono_e").val("");
			$("#celular_e").val("");
			$("#correo_e").val("");
			$("#hora_e").val("");
			$("#iglesia_e").val("");
			$("#iglesian_e").val("");
			$("#tiempoc_e").val("");
			$("#cantidad_e").val("");
			$("#criterio_busqueda").val("");	
			$('#todos_personas').attr("checked",false);
			$("#mensaje_busqueda").hide();
	});
	$("#cerrar_nueva_boleta").click(function() {		
			$('#nombre1').val("");	
			$('#nombre2').val("");	
			$('#apellido1').val("");	
			$('#apellido2').val("");	
			$('#apellidoc').val("");	
			$('#nombreu').val("");	
			$('#genero').val("");	
			$("#estadoc").val("");
			$("#fechan_a").val("");
			$("#fechan_m").val("");
			$("#fechan_d").val("");
			$("#direccion").val("");
			$("#pais").val("");
			$("#departamento").val("Guatemala");
			$("#municipio").val("");
			$("#puo").val("");
			$("#trabajo").val("");
			$("#universidad").val("");
			$("#colegio").val("");
			$("#telefono").val("");
			$("#celular").val("");
			$("#correo").val("");
			$("#hora").val("");
			$("#iglesia").val("");
			$("#iglesian").val("");
			$("#tiempoc").val("");
			$("#cantidad").val("");
			$("#status_boleta").hide('fast');
			$("#iglesia_casilla").hide();
			$("#mensaje_busqueda").hide();
	});
	$( "body" ).on( 'click', '#quitar_detalles_persona', function () {
			$("#res_cargar_busqueda").html("");
			$("#criterio_busqueda").val("");	
			$('#todos_personas').attr("checked",false);
	});		
//////////////////////////////////////////////:::BOLETAS:::PERSONAS:::FIN//////////////////////////////////////////		
});