<?php
if(!empty($_POST["send"])) {
	$name = $_POST["userName"];
	$email = $_POST["userEmail"];
	$mobile_number = $_POST["mobile_number"];
	$date_of_birth = $_POST["dob"];
	$pin_code = $_post ["pin_code"];

	$toEmail = "gauravpersonal1989@gmail.com";
	$mailHeaders = "From: " . $name . "<". $email .">\r\n";
	if(mail($toEmail, $mobile_number, $date_of_birth, $pin_code, $mailHeaders)) {
	    $message = "Your contact information is received successfully.";
	    $type = "success";
	}
}
require_once "contact-view.php";
?>