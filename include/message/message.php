<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/include/functions.php'); 


$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

return $email;

message($name, $email, $subject,$message);


?>