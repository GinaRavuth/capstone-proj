<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/include/functions.php');

//config
$columnSetting = "front";   

//initialize page variables
$title = ucfirst(basename(__FILE__, '.php'));
$header = 'Find Hardware';
$description = 'Filter your search by category, or search for a specific hardware ID, type of hardware, model, or location to best determine if there is hardware available to suit your needs.';
$columns = get_column_heads($columnSetting,"hardware");
$types = get_types();

require_once($_SERVER['DOCUMENT_ROOT'].'/include/tabletemplate.php');
?>