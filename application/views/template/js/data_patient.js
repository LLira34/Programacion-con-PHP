$(document).ready(function(){
	$('#numExpediente').focus()

	$('#numExpediente').on('keyup', function(){
		var numExpediente = $('#numExpediente').val()
		$.ajax({
			type: 'POST',
			url: 'data/core/nursing_dao.php',
			data: {'numExpediente': numExpediente},
			success: function(d){
				$("#nombre").val(d);
			}
		})
		.done(function(result){
			$('#nombre').html(result)
		})
		.fail(function(){
			alert('Hubo un error!')
		})
	})
})