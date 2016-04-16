$(document).ready(function() {
	
	// AJAX call to get all the messages and message data
	$.ajax({
		type: 'GET',
		url: 'admin_functions/message/message_functions.php',
		success: function(data){
			var data = JSON.parse(data);
			$.each(data, function(index,val){
				$("#message_table").append('<tr><td>'+data[index]['id']+'<td><a class="inbox" id="'+data[index]['id']+'"href="">'+data[index]['name']+'</a></td><td>'+data[index]['subject']+'</td></tr>');
			});
			click(data);
		}
	});
	
	// Inject HTML to view the message
	function click(data){
		$(document).on('click','a.inbox',function(e){
			e.preventDefault();
			var id = ($(this).attr('id')-1);
			var name = data[id]['name'];
			var email = data[id]['email'];				
			var subject = data[id]['subject'];
			var message = data[id]['message'];
			$('#message').html('<h3 id="name">From: '+name+'</h2><h3 id="email">Email: '+email+'</h2><h3 id="subject">Subject: '+subject+'</h2><hr /><br /><p id="message">'+message+'</p><button type="button" class="btn">Return to Inbox</button>');
			});
			inbox();
	}
	
	// Reload page to reset back to inbox
	function inbox(){
		$(document).on('click','button.btn', function(e){
			location.reload();
		});
	}
});
