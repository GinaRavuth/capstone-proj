<?php
// Include file that has the Login object already created so I can access the methods from it
include($_SERVER['DOCUMENT_ROOT'].'/admin/index.php');
// Assign the POST data to a variable
$action = $_POST['action'];
// Compare the POST data and then execute based on evaluation
if ($action == 'logout'){
	$login->doLogout();
}
?>