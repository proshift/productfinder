    <!DOCTYPE html>
    <html>
        <head>
            <style type="text/css">
              html { height: 100% }
              body { height: 100%; margin: 0; padding: 0 }
              #map-canvas { height: 25%; width:25% }
            </style>
    
                 <script>
    
                    var lat, lng;
    
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
                        lng= position.coords.longitude;
                      }
    
                    </script>
                        <script type="text/javascript"
                          src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCDEEx0S8zpbxSok36H_z-7GiJdHhmd2eI&sensor=false&region=TR&language=TR">
                  </script>
    
    
                <script type="text/javascript">
                  var myLatlng = new google.maps.LatLng(lat, lng);
                  var destLatlng = new google.maps.LatLng(39.885981, 32.747323);
                  function initialize() {
                    var mapOptions = {
                      center: myLatlng,
                      zoom: 10
                    };
                    var map = new google.maps.Map(document.getElementById("map-canvas"),
                        mapOptions);
                    var marker = new google.maps.Marker({
                        position: myLatlng,
                        map: map,
                        title:"You are here"
                    });
    
                    var marker = new google.maps.Marker({
                        position: destLatlng,
                        map: map,
                        title:"Closest store"
                    });
    
                    var flightPlanCoordinates = [
                        myLatlng,
                        destLatlng
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
            <div id="map-canvas"/>
            <div id ="distance" />
        </body>
    </html>