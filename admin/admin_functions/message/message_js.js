$(document).ready(function() {
	$.ajax({
		type: 'GET',
		url: 'admin_functions/message/message_functions.php',
		success: function(data){
			//alert(data);
			$('#message_table').append(data);
		}
	});
});
