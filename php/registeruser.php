<?php
ob_start();
include 'DBclass.php';
$db = new DBclass();


if( isset($_POST['username'], $_POST['name'], $_POST['surname'], $_POST['email'], $_POST['password']) ) {
	trim($_POST['username']);
	trim($_POST['password']);
	trim($_POST['email']);
	trim($_POST['name']);
	trim($_POST['surname']);
	
	if( !empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['email']) && !empty($_POST['name']) && !empty($_POST['surname']) ) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		$firstname = $_POST['name'];
		$lastname = $_POST['surname'];
		$aboutme = "Write Somethign About Yourself";
		
		$user_id = md5(uniqid(mt_rand(), true));
	
		$sql = "INSERT INTO users VALUES( '$user_id', '$firstname', '$lastname', '$email', '$username', '$password','$aboutme')";
		
		if( $db->query($sql) ) {
			header('Location: ../index.php');	
		}
	}
}
?>