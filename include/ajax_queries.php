<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/include/functions.php');

if(isset($_GET['val'])) {
    $data = strtolower($_GET['val']);    
} else {
    $data = NULL;
}

$hardware = json_encode(get_hardware($data));

echo $hardware;
?>