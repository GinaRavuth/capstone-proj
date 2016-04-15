<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/include/functions.php'); 

	$messages = get_message();
	foreach($messages as $message){	
		echo '<tr><td><a href="index.php?view=inbox">'.$message['name'].'</a></td><td>'.$message['subject'].'</td></tr>';
	}
		
?>