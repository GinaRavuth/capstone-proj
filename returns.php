<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/include/functions.php');

//config
$columnSetting = "front";   

//initialize page variables
$title = ucfirst(basename(__FILE__, '.php'));
$header = 'Return Request';
$description = 'Please find item in system that you checked out. After, request to return so administrator can approve your item return.';
$columns = get_column_heads($columnSetting,"loaned_hardware");
$types = get_types();
$hardware = get_hardware(); 

require_once($_SERVER['DOCUMENT_ROOT'].'/include/tabletemplate.php');
?>