<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" type="text/css" href="CSS/Geschiedenis.css">
  <link rel="stylesheet" type="text/css" href="CSS/SlideshowG.css">
  <link rel="stylesheet" type="text/css" href="CSS/Style.css">
</head>
<body>
  <div id="geschiedenis">
    <div id="menu">
      <a href="Home.php">Home</a>
      <a href="#">Geschiedenis</a>
      <a href="VerschillendeSporten.php">Verschillende Sporten</a>
      <a href="BekendeSporters.php">Bekende Sporters</a>
      <a href="Plaatsen.php">Plaatsen</a>
      <a href="Contact.php">Contact</a>
    </div>
      
    <div id="titelG">
      <h3>Geschiedenis</h3>
    </div>
    <div id="tekstG">
      <p>
       De term ´Extreme sports´ werd het eerst gebruikt in 1995 om gevaarlijke sporten te definiëren. Verschillende sporten die in die categorie vallen, zoals snowboarden, skateboarden en street luge stonden ook wel bekend als ´Outlaw sports´ omdat ze veelal verboden waren op verschillende locaties omdat ze te gevaarlijk waren. Ze heten ook wel ´Alternatieve sporten´ omdat ze gezien worden als alternatief voor oudere, gevestigde sporten. 

Sommige aanvankelijk als Extreme sports betitelde sporten zijn inmiddels geaccepteerd door de mainstream. Bijvoorbeeld snowboarden: van extreme, outlaw sport is het nu een Olympische sport geworden.
      </p>
    </div>
    <div id="slideshowG">
      <div id="slides">
        <img class="mySlides" src="fotos/slacklining.jpg">
        <img class="mySlides" src="fotos/iceclimbing.jpg">
        <img class="mySlides" src="fotos/mountainbike.jpg">
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