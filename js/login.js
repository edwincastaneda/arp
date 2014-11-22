jQuery.noConflict();
jQuery(function( $ ){
   $("#login").click(function(){
		username=$("#user_name").val();
        password=$("#password").val();
         $.ajax({
            type: "POST",
           	url: "php/login.php",
            data: "user="+username+"&pwd="+password,
            success: function(html){
			
			  if(html=='true')
              {	
			  	$.cookie('usuario',username);
                $("#login_form").hide();
				$("#saludo").html("<span>Hola!  <b>"+username+"</b>   &#124;   <a class='btn btn-success btn-sm' id='logout'><span class='glyphicon glyphicon-off'></span></a></span>");
				$("#menu").fadeIn('normal');
              }
              else
              {
				$("#alerta").removeClass('label-info');
				$("#alerta").addClass('label-danger');
                $("#alerta").html("&iexcl;Usuario o Contrase&ntilde;a Invalida!");
              }
            },
            beforeSend:function()
			{
				$("#alerta").removeClass('label-danger');
				$("#alerta").addClass('label-info');
                $("#alerta").html("<i class='fa fa-refresh fa-spin'></i> Iniciando Sesi&oacute;n...")
            }
        });
         return false;
    });
   
   $( "body" ).on( 'click', '#logout', function () {
		$.removeCookie('usuario');	
		location.reload();		
	});
});
