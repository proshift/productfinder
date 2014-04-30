<?php
ob_start();
include 'DBclass.php';
$db = new DBclass();

$registerresult = 'error';

if( isset($_POST['register_username'], $_POST['register_department'], $_POST['register_password'], $_POST['register_email'], $_POST['register_firstname'], $_POST['register_lastname']) ) {
	trim($_POST['register_username']);
	trim($_POST['register_department']);
	trim($_POST['register_password']);
	trim($_POST['register_email']);
	trim($_POST['register_firstname']);
	trim($_POST['register_lastname']);
	
	if( !empty($_POST['register_username']) && !empty($_POST['register_department']) && !empty($_POST['register_password']) && !empty($_POST['register_email']) && !empty($_POST['register_firstname']) && !empty($_POST['register_lastname']) ) {
		$username = $_POST['register_username'];
		$department = $_POST['register_department'];
		$password = $_POST['register_password'];
		$email = $_POST['register_email'];
		$firstname = $_POST['register_firstname'];
		$lastname = $_POST['register_lastname'];
		
		$user_id = md5(uniqid(mt_rand(), true));
		$signdate = getdate();
		$signdate = $signdate['year'].'-'.$signdate['mon'].'-'.$signdate['mday'];
		
		$sql = "INSERT INTO users VALUES( '$user_id', '$username', '$department', '$password', '$email', 'member', '$signdate', '$firstname', '$lastname', 0, 0);";
		
		if( $db->query($sql) ) {
			$registerresult = 'successful';
			send_confirmation($email, $user_id);
		}
	}
}
header('Location: '.$_SERVER['HTTP_REFERER'].'?register='.$registerresult);



function send_confirmation($email, $user_id) {
	$to = $email;
	$subject = 'Confirmation Mail';
	$message = $_SERVER['SERVER_NAME'].$_SERVER['PHP_SELF'].'?id='.$user_id;
	$headers = 'From: noreply@contentmanager.com';
	
	if( @mail($to, $subject, $message, $headers) ) {
		
	}
}
?>