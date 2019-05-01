function calculateIMC(){
	var form = document.getElementById("form");  

	var talla = + form.talla.value;
	var masa = + form.masa.value;
	var imc = masa / (talla * talla);

	form.imc.value = imc.toFixed(2);
}