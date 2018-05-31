<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" type="text/css" href="CSS/Plaatsen.css">
  <link rel="stylesheet" type="text/css" href="CSS/Style.css">
</head>
<body>
   <div id="plaatsen">
    <div id="menu">
      <a href="Home.php">Home</a>
      <a href="Geschiedenis.php">Geschiedenis</a>
      <a href="VerschillendeSporten.php">Verschillende Sporten</a>
      <a href="BekendeSporters.php">Bekende Sporters</a>
      <a href="#">Plaatsen</a>
      <a href="Contact.php">Contact</a>
    </div>
      
    <div id="maps">
      <script>
        function myMap() {
          var mapOptions = {
            center: new google.maps.LatLng(51.5, -0.12),
            zoom: 10,
            mapTypeId: google.maps.MapTypeId.HYBRID
            }
          var map = new google.maps.Map(document.getElementById("map"), mapOptions);
        }
</script>
    </div>
     
    <div id="footer">
     <p>hahaha</p>
    </div>
  </div>
</body>
</html>