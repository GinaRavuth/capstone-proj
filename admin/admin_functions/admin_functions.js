// Use AJAX to execute a php function for logout
$(document).ready(function() {
	$('#logout').click(function(){
		$.ajax({
			type: 'POST',
			url: 'admin_functions/admin_functions.php',
			data: "action=logout", 
			success: function(data){
				//window.location.reload();
			}
		});
	});

	$('#submit_hardware').click(function(){
		var id = $('#id').val();
		var type = $('#type').val();
		var model = $('#model').val();
		var status = $('#status').val(); 
		var description = $('#description').val();
		var location = $('#location').val();
		var dataString = {id: id, type: type, model: model, status: status, description: description, location: location};
		$.ajax({
			type: 'POST',
			url: 'admin_functions/admin_functions.php',
			data: dataString,
			success: function(data){
			}
		});
	});
	
});
