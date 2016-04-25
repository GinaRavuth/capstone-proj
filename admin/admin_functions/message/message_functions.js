$(document).ready(function() {
	
	// AJAX call to get all the messages and message data
	$.ajax({
		type: 'GET',
		url: 'admin_functions/message/message_functions.php',
		success: function(data){
			var data = JSON.parse(data);
	// Handle empty messages
			if($.isEmptyObject(data)){
				$('#message').html('<div id="content_header"><h2>Message Inbox</h2><p class="inbox">Check your messages below.</p><div class="error"></div><br /><table class="table table-striped table-bordered" id="message_table"></table>');
				
				$('#message_table').append('<tr><td>Inbox Empty!</td></tr>');
			} else {
	// Draw table with messages from database
				$("#message_table").append('<tr><th>#</th><th>From:</th><th>Subject:</th><th>Action:</th></tr>');
				$.each(data, function(index,val){
					$("#message_table").append('<tr id="row" class="'+data[index]['id']+'"><td>'+(index+1)+'</td><td><a class="inbox" id="'+index+'"href="">'+data[index]['name']+'</a></td><td>'+data[index]['subject']+'</td><td><span id="'+data[index]['id']+'"><button id="delete_button" class="btn btn-default">Delete</button></span></td></tr>');
				});
				remove(data);
				click(data);
			}
		}
	});

	// Inject HTML to view the message content
	function click(data){
		$(document).on('click','a.inbox',function(e){
			e.preventDefault();
			var id = $(this).attr('id');
			var name = data[id]['name'];
			var email = data[id]['email'];				
			var subject = data[id]['subject'];
			var message = data[id]['message'];
			$('#message').html('<h4>From: '+name+'</h4><h4>Email: '+email+'</h4><h4>Subject: '+subject+'</h4><hr /><br /><p>'+message+'</p><br /><br /><button type="button" class="btn btn-default">Return to Inbox</button><br /><br /><span id="'+data[id]['id']+'"><button class="btn btn-default">Delete</button>');
		});
			inbox();
			remove(data);
	}
	
	// Go back to inbox by reloading page
	function inbox(){
		$(document).on('click','button.btn', function(e){
			location.reload();
		});
	}
	
	// Delete message
	function remove(data){
		$(document).on('click','span', function(e){
			var id = $(this).attr('id');
			var data = {'delete': id};
			$.ajax({
				type: 'POST',
				url: 'admin_functions/message/message_functions.php',
				data: data,
				success: function(data){
					e.preventDefault();
					//$('tr').remove();
				}
			});
		});
	}
});
