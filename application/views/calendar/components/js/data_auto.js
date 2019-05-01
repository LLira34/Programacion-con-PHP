$(document).ready(function(){
	$('#title').focus()

	$('#title').on('keyup', function(){
		var title = $('#title').val()
		$.ajax({
			type: 'POST',
			url: '../../data/core/patient_dao.php',
			data: {'title': title},
			success: function(d){
				$("#body").val(d);
			}
		})
		.done(function(result){
			$('#body').html(result)
		})
		.fail(function(){
			alert('Hubo un error!')
		})
	})
})