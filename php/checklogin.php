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
		$sql = 'SELECT * FROM users WHERE username=\''.$db->secure($username).'\' AND password=\''.$db->secure($password).'\' AND email_confirmation=true AND admin_confirmation=true;';
		if( $db->query($sql) && $db->count()) {
			$user = $db->getRow();
			$_SESSION['user'] = $user;
			$sql = 'SELECT * FROM department WHERE name=\''.$user['departmentname'].'\'';
			if( $db->query($sql) && $row = $db->getRow() ) {
				$_SESSION['user']['department'] = $row;
			} else {
				session_destroy();
			}
			header('Location: ../userinterface.php');
		} else {
			
			header('Location: ../php/login.php?error=1');
		}
	}
}
?>