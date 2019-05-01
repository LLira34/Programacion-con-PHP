$(document).ready(function(){
	$.ajax({
		type: "POST",
		url: "data/core/ocupation_dao.php",
		success: function(response){
			$('.selector-ocupation select').html(response).fadeIn();
		}
	});
});