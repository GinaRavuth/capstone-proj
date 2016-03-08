<script>
	//initialize data-tables.js
	$(document).ready(function(){
		$('#dataTable').DataTable();
        categoryChange();
	});
    
    function categoryChange() {
        
        $("#cats").change(function() {
            var categoryOption = $(this).val();
            
            //call the php script
            $.ajax("/include/ajax_queries.php", {
                data: { val: categoryOption },
                success: function(data) {
                    //call line display function
                    $('#tableBody').html("");
                    window.alert(data);
                }
            });
            
        });          

    }
</script>