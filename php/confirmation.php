<?php
include 'DBclass.php';
$db = new DBclass();

if( $_GET['id'] ) {
	trim($_GET['id']);
	if( !empty($_GET['id']) ) {
		$id = $_GET['id'];
		if( $db->query('UPDATE users SET email_confirmation=true WHERE user_id=\''.$id.'\';') ) {
			
		}
	}
}
?>
<script type="text/javascript">
	function respondRegister(username, response) {
		$.ajax({
			url : "respondRegister.php",
			type : "post",
			data : { "username" : username,
					 "response" : response
			},
			success : function(data, textStatus, jqXHR) {
				if( data === "successful" ) {
					window.location = <?php echo $_SERVER['PHP_SELF']; ?>
				} else {
					
				}
			}
		});
	}
</script>