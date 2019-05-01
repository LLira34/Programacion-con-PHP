// Style for alerts
function newAlert(msg) {
	$("#txtMsg").text(msg);
	$("#msg").slideDown();
	setTimeout(function(){
			$("#msg").slideUp();
		}, 
		2000
	);
}

function validatePaciente() {
	// objetc
	var nombre = document.getElementById('nombre');
	var fecha_nac = document.getElementById('fecha_nac');
	var edad = document.getElementById('edad');
	var genero = document.getElementById('genero');

	// value
	var nombreValue = document.getElementById('nombre').value.trim();
	var fecha_nacValue = document.getElementById('fecha_nac').value.trim();
	var edadValue = document.getElementById('edad').value.trim();
	var generoValue = document.getElementById('genero').value.trim();
	
	//--------------validate null--------------------
	if (nombreValue=='') {
		newAlert("Escriba nombre completo");
		nombre.focus();
		return false;
	}
	
	if (fecha_nacValue=='') {
		newAlert("seleccione fecha de nacimiento");
		fecha_nac.focus();
		return false;
	}
	
	if (edadValue=='') {
		newAlert("Escriba edad");
		edad.focus();
		return false;
	}
	
	if (generoValue=='') {
		newAlert("Seleccione una opcion");
		genero.focus();
		return false;
	}
	
	return true;
}

// Function for clear
function remove(){
	document.getElementById("nombre").value = "";
	document.getElementById("fecha_nac").value = "";
	document.getElementById("edad").value = "";
	document.getElementById("genero").value = "";
} // End function