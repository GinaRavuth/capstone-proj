<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/include/functions.php');

$hardware = get_hardware();

$columns = get_column_heads();

$types = get_types();

require_once($_SERVER['DOCUMENT_ROOT'].'/include/template.php');
?>