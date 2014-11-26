
jQuery(function( $ ){	
    
    $(document).ready(function () {
         $.ajax({
            type: "POST",
            url: "servidores/php/cargosServicios.php",
            success: function (html) {
            $("#cargos_servidores").html(html);

            }
        });
    });
    
    $( "body" ).on( 'click', '#editar_cargo', function () {
       $(this).parent().parent().find("input").attr("readonly",false);
    });
    
    $( "body" ).on( 'click', '#eliminar_cargo', function () {
       $(this).parent().parent().hide('fast');
    });
    
    $( "body" ).on( 'click', '#agregar_cargo', function () {
       $(this).parent().parent().clone().appendTo("#rows_cargos").find("#no_row").html("-");
       $("#rows_cargos tr").last().find("input").val("");
       //$("#rows_cargos tr").last().find("input").attr("readonly",false);
    });
    
    $( "body" ).on( 'click', '#guardar_cargos', function () {
       id_cargo=$("input[name='id_cargo']").map( function() { return $(this).val(); } ).get();
       cargo=$("input[name='cargo']").map( function() { return $(this).val(); } ).get();
       alert(id_cargo+cargo);
    });
    
});