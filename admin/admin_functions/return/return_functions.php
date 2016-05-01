<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/include/functions.php');
	if(isset($_POST['loaned_hardware_id'])){
		$id = $_POST['loaned_hardware_id'];
		approveCheckout($id);
	}
	
	if(isset($_GET)){
		
	$hardware = getReturns();
	echo json_encode($hardware);
	}
?>