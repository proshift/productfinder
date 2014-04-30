<?php
	if( isset($_GET['register']) ) {
		if( $_GET['register'] === 'successful' ) {
			echo '<script type="text/javascript"> alert("Registration Succesful!"); </script>';
		} else {
			echo '<script type="text/javascript"> alert("Registration Error!"); </script>';
		}
	}
?>
<script src="../js/jquery-1.7.2.min.js"></script>
<script src="../js/jquery.validate.min.js"></script>
<script type="text/javascript">
$( function() {
	$("#registerform").submit( function() {
		if( $("#registerform input[name='register_password']").val() == $("#registerform input[name='register_passagain']").val() ) {
			return true;
		} else {
			$(".passwordfield").after("  Passwords don't match.");
			return false;
		}
	}).validate();
});
</script>
<style type="text/css">
.passerror { color:red; }
</style>
<body style="background-image:url(../images/background.jpg)">
 <div id="outer" style=" width:1200px; margin:0 auto; background-color:#FFF;  border-radius: 15px; alignment-adjust:central;">
    	
       
        
        <div id="wrapper" style=" width:900px; margin:0 auto; background-color:#036; border:1px solid grey; text-align:center;">
        
<form action="registeruser.php" method="post" name="registerform" id="registerform">
<div id="registerform" style="padding:5;">
<div id="tableheading" align="center" style="text-align:center; font-size:24px; font-weight:bold; color:#FFFFFF; background-color:#000; border-radius:10px;"><h1>Registration Form</h1></div>
	<table align="center" border="1" cellspacing="0">
       <tr>
          <td><label for="register_username" style="color:#FFF">Username:</label> </td><td><input type="text" name="register_username" id="register_username"class="required"></td>
       </tr>
       <tr>
          <td><label for="register_department" style="color:#FFF">Department:</label> </td><td><input type="text" name="register_department" id="register_department" class="required"></td>
       </tr>
       <tr>
          <td><label for="register_password" style="color:#FFF">Password:</label> </td><td><input type="password" name="register_password" class="passwordfield required" id="register_password""></td>
       </tr>
       <tr>
          <td><label for="register_passagain" style="color:#FFF">Password again:</label> </td><td><input type="password" name="register_passagain" class="passwordfield required" id="register_passagain"></td>
       </tr>
       <tr>
          <td><label for="register_email" style="color:#FFF">Email:</label> </td><td><input type="text" name="register_email" id="register_email" class="required email"></td>
       </tr>
       <tr>
          <td><label for="register_firstname" style="color:#FFF">First Name:</label> </td><td><input type="text" name="register_firstname" id="register_firstname" class="required"></td>
       </tr>
       <tr>
          <td><label for="register_lastname" style="color:#FFF">Last Name:</label> </td><td><input type="text" name="register_lastname" id="register_lastname" class="required"></td>
       </tr>
       <tr>
          <td colspan="2" align="center"><input type="submit" value="Submit"></td>
       </tr>
    </table>
</div>
</div>
</div>
</body>
</form>