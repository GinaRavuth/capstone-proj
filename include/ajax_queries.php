<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/include/functions.php');

if(isset($_GET['val'])) {
    $data = $_GET['val'];    
}

echo $data;
?>