<?php
if (isset($_POST['submit']) && isset($_POST['FirstName']) && isset($_POST['LastName']) && isset($_POST['Email']) && isset($_POST['PhoneNumber']) && isset($_POST['PolicyNumber']) && isset($_POST['Comments']) ){

$firstname=$_POST["FirstName"];
$lastname=$_POST["LastName"];
$email=$_POST["Email"];
$phonenumber=$_POST["PhoneNumber"];
$policynumber=$_POST["PolicyNumber"];
$comments=$_POST["Comments"];

$to = "ctroast@affiliatedoutsourcing.com";
$subject = "Received Mail From '$firstname $lastname'";
$body =  "Full Name = " . $firstname . " " . $lastname . "\r\n" . "Email = " .$email . "\r\n". "Phone Number = " .$phonenumber . "\r\n" . "Policy Number = " .$policynumber . "\r\n".  "Comments = " .$comments . "\r\n";
$headers="MIME-VERSION: 1.0" . "\r\n";
$headers .="Content-type: text\html;charset=UTF-8". "\r\n";
$headers .= "From: <$email>\r\n";

$send=mail($to,$subject,$body,$headers);

	if($send)
	{
		header("Location: thankyou.html");
	}else{
		header("Location: error.html");
	}
}
?>