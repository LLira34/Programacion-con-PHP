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

function validateLogin() {
	// objetc
	var user = document.getElementById('user_txt');
	var pass = document.getElementById('password_txt');

	// value
	var userValue = document.getElementById('user_txt').value.trim();
	var passValue = document.getElementById('password_txt').value.trim();
	
	//--------------validate null--------------------
	if (userValue=='') {
		newAlert("Escribe tu usuario");
		user.focus();
		return false;
	}
	
	if (passValue=='') {
		newAlert("Escribe tu contraseña");
		pass.focus();
		return false;
	}
	
	return true;
	
} // End function