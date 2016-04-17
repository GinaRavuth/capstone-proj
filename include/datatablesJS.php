<script>
$(document).ready(function() {
	
	//get url for use in tables
	var url = window.location.pathname;
	var fileName = url.substring(url.lastIndexOf('/')+1);
	
	//set up table
	var table = $('#dataTable').DataTable( {
		"responsive": true,
		"processing": true,
		"ajax": {
			'type': 'POST',
			'url': '/include/ajax/frontendAjax.php',
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