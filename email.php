<?php
if (isset($_POST['submit']) && isset($_POST['Name']) && isset($_POST['Number']) ){
	
$quote=$_POST["SelectedQuoteType"];
$number=$_POST["Number"];
$name=$_POST["Name"];

$to = "ctroast@affiliatedoutsourcing.com";
$subject = "Received Mail From '$name'";
$body =  "Full Name = " . $name . "\r\n" . "Number = " .$number . "\r\n". "Type = " . $quote . "\r\n" ;
$headers="MIME-VERSION: 1.0" . "\r\n";
$headers .="Content-type: text\html;charset=UTF-8". "\r\n";
$headers .= "From: <$name>\r\n";

$send=mail($to,$subject,$body,$headers);

	if($send)
	{
		header("Location: thankyou.html");
	}else{
		header("Location: error.html");
	}
}
?>