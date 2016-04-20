// Use AJAX to execute a php function for logout
$(document).ready(function() {

	// AJAX to access php object for logout
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
	
	// Prevent form from reloading page
	$('form').on('submit', function (e) {
		e.preventDefault();
	});
	// AJAX functions for database interaction on the hardware module
	$('#database_interact').click(function(){
	// Variable to determine where the submission is from
		var function_switch = $('#database_interact').val();
	// Execute different AJAX calls with different error messaging based on where it's from
		if (function_switch == 'Add Hardware'){
			var id = $('#id').val();
			var type = $('#type').val();
			var model = $('#model').val();
			var status = $('#status').val(); 
			var description = $('#description').val();
			var location = $('#location').val();
			
			if (!id || !type){
				$('.error').html('<p>You must enter an ID and a type!</p>');
				$('#hardware_form')[0].reset();
			} else {
				var dataString = {function_switch: function_switch, id: id, type: type, model: model, status: status, description: description, location: location};
				$.ajax({
					type: 'POST',
					url: 'admin_functions/admin_functions.php',
					data: dataString,
					success: function(data){
						$('.error').html('<p>Hardware has been added to the database!</p>');
						$('#hardware_form')[0].reset();
						setTimeout(function(){
							window.location.reload();
						}, 1500); 
					}
				});
			}
		} else if (function_switch == 'Edit Hardware'){
			var id = $('#id').val();
			var type = $('#type').val();
			var model = $('#model').val();
			var status = $('#status').val(); 
			var description = $('#description').val();
			var location = $('#location').val();

			if (!id){
				$('.error').html('<p>You must enter an ID!</p>');
				$('#hardware_form')[0].reset();
			} else {
				var dataString = {function_switch: function_switch, id: id, type: type, model: model, status: status, description: description, location: location};
				$.ajax({
					type: 'POST',
					url: 'admin_functions/admin_functions.php',
					data: dataString,
					success: function(data){
						$('.error').html('<p>Hardware has been edited in the database!</p>');
						setTimeout(function(){
							window.location.reload();
						}, 1500); 
					}
				});
			}
		} else if (function_switch == 'Delete Hardware'){
			var id = $('#id').val();
			if (!id){
				$('.error').html('<p>You must enter an ID!</p>');
				$('#hardware_form')[0].reset();
			} else {
				var dataString = {id: id};
				$.ajax({
					type: 'POST',
					url: 'admin_functions/admin_functions.php',
					data: dataString,
					success: function(data){
						$('.error').html('<p>Hardware has been deleted from the database!</p>');
						$('#hardware_form')[0].reset();
						setTimeout(function(){
							window.location.reload();
						}, 1500); 
					}
				});
			}
		}
	});
	
	// Menu dropdown
	$('li').click(function(){
		$("#drop").accordion({collapsible : true, active : false});
		$('.collapse').collapse();
		$("#drop2").accordion({collapsible : true, active : false});
		$('.collapse').collapse();
	});
});
