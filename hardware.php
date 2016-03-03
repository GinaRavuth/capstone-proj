<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/include/functions.php');

$columns = get_column_heads();

if(isset($_GET['cat'])) {
    $cat = $_GET['cat'];
    $hardware = get_hardware($cat);    
} else {
    $cat = NULL;
    $hardware = get_hardware($cat);    
}

$types = get_types();

require_once($_SERVER['DOCUMENT_ROOT'].'/include/template.php');
?>