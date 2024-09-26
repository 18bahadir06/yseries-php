<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="./css/styles/blackmirrorfont.ttf" rel="stylesheet">
    <link href="./css/breakingbadfont.ttf" rel="stylesheet">
    <link href="./css/prisonbreakfont.ttf" rel="stylesheet">
    <link href="./css/fastandfuriousfont.otf" rel="stylesheet">
    <link href="./css/sherlockholmesfont.ttf" rel="stylesheet">
    <link href="./css/walkingdeadfont.otf" rel="stylesheet">
    <link href="./css/strangerthingsfont.ttf" rel="stylesheet">
    <link href="./css/blackmirrorfont.ttf" rel="stylesheet"> 
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    
    <meta charset="UTF-8">
    <meta name="description" content="Welcome to the YSeries! Watch the best movies and series for FREE!">
    <meta name="author" content="Hüseyin Yeldan">
    <link rel="shortcut icon" href="./images/YSerieslogosquare.png">
    <link rel="icon" type="image/png" href="./images/YSerieslogosquare.png" >
    <link rel="apple-touch-icon"  href="./images/YSerieslogosquare.png">    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/signup.css">
    <title>YSeries | New Age For Series and Films</title>
</head>
<body>

    <section id="header">

        <div class="navigation" >
            <a href="index.php" class="logo">YSeries</a>
    
            <div class="menus">
    
                <a href="#" class="menu" >TV Series</a>
                <div class="tvseries">
    
                    <a href="index.php" onclick="walkingdead()">The Walking Dead</a>
                    <a href="index.php" onclick="prisonbreak()">Prison Break</a>
                    <a href="index.php" onclick="breakingbad()">Breaking Bad</a>
                    <a href="index.php" onclick="sherlockholmes()">Sherlock Holmes</a>
                    <a href="index.php" onclick="strangerthings()">Stranger Things</a>
                    <a href="index.php" onclick="blackmirror()">Black Mirror</a>
    
                </div>
    
                <a href="index.php" class="menu" onclick="fastandfurious()">Films</a>
    
                <a href="filter.php" class="menu">Advanced Filter</a>
                <span onclick="myFunction()"> <i class="fas fa-bars"></i> </span>
            </div>
           
           
    
            <div class="signbuttons">
               <a href="signin.php"> <button class="signin"   >SIGN IN</button> </a>
               <a href="plans.php"> <button class="signup"  >SIGN UP</button> </a>
            </div>
            
        </div>
        <div id="mobilemenu">
    
        <a href="index.php#othershows">TV Series</a>
        <a href="index.php" onclick="fastandfurious()">Films</a>
        <a href="filter.php">Advanced Filter</a>
        <a href="signin.php">SIGN IN</a>
        <a href="plans.php">SIGN UP</a>
    
        </div>
    
    </section>








<section id="signupsection">

    <div class="signupsection">

            <h2>SIGN IN</h2>
            <form action="index.php"></form>

            <input type="email" placeholder="Email:">
            <input type="password" placeholder="Password:">

            <a href="index.php"><button>SIGN IN</button></a>
    </div>


</section>
















<section id="footer">

    <div class="toppart">
        
        <a href="index.php" class="footerlogo">YSERIES</a>

        <div class="quicklinks">

            <a href="#othershows">TV Series</a>
            <a href="index.php">Films</a>
            <a href="index.php">Recommended</a>

        </div>

        <p>Designed by Hüseyin Yeldan</p>

    </div>

    <div class="bottompart">
        <p> Hüseyin Yeldan 2021 &copy;</p>
    </div>

</section>


</body>

<script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" data-auto-replace-svg="nest"></script>

<script>
    function myFunction() {
      var x = document.getElementById("mobilemenu");
      if (x.style.display === "flex") {
        x.style.display = "none";
      } else {
        x.style.display = "flex";
      }
    }
  </script>
    
    <script src="./js/script.js"></script>
    <script src="./js/vanillia-tilt.js"></script>
    <script src="./js/hammer.js"></script>

</html>