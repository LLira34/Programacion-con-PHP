$(document).ready(function(){
	$.ajax({
		type: "POST",
		url: "../../data/core/therapist_dao.php",
		success: function(response){
			$('.selector-therapist select').html(response).fadeIn();
		}
	});
});