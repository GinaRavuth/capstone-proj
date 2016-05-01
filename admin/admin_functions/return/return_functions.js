$(document).ready(function() {
	
	// AJAX call to get all the messages and message data
	$.ajax({
		type: 'GET',
		url: 'admin_functions/return/return_functions.php',
		success: function(data){
			var data = JSON.parse(data);
	// Handle empty messages
			if($.isEmptyObject(data)){
				$('#return').html('<div id="content_header"><h2>Approve Returns</h2><p class="inbox">Approve pending returns</p><div class="error"></div><br /><table class="table table-striped table-bordered" id="return_table"></table>');
				
				$('#return_table').append('<tr><td>No pending returns!</td></tr>');
			} else {
	// Draw table with messages from database
				$("#return_table").append('<tr><th>Hardware ID</th><th>Student</th><th>Eagle ID</th><th>Date Checked Out</th><th>Approve</th></tr>');
				$.each(data, function(index,val){
					$("#return_table").append('<tr id="'+data[index]['loaned_hardware_id']+'"><td>'+data[index]['loaned_hardware_id']+'</td><td><a class="inbox" id="'+index+'"href="">'+data[index]['name']+'</td><td>'+data[index]['eagle_id']+'</td><td>'+data[index]['date_out']+'</td><td><span id="'+data[index]['loaned_hardware_id']+'"><button id="delete_button" class="btn btn-default">Approve</button></span></td></tr>');
				});
				remove(data);
			}
		}
	});

	
	// Delete message
	function remove(data){
		$(document).on('click','span', function(e){
			var id = $(this).attr('id');
			var data = {'loaned_hardware_id': id};
			$.ajax({
				type: 'POST',
				url: 'admin_functions/return/return_functions.php',
				data: data,
				success: function(data){
					e.preventDefault();
					location.reload();
				}
			});
		});
	}
});
