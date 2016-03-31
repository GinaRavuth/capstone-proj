<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/include/functions.php');

//config
$columnSetting = "front";   

//initialize page variables
$title = ucfirst(basename(__FILE__, '.php'));
$header = 'Checkout Hardware';
$description = '<p>Hardware ID: '.$_GET['id'].'</p>
                <p>Type: '.$_GET['type'].'</p>
                <p>Status: '.$_GET['status'].'</p>
                <p>Model: '.$_GET['model'].'</p>
                <p>Notes: '.$_GET['notes'].'</p>
                <p>Location: '.$_GET['location'].'</p>';

require_once($_SERVER['DOCUMENT_ROOT'].'/include/checkoutreturntemplate.php');
?>