$(document).ready(function() {

	$("#login").bind("submit", function(){

		$.ajax({
			type:$(this).attr("method"),
			url:$(this).attr("action"),
			data: $(this).serialize(),
			success: function(response){
				if (response.estado == "true") {
					$("body").overhang({
				  		type: "success",
				  		message: "Acceso correcto, lo estamos redireccionando...", 
				  		callback: function(){
				  			window.location.href = "?controller=user&&action=recepcion";
				  		}
					});
				}else{
					$("body").overhang({
				  		type: "error",
				  		message: "Acceso denegado, clave o contraseña incorrectos!"
					});
				}
			},
			error: function(){
				$("body").overhang({
				  type: "error",
				  message: "Acceso denegado, clave o contraseña incorrectos!"
				});
			}
		});

		return false;
	});
});