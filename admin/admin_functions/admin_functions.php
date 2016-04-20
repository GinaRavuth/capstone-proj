<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/include/functions.php'); 
// Include file that has the Login object already created so I can access the methods from it
include($_SERVER['DOCUMENT_ROOT'].'/admin/index.php');

// Compare the POST data and then execute based on evaluation
if ($_POST['function_switch'] == 'logout'){
	$login->doLogout();	
} else if($_POST['function_switch'] == 'Add Hardware'){
	
$id = $_POST['id'];
$type = $_POST['type'];
$model = $_POST['model'];
$status = $_POST['status'];
$description = $_POST['description'];
$location = $_POST['location'];

add_hardware($id, $type, $model, $status, $description, $location);

} else if ($_POST['function_switch'] == 'Edit Hardware'){
echo 'working';
$id = $_POST['id'];
$type = $_POST['type'];
$model = $_POST['model'];
$status = $_POST['status'];
$description = $_POST['description'];
$location = $_POST['location'];

edit_hardware($id, $type, $model, $status, $description, $location);

} else if ($_POST['function_switch'] == 'Delete Hardware'){

$id = $_POST['id'];
delete_hardware($id);
}
?>
