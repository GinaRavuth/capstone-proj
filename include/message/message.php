<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/include/functions.php'); 


$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

echo $name;
echo $email;
echo $subject;
echo $message;

message($name, $email, $subject,$message);


?>
