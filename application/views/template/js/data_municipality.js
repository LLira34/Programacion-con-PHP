$(document).ready(function(){
	$.ajax({
		type: "POST",
		url: "data/core/municipality_dao.php",
		success: function(response){
			$('.selector-municipality select').html(response).fadeIn();
		}
	});
});