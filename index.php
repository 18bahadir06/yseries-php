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

                <a href="#" onclick="walkingdead()">The Walking Dead</a>
                <a href="#" onclick="prisonbreak()">Prison Break</a>
                <a href="#" onclick="breakingbad()">Breaking Bad</a>
                <a href="#" onclick="sherlockholmes()">Sherlock Holmes</a>
                <a href="#" onclick="strangerthings()">Stranger Things</a>
                <a href="#" onclick="blackmirror()">Black Mirror</a>

            </div>

            <a href="#" class="menu" onclick="fastandfurious()">Films</a>

            <a href="filter.php" class="menu">Advanced Filter</a>
            <span onclick="myFunction()"> <i class="fas fa-bars"></i> </span>
        </div>
       
       

        <div class="signbuttons">
           <a href="signin.php"> <button class="signin"   >SIGN IN</button> </a>
           <a href="plans.php"> <button class="signup"  >SIGN UP</button> </a>
        </div>
        
    </div>
    <div id="mobilemenu">

    <a href="#othershows">TV Series</a>
    <a href="#" onclick="fastandfurious()">Films</a>
    <a href="filter.php">Advanced Filter</a>
    <a href="signin.php">SIGN IN</a>
    <a href="plans.php">SIGN UP</a>

    </div>

</section>


<section id="main">


    <div class="show" >

        <div class="showcover" id="showcover" data-tilt data-tilt-glare data-tilt-max-glare="0.5" ></div>
        
        <div class="showinfo">

            <h1 id="title">THE WALKING DEAD</h1>
            <h5 id="seriesinfo">TV SERIES - 11 Seasons - 2010/2021</h5>
            <p class="description" id="description">In the wake of a zombie apocalypse, survivors hold on to the hope of humanity by banding together to wage a fight for their own survival.</p>
            <p id="presents"><b>AMC</b> Presents</p>
            <p id="creator">Developed by <b>Frank Darabont</b></p>
            <p id="based">Based on the series of graphic novels by <b>Robert Kirkman & Tony Moore & Charlie Adlard.</b></p>
            <p class="rating" id="rating"><b> YSeries Rating: </b><rating> 10/8.4 </rating> </p>
            <p id="peoplewatched">864.424 <b>people watched. </b> </p>
            <p id="peoplewatching">1.264 <b> people are watching. </b> </p>

            <div class="showbuttons"> <a href="walkindead.php"> <button class="watchnow">WATCH NOW</button> </a> <a href="https://www.youtube.com/watch?v=sfAc2U20uyg" target="_blank" id="trailer"> <button class="watchlater">WATCH TRAILER</button> </a> </div>

        </div>

  
    </div>



</section>


<div class="watchlaterinfo" id="addToList">

    <i class="fas fa-check-circle"></i>

    <p>You've added to your list. </p>
</div>  


<section id="othershows">
    <h2>MOST POPULAR</h2>

    <div class="most">
        <div class="prisonbreak shows" data-tilt data-tilt-glare data-tilt-max-glare="0.2"><p>Prison Break</p> <div class="showsbuttons"> <a href="#main"> <button class="showsbuttonsnow" onclick="prisonbreak()">WATCH NOW</button> </a> <button class="showsbuttonslater" onclick="addToList()">WATCH LATER</button> </div> </div>

        <div class="breakingbad shows" data-tilt data-tilt-glare data-tilt-max-glare="0.2"><p>Breaking Bad</p> <div class="showsbuttons"> <a href="#main"> <button class="showsbuttonsnow" onclick="breakingbad()">WATCH NOW</button> </a> <button class="showsbuttonslater" onclick="addToList()">WATCH LATER</button> </div></div>

        <div class="strangerthings shows" data-tilt data-tilt-glare data-tilt-max-glare="0.2"><p>Stranger Things</p> <div class="showsbuttons"> <a href="#main"> <button class="showsbuttonsnow" onclick="strangerthings()">WATCH NOW</button> </a> <button class="showsbuttonslater" onclick="addToList()">WATCH LATER</button> </div></div>

        <div class="sherlockholmes shows" data-tilt data-tilt-glare data-tilt-max-glare="0.2"><p>Sherlock Holmes</p> <div class="showsbuttons"> <a href="#main"> <button class="showsbuttonsnow" onclick="sherlockholmes()">WATCH NOW</button> </a><button class="showsbuttonslater" onclick="addToList()">WATCH LATER</button> </div></div>

        <div class="blackmirror shows" data-tilt data-tilt-glare data-tilt-max-glare="0.2"><p>Black Mirror</p> <div class="showsbuttons"> <a href="#main"> <button class="showsbuttonsnow" onclick="blackmirror()">WATCH NOW</button> </a><button class="showsbuttonslater" onclick="addToList()">WATCH LATER</button> </div></div>

        <div class="fastandfurious9 shows" data-tilt data-tilt-glare data-tilt-max-glare="0.2"><p>Fast and Furious 9</p> <div class="showsbuttons"> <a href="#main"> <button class="showsbuttonsnow" onclick="fastandfurious()">WATCH NOW</button></a> <button class="showsbuttonslater" onclick="addToList()">WATCH LATER</button> </div></div>
    </div>

    <h2>MOST LIKED</h2>

    <div class="most">
        <div class="breakingbad shows" data-tilt data-tilt-glare data-tilt-max-glare="0.2"><p>Breaking Bad</p> <div class="showsbuttons"><a href="#main"> <button class="showsbuttonsnow" onclick="breakingbad()">WATCH NOW</button> </a><button class="showsbuttonslater" onclick="addToList()">WATCH LATER</button> </div></div>

        <div class="prisonbreak shows" data-tilt data-tilt-glare data-tilt-max-glare="0.2"><p>Prison Break</p> <div class="showsbuttons"><a href="#main"> <button class="showsbuttonsnow" onclick="prisonbreak()">WATCH NOW</button> </a><button class="showsbuttonslater" onclick="addToList()">WATCH LATER</button> </div></div>

        <div class="sherlockholmes shows" data-tilt data-tilt-glare data-tilt-max-glare="0.2"><p>Sherlock Holmes</p> <div class="showsbuttons"><a href="#main"> <button class="showsbuttonsnow" onclick="sherlockholmes()">WATCH NOW</button></a> <button class="showsbuttonslater" onclick="addToList()">WATCH LATER</button> </div></div>

        <div class="strangerthings shows" data-tilt data-tilt-glare data-tilt-max-glare="0.2"><p>Stranger Things</p> <div class="showsbuttons"><a href="#main"> <button class="showsbuttonsnow" onclick="strangerthings()">WATCH NOW</button></a> <button class="showsbuttonslater" onclick="addToList()">WATCH LATER</button> </div></div>

        <div class="fastandfurious9 shows" data-tilt data-tilt-glare data-tilt-max-glare="0.2"><p>Fast and Furious 9</p> <div class="showsbuttons"><a href="#main"> <button class="showsbuttonsnow"  onclick="fastandfurious()">WATCH NOW</button></a> <button class="showsbuttonslater" onclick="addToList()">WATCH LATER</button> </div></div>

        <div class="blackmirror shows" data-tilt data-tilt-glare data-tilt-max-glare="0.2"><p>Black Mirror</p> <div class="showsbuttons"><a href="#main"> <button class="showsbuttonsnow" onclick="blackmirror()">WATCH NOW</button> </a><button class="showsbuttonslater" onclick="addToList()">WATCH LATER</button> </div></div>
    </div>

</section>

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