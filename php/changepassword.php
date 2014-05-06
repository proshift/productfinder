<?PHP
session_start();
include 'DBclass.php';
$db = new DBclass();

if( isset(  $_POST['oldpassword'], $_POST['newpassword'], $_POST['newpasswordverify'] ) )
{	
	$oldpwd = trim($_POST['oldpassword']);
	$newpwd = trim($_POST['newpassword']);
	$newpwdverify = trim($_POST['newpasswordverify']);
	
	$oldpassword = $_SESSION['users']['password'];
	$userid = $_SESSION['users']['id'];
	
	if( $oldpwd = $oldpassword )
	{
		if( $newpwd = $newpwdverify )
		{
			$sql = "UPDATE users SET password='$newpwd' where id='$userid'";
			if($db->query($sql))
			{
				header('Location: ./managepassword.php?reset=1');

			}
		}
	}
	
}


?>