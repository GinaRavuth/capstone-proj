<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/include/functions.php'); 
	if(isset($_GET)){
		
	$messages = get_messages();
	echo json_encode($messages);
	}
	
	if(isset($_POST['delete'])){
		$delete = $_POST['delete'];
		delete_message($delete);
		
	}
?>