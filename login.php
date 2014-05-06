<!DOCTYPE html>
<html lang="en">
  <head>
	   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
       <title>Easy Product Search, Easy Life</title>
       <link rel="stylesheet" href="css/style.css"/>
       <link rel="stylesheet" href="css/search.css"/>
       <link rel="stylesheet" href="css/loginform.css"/>
       <link rel="stylesheet" href="css/contactform.css"/>
       <link rel="stylesheet" href="css/tabs.css" />
	   <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
       <link href='http://fonts.googleapis.com/css?family=Wellfleet' rel='stylesheet' type='text/css'>
	   <link href='http://fonts.googleapis.com/css?family=Wellfleet' rel='stylesheet' type='text/css'>
	   <link href='http://fonts.googleapis.com/css?family=Arvo:400,700,400italic,700italic' rel='stylesheet' type='text/css'>	
	   <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
	   <link href='http://fonts.googleapis.com/css?family=Goudy+Bookletter+1911' rel='stylesheet' type='text/css'>
	<script>
   
<!----- JQUERY FOR SLIDING NAVIGATION --->   
$(document).ready(function() {
  $('a[href*=#]').each(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
    && location.hostname == this.hostname
    && this.hash.replace(/#/,'') ) {
      var $targetId = $(this.hash), $targetAnchor = $('[name=' + this.hash.slice(1) +']');
      var $target = $targetId.length ? $targetId : $targetAnchor.length ? $targetAnchor : false;
       if ($target) {
         var targetOffset = $target.offset().top;

<!----- JQUERY CLICK FUNCTION REMOVE AND ADD CLASS "ACTIVE" + SCROLL TO THE #DIV--->   
         $(this).click(function() {
            $("#nav li a").removeClass("active");
            $(this).addClass('active');
           $('html, body').animate({scrollTop: targetOffset}, 1000);
           return false;
         });
      }
    }
  });

});


</script>



 </head> 
	
<body>


<!----- HEADER START--->   
<header id="header">
<div class="content">
<div id="logo"><a href="index.php"> Product Tracker </a></div>

<div id="nav">
	<ul>
		<li><a href="#slide1" class="active" title="Next Section" >Search</a></li>
		<li><a href="#slide2" title="Next Section">Register/Login</a></li>
		<li><a href="#slide3" title="Next Section">Top Products</a></li>
		<li><a  href="#slide4" title="Next Section">Contact Us</a></li>
     
	</ul>
</div>
</div>
</header>	
<!----- HEADER END--->   

<!----- SLIDES START --->   	
	<div id="slide1">
		<div class="content">
        	<div id="searchbox">
          	<div id="search_heading">
            <h2>PRODUCT TRACKER</h2>
		    <h1>FIND YOUR PRODUCT</h1>
          	</div id="search_form">
		   	<form class="form-wrapper cf" action="search.php" method="get">
        		<input id="searchkey" name="searchkey"  type="text" placeholder="Search here..." required>
        		<button type="submit">Search</button>
   			</form>   
			</div> 
		</div> 
    </div> 

	<div id="slide2">
		<div class="content" align="center" >
 			<div id="loginheading"><h1> WELCOME TO YOUR PROFILE! </h1>	</div>
       		
            
        <div id="tabnavcontainer">
            <div class="tabs">
    		<ul class="tab-links">
        		<li class="activetab" id="tab1nav"><a href="login.php#loginheading"><img src="icons/account_and_control.png"/></a></li>
        		<li id="tab2nav"><a href="php/manageprofile.php#loginheading"><img src="icons/contact_card.png"/></a></li>
        		<li id="tab3nav"><a href="#tab3"><img src="icons/favorites.png"/></a></li>
        		<li id="tab4nav"><a href="php/managepassword.php#loginheading"><img src="icons/control_panel.png"/></a></li>
    		</ul>
			</div>
            </div>
            
            
 			<div id="userprofile">
            <?php
				include 'php/DBclass.php';		
                $db = new DBclass();
				session_start();
				if( isset( $_SESSION['users'] )) {
					echo '<table class="contenttable"><tr id="ct_heading" align="center"><td colspan="2"><p>Your Information!</p></td></tr><tr><td class="description"><p>USERNAME:</p></td><td>'.$_SESSION['users']['username'].'</td></tr><tr><td><p align="right"  class="description">NAME:</p></td><td>'.$_SESSION['users']['name'].' '.$_SESSION['users']['surname'].'</td></tr><tr ><td class="description"><p align="right">EMAIL:</p></td><td>'.$_SESSION['users']['email'].'</td></tr>'; 
						
					echo '</table>';
				}
			?>
            </div>     
            
            
     	
            
		</div> 
    </div> 
	
	
   <div id="slide3">
		<div class="content">
			   <div class="quotes_container">
		       <h3 class="quotes">Sample Hot Products</h3>
		    </div> 
		</div> 
    </div> 
	
	
	<div id="slide4">
		<div class="content">
        <div id="loginheading"><h1>DO NOT HESITATE AND CONTACT US!</h1></div>
            
   		<div id="contactform" align="center">
            	<form name="registration-form" class="registration-form" action="php/contactus.php" method="post">
                	<fieldset id="registration-field">
                    <legend>CONTACT US!</legend>
                    <div>
                    	<label for="name">Name:</label> 
						<input class="lr_form" name="name" type="text"  placeholder="Name Surname" />
                    </div>
                    <div>
                    	<label for="email">Email:</label>
                    	<input class="lr_form" name="email" type="text" placeholder="sampleemail@email.com"/>
                    </div>
                    <div>
                    	<label for="subject">Subject:</label>
                    	<input class="lr_form" name="subject" type="text" placeholder="Your Awesome subject"/>
                    </div>
                    <div>
                    <label for="message">Message:</label>
                     <textarea id="message" name="message"  required data-minlength="20"></textarea>
                     </div>
               			<input id="submitbutton" type="submit" name="submit" value="Contact Us!" class="button" />
                 
                     </fieldset>
				</form>	
            	
            </div>	
  
</div>
		</div> 
		</div> 
    </div> 
	
	
		

</div> 
	
<!----- SLIDES END --->

</body>
</html>
