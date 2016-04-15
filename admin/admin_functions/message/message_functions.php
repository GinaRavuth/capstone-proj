<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/include/functions.php'); 

	$messages = get_message();

	
		foreach($messages as $message){
			//foreach($message as $key => $value){
				
				echo "<tr><td>".$message['name']."</td><td>".$message['subject']."</td></tr>";
			}
		//}
	
		//print_r($messages);
	



?>