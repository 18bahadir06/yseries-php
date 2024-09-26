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

<section id="main">

<br><br><br>
    


<?php

   $dbhost = 'localhost:3306';
   $dbuser = 'root';
   $dbpass = '';
   
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect:');
   }
   
   $sql = 'SELECT DiziAdi, DiziPuani, DiziYapimcisi, DiziSezonSayisi, BolumVideo FROM diziler';
   mysqli_select_db($conn, 'yseries');
   $retval = mysqli_query($conn,$sql);
   
   if(! $retval ) {
      die('Could not get data: ');
   }
   
   $row = mysqli_fetch_array($retval, MYSQLI_ASSOC);
        echo 
        "

            <div class='AboutShow'>

                <div class='ShowInfos2'>
                    <p class= 'DiziAdiP'> {$row['DiziAdi']} </p>
                    <p class= 'DiziSlogan'> Trailer </p> 
                    <p> YAPIMCI {$row['DiziYapimcisi']} </p>
                    <br>
                    <p> YSeries Dizi Puanı: <b>10/{$row['DiziPuani']} </b></p>
                    <p> {$row['DiziSezonSayisi']} SEZON </p>
                    <br>
                   <a href='index.php'> <button class= 'gobackbutton'> Go Back </button> </a> 
                </div>

                <div class='ShowVideo'>



                    <iframe width='100%' height='100%' src='https://www.youtube.com/embed/sfAc2U20uyg' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' controls allowfullscreen></iframe>

                        
                </div>

            </div>
            
        ";

   mysqli_close($conn);


   //MYSQL VİDEO ÇEKME 

//    <video width='100%' height='100%' controls>
//    <source src='$row[BolumVideo]' type='video/mp4'> 
//    </video>
?>

                                    

</section>


<div class="watchlaterinfo" id="addToList">

    <i class="fas fa-check-circle"></i>

    <p>You've added to your list. </p>
</div>  



<section id="footer">

    <div class="toppart">
        
        <a href="index.php" class="footerlogo">YSERIES</a>

        <div class="quicklinks">

            <a href="#othershows">TV Series</a>
            <a href="#">Films</a>
            <a href="#">Recommended</a>

        </div>

        <p>Designed by Hüseyin Yeldan</p>

    </div>

    <div class="bottompart">
        <p> Hüseyin Yeldan 2021 &copy;</p>
    </div>

</section>
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
</body>

<script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" data-auto-replace-svg="nest"></script>



</html>