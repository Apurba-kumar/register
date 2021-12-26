
<!DOCTYPE html>
<html>
<title>contact</title>

<script src="https://maps.google.com/maps/api/js?sensor=false"></script>
<script>
function showPosition() {
    if(navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showMap, showError);
    } else {
        alert("Sorry, your browser does not support HTML5 geolocation.");
    }
}
 
// Define callback function for successful attempt
function showMap(position) {
    // Get location data
    lat = position.coords.latitude;
    long = position.coords.longitude;
    var latlong = new google.maps.LatLng(lat, long);
    
    var myOptions = {
        center: latlong,
        zoom: 16,
        mapTypeControl: true,
        navigationControlOptions: {
            style:google.maps.NavigationControlStyle.SMALL
        }
    }
    
    var map = new google.maps.Map(document.getElementById("embedMap"), myOptions);
    var marker = new google.maps.Marker({ position:latlong, map:map, title:"You are here!" });
}
 
// Define callback function for failed attempt
function showError(error) {
    if(error.code == 1) {
        result.innerHTML = "You've decided not to share your position, but it's OK. We won't ask you again.";
    } else if(error.code == 2) {
        result.innerHTML = "The network is down or the positioning service can't be reached.";
    } else if(error.code == 3) {
        result.innerHTML = "The attempt timed out before it could get the location data.";
    } else {
        result.innerHTML = "Geolocation failed due to unknown error.";
    }
}
</script>
<head>
  <link rel="stylesheet" href="css/style.css">
  <body>
    <nav>
        <a href="" class="name">Apurba Kumar</a>
        <ul>
        <li><a href="/register/resume.php" class="home">Home</a></li>\
                    <li><a href="/register/about.php" class="about">About</a></li>
                    <li><a href="/register/contact.php" class="contact">Contact</a></li>
                    <li><a href="/register/feedback.php" class="feedback">Feed Back</a></li>
                    <li><a href="/register/LogOut.php" class="logout">Log Out</a></li>
            
            
        </ul>
    </nav>
    <div class="contact_page">
      <div class="contact-text">
      <p>Contact Details</p>
       
      </div>
      <div class="box-container">
          <div class="box-1">
              <h4>Present Address<br><h5>Adador, shamoli, Dhaka 1217</h5></h4>
              <h4>Permanent Address<br><h5>Naogaon,Rajshahi</h5></h4>
          </div>

          <div class="box-2">
              <h4>Email <Address></Address> <br>
                  <li><h5>1. apurba.kumar.cse@ulab.edu.bd</h5></li>
                  <li><h5>2. apurba.kumar33@gmail.com</h5></li>
                  <li><h5>3. apurba.kumar33@outlook.com</h5></li>
               </h4>
          </div>
          <div class="box-3">
              <h4>Contact No.</h4>
              <h5>01774775504</h5>
              <h5>01768676303</h5>
          </div>
      </div>
      </div>


      <button type="button" onclick="showPosition();">Show My Position on Google Map</button>
      <div id="embedMap" style="width: auto; height: 500px;">
          <!--Google map will be embedded here-->
      </div>


      
  </body>
</head>

</html>