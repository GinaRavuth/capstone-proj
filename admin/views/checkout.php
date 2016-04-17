<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/include/functions.php');

//config
$columnSetting = "front";   

//initialize page variables
$title = ucfirst(basename(__FILE__, '.php'));
$header = 'Approve Checkout Request';
$description = 'Approve checkout request using the table below.';
$columns = format_column_heads(truncate_columns(get_column_heads("hardware"),6));
$types = get_types();

require_once($_SERVER['DOCUMENT_ROOT'].'/include/admin_tables.php');
?>