<script>
$(document).ready(function() {
	var table = $('#dataTable').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": "/include/ajax_queries.php"
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