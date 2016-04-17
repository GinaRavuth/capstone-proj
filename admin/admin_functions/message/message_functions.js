$(document).ready(function() {
	
	// AJAX call to get all the messages and message data
	$.ajax({
		type: 'GET',
		url: 'admin_functions/message/message_functions.php',
		success: function(data){
			var data = JSON.parse(data);
	// Handle empty messages
			if($.isEmptyObject(data)){
				$('#message').html('<p>No messages!</p>');
			} else {
			$.each(data, function(index,val){
				$("#message_table").append('<tr id="row" class="'+data[index]['id']+'"><td>'+(index+1)+'</td><td><a class="inbox" id="'+index+'"href="">'+data[index]['name']+'</a></td><td>'+data[index]['subject']+'</td><td><span id="'+data[index]['id']+'"><button>Delete</button></span></td></tr>');
			});
			remove(data);
			click(data);
		}
		}
	});

	// Inject HTML to view the message
	function click(data){
		$(document).on('click','a.inbox',function(e){
			e.preventDefault();
			var id = ($(this).attr('id'));
			var name = data[id]['name'];
			var email = data[id]['email'];				
			var subject = data[id]['subject'];
			var message = data[id]['message'];
			$('#message').html('<h4><b>From:</b> '+name+'</h4><h4><b>Email:</b> '+email+'</h4><h4><b>Subject:</b> '+subject+'</h4><hr /><br /><p>'+message+'</p><br /><br /><button type="button" class="btn">Return to Inbox</button>');
			});
			inbox();
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
					$('.error').append('<p>Message deleted! Reloading...</p>');
					$('tr').remove();
					//alert(("."+id));
					setTimeout(function(){
						location.reload();
					}, 1300);
					
				}
			});
		});
	}
});
