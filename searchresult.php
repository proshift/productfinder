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

<script>

               	  var lat, lng;
				  var dlat, dlng;
				  var d = 9999;
				  
				  var carrefour = [[39.8945, 32.8412], [39.964, 32.735], [39.9076, 32.884], [39.9013, 32.7007], [39.8829, 32.827]];
	  			  var migros = [[39.9311, 32.8673], [39.9374,32.8271], [39.9271, 32.8137], [39.8963, 32.8508], [39.935, 32.8484]];
				   	
				
				function distCalc(lat1, lon1, lat2, lon2){
						var R = 6371; // Radius of the earth in km
						var dLat = (lat2-lat1).toRad();  // Javascript functions in radians
						var dLon = (lon2-lon1).toRad(); 
						var a = Math.sin(dLat/2) * Math.sin(dLat/2) +
								Math.cos(lat1.toRad()) * Math.cos(lat2.toRad()) * 
								Math.sin(dLon/2) * Math.sin(dLon/2); 
						var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a)); 
						var d = R * c; // Distance in km
						
						return d;
					}
				
				function findShortest(){
					for(var i = 0; i++; i < 5){
						if(d < distCalc(lat, lng, carrefour[i][0], carrefour[i][1])){
							d = distCalc(lat, lng, carrefour[i][0], carrefour[i][1]);
							dlat = carrefour[i][0];
							dlng = carrefour[i][1];	
							}
						}
					}
                getLocation();
				
				
				
				
                function getLocation(){
                  if (navigator.geolocation){
                        //show the geolocation position
                        navigator.geolocation.getCurrentPosition(showPosition);
                    }
                    else{
                        //not support HTML5 geolocation

                    }
                  }

                function showPosition(position){
                    lat = position.coords.latitude;
                    lng = position.coords.longitude;
                  }
				
                </script>
                
               <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <style type="text/css">
      html { height: 100% }
      body { height: 100%; margin: 0; padding: 0 }
      #map-canvas { height: 100% }
    </style>
    <script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCDEEx0S8zpbxSok36H_z-7GiJdHhmd2eI&sensor=false">
      
    </script>
    <script type="text/javascript">
      var destLatlng = new google.maps.LatLng(dlat, dlng);
      function initialize() {
        var mapOptions = {
          center: new google.maps.LatLng(lat, lng),
          zoom: 12
        };
        var map = new google.maps.Map(document.getElementById("map-canvas"),
            mapOptions);
			
		 var marker = new google.maps.Marker({
                        position: new google.maps.LatLng(lat, lng),
                        map: map,
                        title:"You are here"
                    });
		var marker = new google.maps.Marker({
                        position: new google.maps.LatLng(39.8945, 32.8412) ,
                        map: map,
                        title:"Closest store"
                    });
		var flightPlanCoordinates = [
                        new google.maps.LatLng(lat, lng),
                        new google.maps.LatLng(39.8945, 32.8412)
                      ];
                      var flightPath = new google.maps.Polyline({
                        path: flightPlanCoordinates,
                        geodesic: true,
                        strokeColor: '#FF0000',
                        strokeOpacity: 1.0,
                        strokeWeight: 2
                      });
                    
                    flightPath.setMap(map);
      }
      google.maps.event.addDomListener(window, 'load', initialize);
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
		<li><a href="#slide2" title="Next Section">Closest Store</a></li>

     
	</ul>
</div>
</div>
</header>	
<!----- HEADER END--->   

<!----- SLIDES START --->   	
	<div id="slide1">
		<div class="content" align="center">
       <div id="tablecontainer"> 
    <?PHP
	session_start();
	include 'php/DBclass.php';
	$db = new DBclass();
	
	$i = 0;
	
	if(isset ($_GET['searchkey']))
	{
		$searchkey = $_GET['searchkey'];
		$sql = "SELECT * FROM products WHERE name LIKE '%$searchkey%'";
		if($db->query($sql))
		{
			echo '<table class="resulttable"><tr><th>Name</th><th>Prcie</th><th>Image</th></tr>';
			while($i < 8 && $products = $db->getRow())
			{
				
				echo '<tr class="tabledata" onClick="document.location = #slide2"><td>'.$products['name'].'</td><td>'.$products['price'].'</td><td><img src="'.$products['img'].'" /></td></tr>';
				
				$i++;
			}
			echo '</table>';
			
		}
	}
	
?>
</div>
			</div> 
		</div> 
    
    
	<div id="slide2">
		<div class="content" >
 			<div id="loginheading"><h1> CLOSEST STORE </h1>	</div>
       			

           		
            
		</div> 
        <div id="map-canvas"/>
    </div> 
	
	
   
	
	
	
	

<!----- SLIDES END --->

</body>
</html>
