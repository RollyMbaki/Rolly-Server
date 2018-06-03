<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" type="text/css" href="CSS/Plaatsen.css">
  <link rel="stylesheet" type="text/css" href="CSS/Maps.css">
  <link rel="stylesheet" type="text/css" href="CSS/Style.css">
</head>
<body>
   <div id="plaatsen">
    <div id="nav">
      <label for="toggle">&#9776;</label>
      <input type="checkbox" id="toggle"/>
      <div class="menu">
        <a href="Home.php">Home</a>
        <a href="Geschiedenis.php">Geschiedenis</a>
        <a href="VerschillendeSporten.php">Verschillende Sporten</a>
        <a href="BekendeSporters.php">Bekende Sporters</a>
        <a href="#">Plaatsen</a>
        <a href="Contact.php">Contact</a>
      </div>
    </div>
      
     <div id="titelP">
       <h3>Plaatsen</h3>
     </div>
        
     <div id="tekstP">
       <p>
        Duis mauris justo, euismod at vehicula a, ultricies eu massa. Ut hendrerit porta ipsum non ullamcorper. Praesent maximus quis lacus dictum mattis. Suspendisse at lectus nisl. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla pharetra nisl sed pulvinar lobortis. Nam non luctus justo. Sed congue augue a magna vehicula iaculis. Fusce non tellus convallis ligula varius venenatis eget sit amet nisl. Duis sagittis elementum ante in maximus. Praesent vel dictum mauris, sit amet sagittis purus. Aliquam sodales viverra dapibus.
      </p>
     </div>
     
    <div id="maps">
      <div id="map">
      
      </div>
      <script>
        function initMap() {
          var location = {lat: -25.344, lng: 131.036};
          var map = new google.maps.Map(
              document.getElementById("map"), {zoom: 4, center: location});
          var marker = new google.maps.Marker({position: location, map: map});
        }
      </script>
      <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC_zb-lXPKbTjB79PtGU1c4X2ZDBH0SVQs&callback=initMap"></script>
    </div>
     
    <div id="footer">
      <p>Xtreme Sports</p>
    </div>
  </div>
</body>
</html>