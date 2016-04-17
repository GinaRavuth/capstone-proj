<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/include/functions.php');

//config
$columnSetting = "front";   

//initialize page variables
$title = ucfirst(basename(__FILE__, '.php'));
$header = 'Return Request';
$description = 'Please find item in system that you checked out. After, request to return so administrator can approve your item return.';
$columns = format_column_heads(truncate_columns(get_column_heads("loaned_hardware"),4));
$types = get_types();

require_once($_SERVER['DOCUMENT_ROOT'].'/include/table_template.php');
?>