<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/include/functions.php'); 

	$messages = get_message();
	foreach($messages as $message){	
		echo "<tr><td>".$message['name']."</td><td>".$message['subject']."</td></tr>";
	}
		
?>