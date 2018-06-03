<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" type="text/css" href="CSS/Home.css">
  <link rel="stylesheet" type="text/css" href="CSS/SlideshowH.css">
  <link rel="stylesheet" type="text/css" href="CSS/Style.css">
</head>
<body>
  <div id="home">
    <div id="nav">
      <label for="toggle">&#9776;</label>
      <input type="checkbox" id="toggle"/>
      <div class="menu">
        <a href="#">Home</a>
        <a href="Geschiedenis.php">Geschiedenis</a>
        <a href="VerschillendeSporten.php">Verschillende Sporten</a>
        <a href="BekendeSporters.php">Bekende Sporters</a>
        <a href="Plaatsen.php">Plaatsen</a>
        <a href="Contact.php">Contact</a>
      </div>
    </div>
    
    <div id="slideshowH">
      <div id="slides">
        <img class="mySlides" src="fotos/slacklining.jpg">
        <img class="mySlides" src="fotos/iceclimbing.jpg">
        <img class="mySlides" src="fotos/mountainbike.jpg">
        <p class="tekstFoto">
          Welkom op de Xtreme Sports website. 
          <br>
          Hier kunt meer vinden over de geschiedenis, 4 bekende sporters en nog veel meer. 
        </p>
      </div>
      <script>
        var slideIndex = 0;
        carousel();

        function carousel() {
          var i;
          var x = document.getElementsByClassName("mySlides");
          for (i = 0; i < x.length; i++) {
            x[i].style.display = "none"; 
          }
          slideIndex++;
          if (slideIndex > x.length) {slideIndex = 1} 
          x[slideIndex-1].style.display = "block"; 
          setTimeout(carousel, 2000); 
         }
      </script>
    </div>
    <div id="footer">
      <p>hahaha</p>
    </div>
  </div>
</body>
</html>