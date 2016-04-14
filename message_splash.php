<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/include/functions.php'); 

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$return = message_push($name, $email, $subject, $message);
$display = $return['display'];
$status = $return['status'];
$url = $return['url'];
$text = $return['text'];

require_once($_SERVER['DOCUMENT_ROOT'].'/include/splash_template.php');
?>
