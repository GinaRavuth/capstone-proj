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
					
    if(isset($_POST['submit'])) {
        $id = strip_tags($_GET['id']);
        $status = returnHardware($id);
        
        if($status===1) {
            header('Location: /splash.php');
        } else {
            $description .= "<h4>Checkout failed, please resubmit</h4>";
        }
    }
} else {
    $description = '<h4>Item not found</h4>';
}

require_once($_SERVER['DOCUMENT_ROOT'].'/include/return_template.php');