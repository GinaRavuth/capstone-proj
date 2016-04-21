<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/include/functions.php');

//config
$columnSetting = 'front';   

//initialize page variables
$title = str_replace('_',' ',ucfirst(basename(__FILE__, '.php')));
$header = 'Request Hardware Checkout';
$description_title = 'Item Description';

$id = $_GET['id'];
$type = $_GET['type'];
$status = $_GET['status'];
$model = $_GET['model'];
$notes = $_GET['notes'];
$location = $_GET['location'];

if(checkIfExists($_GET['id'],'hardware') === 1){
    $description = "<p>Hardware Id: $id</p>
                    <p>Type: $type</p>
                    <p>Status: $status</p>
                    <p>Model: $model</p>
                    <p>Notes: $notes</p>
                    <p>Location: $location</p>";   
} else {
    $description = '<h4>Item not found</h4>';
}

require_once($_SERVER['DOCUMENT_ROOT'].'/include/request_template.php');
?>