<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/include/functions.php');

//config
$columnSetting = "front";   

//initialize page variables
$title = ucfirst(basename(__FILE__, '.php'));
$header = 'Find Hardware';
$description = 'Filter your search by category, or search for a specific hardware ID, type of hardware, model, or location to best determine if there is hardware available to suit your needs.';
$columns = format_column_heads(truncate_columns(get_column_heads("hardware"),6));
$types = get_types();

require_once($_SERVER['DOCUMENT_ROOT'].'/include/table_template.php');
?>