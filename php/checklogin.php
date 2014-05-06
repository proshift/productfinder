<?php
ob_start();
session_start();
include 'DBclass.php';
$db = new DBclass();


if( isset($_POST['username'], $_POST['password']) ) {
	trim($_POST['username']);
	trim($_POST['password']);

	
	if( !empty($_POST['username']) && !empty($_POST['password']) ) {
		extract($_POST);
		$sql = 'SELECT * FROM users WHERE username=\''.$db->secure($username).'\' AND password=\''.$db->secure($password).'\'';
		if( $db->query($sql) && $db->count()) {
			$user = $db->getRow();
			$_SESSION['users'] = $user;
			/*if( $db->query($sql) && $row = $db->getRow() ) {
				$_SESSION['users'] = $row;
			} else {
				session_destroy();
			}*/
			header('Location: ../login.php');
		} else {
			session_destroy();
			header('Location: ../index.php?error=1');
		}
	}
}


?>