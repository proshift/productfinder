<!DOCTYPE html>
<html lang="en">
  <head>
	   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
       <title>Easy Product Search, Easy Life</title>
       <link rel="stylesheet" href="css/style.css"/>
       <link rel="stylesheet" href="css/search.css"/>
       <link rel="stylesheet" href="css/loginform.css"/>
       <link rel="stylesheet" href="css/contactform.css"/>
       <link rel="stylesheet" href="css/pricingtable.css"/>

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
		   	<form class="form-wrapper cf" action="search.php" method="get">
        		<input id="searchkey" name="searchkey"  type="text" placeholder="Search here..." required>
        		<button type="submit">Search</button>
   			</form>   
			</div> 
		</div> 
    </div> 

	<div id="slide2">
		<div class="content" >
 			<div id="loginheading"><h1> LOGIN OR BECOME A MEMBER FOR BETTER SERVICE! </h1>	</div>
       
            <div id="loginform" align="center">
            	<form name="login-form" class="login-form" action="php/checklogin.php" method="post">
                	<fieldset id="login-field">
                    <legend>LOGIN</legend>
                    <div>
                    	<input class="lr_form" name="username" type="text" placeholder="Username" />
                    </div>
                    <div>
                    	<input class="lr_form" name="password" type="password" placeholder="Password" />
                    </div>
           
                    	<input id="submitbutton" type="submit" name="submit" value="Login" class="button"  />
                  
                    </fieldset>
				</form>	
            	
            </div>	
          
            
            
              <div id="registrationform" align="center">
            	<form name="registration-form" class="registration-form" action="php/registeruser.php" method="post">
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
                    <div>
                    	<input class="lr_form" name="password" type="password" placeholder="Password" />
                    </div>
                    	<input id="submitbutton" type="submit" name="submit" value="Register" class="button" />
                     </fieldset>
				</form>	
            	
            </div>	
            
		</div> 
    </div> 
	
	
   <div id="slide3">
		<div class="content">
			 <h1>CHECK OUT SOME OF THE HOTTEST PRODUCTS!</h1>
             <div id="hotproducts">
		       	<ul class="pricing_table">
<li class="price_block">
<h3>Starter</h3>
<div class="price">
<div class="price_figure">
<span class="price_number">FREE</span>
</div>
</div>
<ul class="features">
<li>1GB Storage</li>
<li>2 Clients</li>
<li>5 Active Projects</li>
<li>5 Colors</li>
<li>Free Goodies</li>
<li>24/7 Email support</li>
</ul>
<div class="footer">
<a href="#" class="action_button">Buy Now</a>
</div>
</li>
<li class="price_block">
<h3>Basic</h3>
<div class="price">
<div class="price_figure">
<span class="price_number">$9.99</span>
<span class="price_tenure">per month</span>
</div>
</div>
<ul class="features">
<li>2GB Storage</li>
<li>5 Clients</li>
<li>10 Active Projects</li>
<li>10 Colors</li>
<li>Free Goodies</li>
<li>24/7 Email support</li>
</ul>
<div class="footer">
<a href="#" class="action_button">Buy Now</a>
</div>
</li>
<li class="price_block">
<h3>Premium</h3>
<div class="price">
<div class="price_figure">
<span class="price_number">$19.99</span>
<span class="price_tenure">per month</span>
</div>
</div>
<ul class="features">
<li>5GB Storage</li>
<li>10 Clients</li>
<li>20 Active Projects</li>
<li>20 Colors</li>
<li>Free Goodies</li>
<li>24/7 Email support</li>
</ul>
<div class="footer">
<a href="#" class="action_button">Buy Now</a>
</div>
</li>
<li class="price_block">
<h3>Lifetime</h3>
<div class="price">
<div class="price_figure">
<span class="price_number">$999</span>
</div>
</div>
<ul class="features">
<li>Unlimited Storage</li>
<li>Unlimited Clients</li>
<li>Unlimited Projects</li>
<li>Unlimited Colors</li>
<li>Free Goodies</li>
<li>24/7 Email support</li>
</ul>
<div class="footer">
<a href="#" class="action_button">Buy Now</a>
</div>
</li>
</ul>
<ul class="skeleton pricing_table" style="margin-top: 100px; overflow: hidden;">
<li class="label" style="margin: 0 none;">ul.pricing_table</li>
<li class="price_block">
<span class="label">li.price_block</span>
<h3><span class="label">h3</span></h3>
<div class="price">
<span class="label">div.price</span>
<div class="price_figure">
<span class="label">div.price_figure</span>
<span class="price_number">
<span class="label">span.price_number</span>
</span>
<span class="price_tenure">
<span class="label">span.price_tenure</span>
</span>
</div>
</div>
<ul class="features">
<li class="label">ul.features</li>
<br/><br/><br/>
</ul>
<div class="footer">
<span class="label">div.footer</span>
</div>
</li>
<li class="price_block" style="opacity: 0.5;">
<span class="label">li.price_block</span>
<h3><span class="label">h3</span></h3>
<div class="price">
<span class="label">div.price</span>
<div class="price_figure">
<span class="label">div.price_figure</span>
<span class="price_number">
<span class="label">span.price_number</span>
</span>
<span class="price_tenure">
<span class="label">span.price_tenure</span>
</span>
</div>
</div>
<ul class="features">
<li class="label">ul.features</li>
<br/><br/><br/>
</ul>
<div class="footer">
<span class="label">div.footer</span>
</div>
</li>
<li class="price_block" style="opacity: 0.25;">
<span class="label">li.price_block</span>
<h3><span class="label">h3</span></h3>
<div class="price">
<span class="label">div.price</span>
<div class="price_figure">
<span class="label">div.price_figure</span>
<span class="price_number">
<span class="label">span.price_number</span>
</span>
<span class="price_tenure">
<span class="label">span.price_tenure</span>
</span>
</div>
</div>
<ul class="features">
<li class="label">ul.features</li>
<br/><br/><br/>
</ul>
<div class="footer">
<span class="label">div.footer</span>
</div>
</li>
</ul>
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
						<input class="lr_form" name="cotactname" type="text"  placeholder="Name Surname" />
                    </div>
                    <div>
                    	<label for="email">Email:</label>
                    	<input class="lr_form" name="contactemail" type="text" placeholder="sampleemail@email.com"/>
                    </div>
                    <div>
                    	<label for="subject">Subject:</label>
                    	<input class="lr_form" name="contactsubject" type="text" placeholder="Your Awesome subject"/>
                    </div>
                    <div>
                    <label for="message">Message:</label>
                     <textarea id="message" name="contactmessagemessage" required data-minlength="20"></textarea>
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
