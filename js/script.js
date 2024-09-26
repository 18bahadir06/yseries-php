const formatNum = n => Array.from(String(n)).reverse().map((a,i) => 
{if((i%3==0)&&(i>0))return a+"."; return a;
}).reverse().join("");

var randomwatching;
randomwatching = formatNum(Math.floor(Math.random()*250+1500));
var randomwatched;
randomwatched = formatNum(Math.floor(Math.random()*5000+850000));


var peoplewatched = document.getElementById("peoplewatched").innerHTML = randomwatched + " people watched.";
var peoplewatching = document.getElementById("peoplewatching").innerHTML = randomwatching + " people are watching.";


function walkingdead(){
    var title = document.getElementById("title").innerText = "THE WALKING DEAD";
    title = document.getElementById("title").style.fontFamily = "Dead Font Walking";
    title = document.getElementById("title").style.fontSize = "52pt"
    var seriesinfo = document.getElementById("seriesinfo").innerText = "TV SERIES - 11 Seasons - 2010/2021";
    var description = document.getElementById("description").innerText = "In the wake of a zombie apocalypse, survivors hold on to the hope of humanity by banding together to wage a fight for their own survival.";
    var presents = document.getElementById("presents").innerHTML =" <b>AMC</b> presents.";
    var creator = document.getElementById("creator").innerHTML = "Developed by <b>	Frank Darabont </b>";
    var based = document.getElementById("based").style.display = "block";
    var based = document.getElementById("based").innerHTML = "Based on the series of graphic novels by <b> Robert Kirkman & Tony Moore & Charlie Adlard. </b> ";
    var rating = document.getElementById("rating").innerHTML = "<b> YSeries Rating: </b><rating> 10/8.4 </rating>";
    var showcover = document.getElementById("showcover").style.backgroundImage ="url(./images/walkingdead.jpg)";
    var peoplewatched = document.getElementById("peoplewatched").innerHTML = randomwatched + " people watched.";
    var peoplewatching = document.getElementById("peoplewatching").innerHTML = randomwatching + " people are watching.";
    var trailer = document.getElementById("trailer").href = "https://www.youtube.com/watch?v=sfAc2U20uyg";

    var randomwatching;
    randomwatching = formatNum(Math.floor(Math.random()*250+1500));
    var randomwatched;
    randomwatched = formatNum(Math.floor(Math.random()*5000+850000));


var peoplewatched = document.getElementById("peoplewatched").innerHTML = randomwatched + " people watched.";
var peoplewatching = document.getElementById("peoplewatching").innerHTML = randomwatching + " people are watching.";

}

function prisonbreak(){
    var title = document.getElementById("title").innerText = "PRISONBREAK";
    title = document.getElementById("title").style.fontFamily = "Capture it";
    title = document.getElementById("title").style.fontSize = "52pt"
    var seriesinfo = document.getElementById("seriesinfo").innerText = "TV SERIES - 5 Seasons - 2005/2017";
    var description = document.getElementById("description").innerText = "The story revolves around a man who was sentenced to death for a crime he did not commit and his brother's elaborate plan to help him escape his death sentence.";
    var presents = document.getElementById("presents").innerHTML =" <b>FOX</b> presents.";
    var creator = document.getElementById("creator").innerHTML = "Developed by <b>	Paul Scheuring </b>";
    var based = document.getElementById("based").style.display = "none";
    var rating = document.getElementById("rating").innerHTML = "<b> YSeries Rating: </b><rating> 10/9.2 </rating>";
    var showcover = document.getElementById("showcover").style.backgroundImage ="url(./images/prisonbreak.jpg)";
    var trailer = document.getElementById("trailer").href = "https://www.youtube.com/watch?v=AL9zLctDJaU";
    
    var randomwatching;
    randomwatching = formatNum(Math.floor(Math.random()*450+4500));
    var randomwatched;
    randomwatched = formatNum(Math.floor(Math.random()*50000+1250000));


var peoplewatched = document.getElementById("peoplewatched").innerHTML = randomwatched + " people watched.";
var peoplewatching = document.getElementById("peoplewatching").innerHTML = randomwatching + " people are watching.";

}

function breakingbad(){
    var title = document.getElementById("title").innerText = "$eaking %d";
    title = document.getElementById("title").style.fontFamily = "Breaking B";
    title = document.getElementById("title").style.fontSize = "76pt"
    var seriesinfo = document.getElementById("seriesinfo").innerText = "TV SERIES - 5 Seasons - 2008/2013";
    var description = document.getElementById("description").innerText = "Breaking Bad follows Walter White, a meek high school chemistry teacher who transforms into a ruthless player in the local methamphetamine drug trade, driven by a desire to financially provide for his family after being diagnosed with terminal lung cancer.";
    var presents = document.getElementById("presents").innerHTML =" <b>AMC</b> presents.";
    var creator = document.getElementById("creator").innerHTML = "Developed by <b> Vince Gilligan </b>";
    var based = document.getElementById("based").style.display = "none";
    var rating = document.getElementById("rating").innerHTML = "<b> YSeries Rating: </b><rating> 10/9.2 </rating>";
    var showcover = document.getElementById("showcover").style.backgroundImage ="url(./images/breakingbad.jpg)";
    var trailer = document.getElementById("trailer").href = "https://www.youtube.com/watch?v=HhesaQXLuRY";
    
    var randomwatching;
    randomwatching = formatNum(Math.floor(Math.random()*250+1500));
    var randomwatched;
    randomwatched = formatNum(Math.floor(Math.random()*10000+1200000));


var peoplewatched = document.getElementById("peoplewatched").innerHTML = randomwatched + " people watched.";
var peoplewatching = document.getElementById("peoplewatching").innerHTML = randomwatching + " people are watching.";

}

function strangerthings(){
    var title = document.getElementById("title").innerText = "STRANGER THINGS";
    title = document.getElementById("title").style.fontFamily = "Benguiat Bold";
    title = document.getElementById("title").style.fontSize = "42pt"
    var seriesinfo = document.getElementById("seriesinfo").innerText = "TV SERIES - 3 Seasons - 2016/2019";
    var description = document.getElementById("description").innerText = "When a young boy vanishes, a small town uncovers a mystery involving secret experiments, terrifying supernatural forces and one strange little girl.";
    var presents = document.getElementById("presents").innerHTML =" <b>Netflix</b> presents.";
    var creator = document.getElementById("creator").innerHTML = "Developed by <b> The Duffer Brothers </b>";
    var based = document.getElementById("based").style.display = "none";
    var rating = document.getElementById("rating").innerHTML = "<b> YSeries Rating: </b><rating> 10/8.7 </rating>";
    var showcover = document.getElementById("showcover").style.backgroundImage ="url(./images/strangerthings.jpg)";
    var trailer = document.getElementById("trailer").href = "https://www.youtube.com/watch?v=mnd7sFt5c3A";
    
    var randomwatching;
    randomwatching = formatNum(Math.floor(Math.random()*500+500));
    var randomwatched;
    randomwatched = formatNum(Math.floor(Math.random()*4500+650000));


var peoplewatched = document.getElementById("peoplewatched").innerHTML = randomwatched + " people watched.";
var peoplewatching = document.getElementById("peoplewatching").innerHTML = randomwatching + " people are watching.";

}

function sherlockholmes(){
    var title = document.getElementById("title").innerText = "Sherlock Holmes";
    title = document.getElementById("title").style.fontFamily = "SHERLOCK HOLMES";
    title = document.getElementById("title").style.fontSize = "52pt"
    var seriesinfo = document.getElementById("seriesinfo").innerText = "TV SERIES - 4 Seasons - 2010/2017";
    var description = document.getElementById("description").innerText = "Sherlock is a British crime television series based on Sir Arthur Conan Doyle's Sherlock Holmes detective stories. Created by Steven Moffat and Mark Gatiss, it stars Benedict Cumberbatch as Sherlock Holmes and Martin Freeman as Doctor John Watson.";
    var presents = document.getElementById("presents").innerHTML =" <b>BBC</b> presents.";
    var creator = document.getElementById("creator").innerHTML = "Developed by <b> Mark Gatiss & Steven Moffat </b>";
    var based = document.getElementById("based").style.display = "block";
    var based = document.getElementById("based").innerHTML = "Based on Sherlock Holmes by Sir Arthur Conan Doyle";
    var rating = document.getElementById("rating").innerHTML = "<b> YSeries Rating: </b><rating> 10/9.1 </rating>";
    var showcover = document.getElementById("showcover").style.backgroundImage ="url(./images/sherlockholmes.jpg)";
    var trailer = document.getElementById("trailer").href = "https://www.youtube.com/watch?v=J7nJksXDBWc";
    
    var randomwatching;
    randomwatching = formatNum(Math.floor(Math.random()*550+1800));
    var randomwatched;
    randomwatched = formatNum(Math.floor(Math.random()*50000+925000));


var peoplewatched = document.getElementById("peoplewatched").innerHTML = randomwatched + " people watched.";
var peoplewatching = document.getElementById("peoplewatching").innerHTML = randomwatching + " people are watching.";

}

function blackmirror(){
    var title = document.getElementById("title").innerText = "BLACK MIRROR";
    title = document.getElementById("title").style.fontFamily = "SLiCE n DiCE";
    title = document.getElementById("title").style.fontSize = "52pt"
    var seriesinfo = document.getElementById("seriesinfo").innerText = "TV SERIES - 5 Seasons - 2011/2019";
    var description = document.getElementById("description").innerText = "Black Mirror is a British anthology television series created by Charlie Brooker. Individual episodes explore a diversity of genres, but most are near-future dystopias utilising a science fiction technology—a type of speculative fiction. The series is based on The Twilight Zone and uses technology to comment on contemporary social issues.";
    var presents = document.getElementById("presents").innerHTML =" <b>Netflix</b> presents.";
    var creator = document.getElementById("creator").innerHTML = "Developed by <b> Charlie Brooker </b>";
    var based = document.getElementById("based").style.display = "none";
    var rating = document.getElementById("rating").innerHTML = "<b> YSeries Rating: </b><rating> 10/9 </rating>";
    var showcover = document.getElementById("showcover").style.backgroundImage ="url(./images/blackmirror.jpg)";
    var trailer = document.getElementById("trailer").href = "https://www.youtube.com/watch?v=jROLrhQkK78";
    
    var randomwatching;
    randomwatching = formatNum(Math.floor(Math.random()*250+800));
    var randomwatched;
    randomwatched = formatNum(Math.floor(Math.random()*7000+450000));


var peoplewatched = document.getElementById("peoplewatched").innerHTML = randomwatched + " people watched.";
var peoplewatching = document.getElementById("peoplewatching").innerHTML = randomwatching + " people are watching.";

}

function fastandfurious(){
    var title = document.getElementById("title").innerText = "FAST AND FURIOUS 9";
    title = document.getElementById("title").style.fontFamily = "AntiqueOliveStd-NordItalic";
    title = document.getElementById("title").style.fontSize = "42pt"
    var seriesinfo = document.getElementById("seriesinfo").innerText = "Film - 2 hours 15 minutes - 2021";
    var description = document.getElementById("description").innerText = "F9 (also known as F9: The Fast Saga and internationally as Fast & Furious 9) is a 2021 American action film directed by Justin Lin from a screenplay by Daniel Casey and Lin. It is the sequel to The Fate of the Furious (2017), the ninth main installment, and the tenth full-length film in the Fast & Furious franchise.";
    var presents = document.getElementById("presents").innerHTML =" <b>Universal Pictures</b> presents.";
    var creator = document.getElementById("creator").innerHTML = "Directed by <b> Justin Lin </b>";
    var based = document.getElementById("based").style.display = "none";
    var rating = document.getElementById("rating").innerHTML = "<b> YSeries Rating: </b><rating> 10/7.8 </rating>";
    var showcover = document.getElementById("showcover").style.backgroundImage ="url(./images/fastandfurious9.jpg)";
    var trailer = document.getElementById("trailer").href = "https://www.youtube.com/watch?v=_qyw6LC5pnE";
   
    var randomwatching;
    randomwatching = formatNum(Math.floor(Math.random()*1250+16500));
    var randomwatched;
    randomwatched = formatNum(Math.floor(Math.random()*80000+2750000));


var peoplewatched = document.getElementById("peoplewatched").innerHTML = randomwatched + " people watched.";
var peoplewatching = document.getElementById("peoplewatching").innerHTML = randomwatching + " people are watching.";

}

function addToList(){

    document.getElementById("addToList").style.display = "flex";
    
    function closeHelpDiv(){
        document.getElementById("addToList").style.display=" none";
        }
        
        // close the div in 5 secs
        window.setTimeout( closeHelpDiv, 2500 );

}

// var title = document.getElementById("title").innerHTML;
// var seriesinfo = document.getElementById("seriesinfo").innerHTML;
// var description = document.getElementById("description").innerHTML;
// var presents = document.getElementById("presents").innerHTML;
// var creator = document.getElementById("creator").innerHTML;
// var based = document.getElementById("based").innerHTML;
// var rating = document.getElementById("rating").innerHTML;