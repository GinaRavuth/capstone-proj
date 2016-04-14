$(document).ready(function() {
	
	$('#message_submit').click(function(){
		var name = $('#name').val();
		var email = $('#email').val();
		var subject = $('#subject').val();
		var message = $('#message').val();
		
		$.ajax({
			type: 'POST',
			url: 'message.php',
			data: { name: name, email: email, subject: subject, message: message},
			success: function(data){
				alert(data);
			}
		});
	});
});
