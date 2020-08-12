<?php
if(!empty($_POST["send"])) {
	$name = $_POST["userName"];
	$email = $_POST["userEmail"];
	$mobile = $_POST["userMobile"];
	$dob = $_POST["userDob"];
	$pin = $_POST["userPin"];

	$conn = mysqli_connect("localhost", "php-form", "phpform", "php-form") or die("Connection Error: " . mysqli_error($conn));
	mysqli_query($conn, "INSERT INTO mytblcontact (user_name, user_email, mobile, dob, pin) VALUES ('" . $name. "', '" . $email. "','" . $mobile. "','" . $dob. "','" . $pin. "')");
	$insert_id = mysqli_insert_id($conn);
	//if(!empty($insert_id)) {
	   $message = "Your contact information is saved successfully.";
	   $type = "success";
	//}
}
require_once "contact-view.php";
?>