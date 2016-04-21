<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/include/functions.php'); 


// Compare the POST data and then execute based on evaluation
switch($_POST['function_switch']){
	case 'logout':
// Include file that has the Login object already created so I can access the methods from it
		include($_SERVER['DOCUMENT_ROOT'].'/admin/index.php');
		$login->doLogout();	
		break;
	case 'Add Hardware':
	
		$id = $_POST['id'];
		$type = $_POST['type'];
		$model = $_POST['model'];
		$status = $_POST['status'];
		$description = $_POST['description'];
		$location = $_POST['location'];
		
		add_hardware($id, $type, $model, $status, $description, $location);
		
		break;
	case 'Edit Hardware':
	
		$id = $_POST['id'];
		$type = $_POST['type'];
		$model = $_POST['model'];
		$status = $_POST['status'];
		$description = $_POST['description'];
		$location = $_POST['location'];
		
		
		edit_hardware($id, $type, $model, $status, $description, $location);
		
		break;
	case 'Delete Hardware':
	
		$id = $_POST['id'];
		delete_hardware($id);
		break;
	case 'Edit Account':
		$user = $_POST['user'];
		$email = $_POST['email'];
		$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
		
		edit_account($user,$email,$password);
		
		break;
	case 'Delete Account':
		
		$user = $_POST['user'];
		$email = $_POST['email'];
		$hash = get_hash($user,$email);
		

		if(password_verify($_POST['password'], $hash)){
			delete_account($user,$email);
		}
		break;
}

