<script>

	//initialize data-tables.js
	$(document).ready(function(){
		table = $('#dataTable').DataTable({
			'ajax' : '/include/ajax_queries.php'			
		});
	});
    
    function categoryChange() {
        
        $("#cats").change(function() {
            var categoryOption = $(this).val();
            
            //call the php script
            $.ajax("/include/ajax_queries.php", {
                data: { val: categoryOption },
                success: function(data) {
                    window.alert(data);
                }
            });
            
        });          

    }
</script>