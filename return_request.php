<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/include/functions.php');

//config
$columnSetting = 'front';   

//initialize page variables
$title = str_replace('_',' ',ucfirst(basename(__FILE__, '.php')));
$header = 'Request Hardware Return';
$description_title = 'Return Information';

$id = $_GET['id'];
$eID = $_GET['eID'];
$name = $_GET['name']; 
$date = $_GET['date'];


if(checkIfExists($_GET['id'],'hardware') === 1){
    $description = "<p>Name: $name</p>
					<p>Eagle ID: $eID</p>
					<p>Hardware Id: $id</p>
					<p>Checkout Date: $date</p>
                    ";
} else {
    $description = '<p>Item not found</p>';
}

if(isset($_POST['submit']) && checkIfExists($_GET['id'],'hardware') === 1) {
    //do all the query stuff....
    $name = $_POST['name'];
    $eId = $_POST['eagleid'];
    $reason = $_POST['message'];
   // $status = moveToLoaned($id, $name, $eId, $reason);
    
    if($status===1) {
        header('Location: /checked.html');
    } else {
        $description = "<h4>Checkout failed</h4>";
    }
}

require_once($_SERVER['DOCUMENT_ROOT'].'/include/return_template.php');