<!DOCTYPE html>
<html lang="en">
  <head>
	   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
       <title>Easy Product Search, Easy Life</title>
       <link rel="stylesheet" href="css/style.css"/>
       <link rel="stylesheet" href="css/search.css"/>
       <link rel="stylesheet" href="css/loginform.css"/>
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
<div id="logo"><a href=""> Product Tracker </a></div>

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
		   	<form class="form-wrapper cf" action="search.php">
        		<input type="text" placeholder="Search here..." required>
        		<button type="submit">Search</button>
   			</form>   
			</div> 
		</div> 
    </div> 

	<div id="slide2">
		<div class="content" >
 			<div id="loginheading"><h1> LOGIN OR BECOME A MEMBER FOR BETTER SERVICE! </h1>	</div>
            <div id="loginform">
            	<form name="login-form" class="login-form" action="login.php" method="post">
                	<fieldset id="login-field">
                    <legend>LOGIN</legend>
                    <div>
                    	<input class="lr_form" name="username" type="text" placeholder="Username" />
                    </div>
                    <div>
                    	<input class="lr_form" name="password" type="password" placeholder="Password" />
                    </div>
           
                    	<input class="lr_form" type="submit" name="submit" value="Login" class="button" />
                  
                    </fieldset>
				</form>	
            	
            </div>	
            
            
              <div id="registrationform">
            	<form name="registration-form" class="registration-form" action="register.php" method="post">
                	<fieldset id="registration-field">
                    <legend>REGISTER NOW</legend>
                    <div>
						<input class="lr_form" name="username" type="text"  placeholder="Username" />
                    </div>
                    <div>
						<input class="lr_form" name="name" type="text"  placeholder="Name" />
                    </div>
                    <div>
						<input class="lr_form" name="surname" type="text"  placeholder="Surname" />
                    </div>
                    <div>
                    	<input class="lr_form" name="email" type="text" placeholder="sampleemail@email.com"/>
                    </div>
                    <div>
                    	<input class="lr_form" name="password" type="password" placeholder="Retype Password" />
                    </div>
                    	<input class="lr_form" type="submit" name="submit" value="Register" class="button" />
                     </fieldset>
				</form>	
            	
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
              <div class="quotes_container">
		    <h3 class="quotes">Sample Contact Us</h3>
		</div> 
		</div> 
    </div> 
	
	
		

    </div> 
	
<!----- SLIDES END --->

</body>
</html>
