<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/include/functions.php'); 
	if(isset($_POST['Submit'])){
		
		$name = $_POST['name'];
		$email = $_POST['email'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];

		$return = message_push($name, $email, $subject, $message);
		$display = $return['display'];
		$status = $return['status'];
		$url = $return['url'];
		$text = $return['text'];
		
} else if(isset($_POST['Checkout'])) {

		$return = splash_text('Checkout');
		$display = $return['display'];
		$status = $return['status'];
		$url = $return['url'];
		$text = $return['text'];
		
} else if (isset($_POST['Return'])){
		
		$return = splash_text('Return');
		$display = $return['display'];
		$status = $return['status'];
		$url = $return['url'];
		$text = $return['text'];
	
} else if (isset($_POST['addHardware'])){
		$return = splash_text('addHardware');
		$display = $return['display'];
		$status = $return['status'];
		$url = $return['url'];
		$text = $return['text'];
}
require_once($_SERVER['DOCUMENT_ROOT'].'/include/splash_template.php');
?>