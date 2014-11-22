jQuery(function( $ ){
	function LimpiarDivs(){ 
	$(".submenu").hide();
	}
	
	LimpiarDivs();
	

	$(".boton").click(function() {
	  $("#"+$(this).attr("rel")).hide();	
	  $("#"+$(this).attr("name")).fadeIn("normal");
	});		
	
	
	$(".home_boton").click(function() {
		LimpiarDivs();
	  $("#"+$(this).attr("name")).fadeIn("normal");
	});	
	
});