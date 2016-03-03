<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/include/functions.php');

$columns = get_column_heads();

$hardware = get_hardware();    

$types = get_types();

require_once($_SERVER['DOCUMENT_ROOT'].'/include/template.php');
?>