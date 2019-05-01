$(document).ready(function(){
	$.ajax({
		type: "POST",
		url: "data/core/locality_dao.php",
		success: function(response){
			$('.selector-locality select').html(response).fadeIn();
		}
	});
});