<?php
include 'DBclass.php';
$db = new DBclass();	
	

	if( isset($_POST['contactname'], $_POST['contactmessage'], $_POST['contactemail']) ) {
		trim($_POST['contactname']);
		trim($_POST['contactmessage']);
		trim($_POST['contactemail']);
		
		extract($_POST);
		
		$ToEmail = 'pro_shift@live.co.uk';
    	$EmailSubject = $_POST['contactsubject'];
    	$mailheader = "From: ".$_POST["contactemail"]."\r\n";
    	$mailheader .= "Reply-To: ".$_POST["contactemail"]."\r\n";
    	$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n";
    	$MESSAGE_BODY = "Name: ".$_POST["contactname"]."";
    	$MESSAGE_BODY .= "Email: ".$_POST["contactemail"]."";
    	$MESSAGE_BODY .= "Message: ".nl2br($_POST["contactmessage"])."";
    	mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure"); 
		
		
	}
?>
