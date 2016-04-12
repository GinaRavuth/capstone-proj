$(document).ready(function() {
	
	$('#message_submit').click(function(){
		var name = $('#name').val();
		var email = $('#email').val();
		var subject = $('#subject').val();
		var message = $('#message').val();
		var dataString = 'name='+name+'&email='+email+'&subject='+subject+'&message='+message;
		$.ajax({
			type: 'POST',
			url: 'message/message.php',
			data: dataString,
			success: function(data){
				alert(data);
			}
		});
	});
});