<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/include/functions.php'); 
// Include file that has the Login object already created so I can access the methods from it
include($_SERVER['DOCUMENT_ROOT'].'/admin/index.php');
// Assign the POST data to a variable
$action = $_POST['action'];
// Compare the POST data and then execute based on evaluation
if ($action == 'logout'){
	$login->doLogout();	
}

// Logic structure for interacting with hardware table in database
if($_POST['function_switch'] == 'Add Hardware'){
	
$id = $_POST['id'];
$type = $_POST['type'];
$model = $_POST['model'];
$status = $_POST['status'];
$description = $_POST['description'];
$location = $_POST['location'];

addHardware($id, $type, $model, $status, $description, $location);

} else if ($_POST['function_switch'] == 'Edit Hardware'){
	
$id = $_POST['id'];
$type = $_POST['type'];
$model = $_POST['model'];
$status = $_POST['status'];
$description = $_POST['description'];
$location = $_POST['location'];

} else if ($_POST['function_switch'] == 'Delete Hardware'){
	
}
?>
