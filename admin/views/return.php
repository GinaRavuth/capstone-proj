<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/include/functions.php');

//config
$columnSetting = "front";   

//initialize page variables
$title = ucfirst(basename(__FILE__, '.php'));
$header = 'Approve Returns';
$description = 'Approve return request using the table below.';
$columns = get_column_heads($columnSetting,"hardware");
$types = get_types();

require_once($_SERVER['DOCUMENT_ROOT'].'/include/admin_tables.php');
?>