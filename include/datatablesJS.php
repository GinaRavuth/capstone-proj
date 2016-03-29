<script>
$(document).ready(function() {
	var url = window.location.pathname;
	var fileName = url.substring(url.lastIndexOf('/')+1);
	var table = $('#dataTable').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": {
			'type': 'POST',
			'url': '/include/datatablesAJAX.php',
			'data': {
				URL: fileName
			}
		}			
		});
	
    function categoryChange() {
        $("#cats").change(function() {
            var categoryOption = $(this).val();
			table.column(1).search(categoryOption).draw();	
        });          
    }
	
	categoryChange();
});
</script>