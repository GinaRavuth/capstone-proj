// Use AJAX to execute a php function for logout
$(document).ready(function() {
	var act = 'logout';
	$('#logout').click(function(){

		$.ajax({
			type: 'POST',
			url: 'admin_functions/admin_functions.php',
			data: "action=logout", 
			success: function(data){
				window.location.reload();
			}
		
	});
});
});
