<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/include/functions.php'); 
	$messages = get_messages();
	echo json_encode($messages);
?>