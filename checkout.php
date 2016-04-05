<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/include/functions.php');

//config
$columnSetting = 'front';   

//initialize page variables
$title = ucfirst(basename(__FILE__, '.php'));
$header = 'Checkout Hardware';

if(checkIfExists($_GET['id'],'hardware') === 1){
    $description = '<p>Hardware Id: '.$_GET['id'].'</p>
                    <p>Type: '.$_GET['type'].'</p>
                    <p>Status: '.$_GET['status'].'</p>
                    <p>Model: '.$_GET['model'].'</p>
                    <p>Notes: '.$_GET['notes'].'</p>
                    <p>Location: '.$_GET['location'].'</p>';
} else {
    $description = '<p>Item not found</p>';
}

if(isset($_POST['submit']) && checkIfExists($_GET['id'],'hardware') === 1) {
    //do all the query stuff....
    $description = 'FORM SUBMITTED';
    moveToLoaned($_GET['id']);
}

require_once($_SERVER['DOCUMENT_ROOT'].'/include/checkoutreturntemplate.php');
?>