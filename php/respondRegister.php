<?php
include 'DBclass.php';
$db = new DBclass();
session_start();

if( $_SESSION['user']['department']['privilege_confirm'] == 1 ) {
	if( isset($_GET['username'], $_GET['response']) && !empty($_GET['username']) ) {
		extract($_GET);
		if( $response == 1 ) {
			$sql = 'UPDATE users SET admin_confirmation=true WHERE username=\''.$username.'\';';
		} else {
			$sql = 'DELETE FROM users WHERE username=\''.$username.'\';';
		}
		if( $db->query($sql) ) {
			header('Location: '.$_SERVER['HTTP_REFERER'].'?confirmation=successful');
		} else {
			header('Location: '.$_SERVER['HTTP_REFERER'].'?confirmation=error');
		}
	} else {
		die('Houston. We have a problem.');
	}
} else {
	die('dies');
}
?>