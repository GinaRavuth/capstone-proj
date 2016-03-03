<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/include/functions.php');

$query = $_GET['q'];

$hardware = get_hardware($query);
?>