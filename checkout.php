<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/include/functions.php');

//config
$columnSetting = 'front';   

//initialize page variables
$title = ucfirst(basename(__FILE__, '.php'));
$header = 'Checkout Hardware';

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
    $description = '<p>Item not found</p>';
}

if(isset($_POST['submit']) && checkIfExists($_GET['id'],'hardware') === 1) {
    //do all the query stuff....
    $name = $_POST['name'];
    $eId = $_POST['eagleid'];
    $reason = $_POST['message'];
    $status = moveToLoaned($id, $name, $eId, $reason);
    
    $description .= "<p>$status</p>";
}

require_once($_SERVER['DOCUMENT_ROOT'].'/include/checkoutreturntemplate.php');
?>