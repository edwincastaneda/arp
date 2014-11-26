
jQuery(function( $ ){	
    
    $(document).ready(function () {
         $.ajax({
            type: "POST",
            url: "grupos/php/catalogoTipoGrupo.php",
            success: function (html) {
            $("#tipo_grupo").html(html);
            }
        });
    });
    
    
});