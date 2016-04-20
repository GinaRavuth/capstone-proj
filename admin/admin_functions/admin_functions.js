// Use AJAX to execute a php function for logout
$(document).ready(function() {

// AJAX to access php object for logout
	$('#logout').click(function(){
		var function_switch = 'logout';
		$.ajax({
			type: 'POST',
			url: 'admin_functions/admin_functions.php',
			data: {function_switch: function_switch}, 
			success: function(data){
				//window.location.reload();
			}
		});
	});
	
// Prevent hardware form from reloading page
	$('#hardware_form').on('submit', function (e) {
		e.preventDefault();
	});
	
	$('#account_form').on('submit', function (e){
		e.preventDefault();
	});
	
// AJAX functions for database interaction on the hardware module
	$('#database_interact').click(function(){
// Variable to determine where the submission is from
		var function_switch = $('#database_interact').val();
// Execute different AJAX calls with different error messaging based on where it's from
		switch(function_switch){
			
			case 'Add Hardware':
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
							$('.error').html('<p>Hardware with ID: <b>'+ id +'</b> has been added to the database!</p>');
							$('#hardware_form')[0].reset();
						}
					});
				}
			break;
			case 'Edit Hardware':
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
							$('.error').html('<p>Hardware with ID: <b>'+ id + '</b> has been edited in the database!</p>');
							$('#hardware_form')[0].reset();
						}
					});
				}
			break;
			case 'Delete Hardware':
			var id = $('#id').val();
			if (!id){
				$('.error').html('<p>You must enter an ID!</p>');
				$('#hardware_form')[0].reset();
			} else {
				var dataString = {function_switch: function_switch,id: id};
				$.ajax({
					type: 'POST',
					url: 'admin_functions/admin_functions.php',
					data: dataString,
					success: function(data){
						$('.error').html('<p>Hardware has been deleted from the database!</p>');
						$('#hardware_form')[0].reset();
						/*setTimeout(function(){
							window.location.reload();
						}, 1500); */
					}
				});
			}
			break;
		case 'Edit Account':
			var user = $('#username').val();
			var email = $('#email').val();
			var password = $('#password').val();
			
			if (!user || !email || !password){
				$('.error').html('<p>You must fill out all form sections!</p>');
				$('#account_form')[0].reset();
			}else {
				var dataString = {function_switch: function_switch, user: user, email:email, password:password};
				$.ajax({
					type: 'POST',
					url: 'admin_functions/admin_functions.php',
					data: dataString,
					success: function(data){
						alert(data);
						$('.error').html('<p>The admin account: <b>'+user+'</b> has been edited in the database!</p>');
						$('#account_form')[0].reset();
					}
				});
			}
			break
		case 'Delete Account':
		
			var user = $('#username').val();
			var email = $('#email').val();
			var password = $('#password').val();
			
			if (!user || !email || !password){
				$('.error').html('<p>You must fill out all form sections!</p>');
				$('#account_form')[0].reset();
			}else {
				var dataString = {function_switch: function_switch, user: user, email:email, password:password};
				$.ajax({
					type: 'POST',
					url: 'admin_functions/admin_functions.php',
					data: dataString,
					success: function(data){
						alert(data);
						$('.error').html('<p>The account: <b>' +user+'</b> has been deleted from the database!</p>');
						$('#account_form')[0].reset();
						setTimeout(function(){
							window.location.reload();
						}, 1500); 
					}
				});
			}
			break;
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
