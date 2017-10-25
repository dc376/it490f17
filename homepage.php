<!DOCTYPE html>
<html>
<head>
<title>Kehoe's Bros Betting</title>
<style>
body {margin: 0;}
#css1{
  background-color: black;
  background-position: right bottom;
  background-repeat: repeat;
  padding: .5px;
}
.topnav{
    overflow: hidden;
    background-color:darkgrey;
    }
.topnav a{
    float: left;
    display: block;
    color: white;
    text-align: center;
    padding: 5px 10px;
    text-decoration: none;
    font-size: 10px;
    }
.topnav a:hover{
    background-color: lightblue;
    color: white;
}
.topnav a.active{
    background-color: #ee2211;
    color: red;
}   
.box1{
    position: relative;
    margin: auto;
    float: center;
    width: 400px;
    font-family:"georgia";
    height: 100px;
    background-color: pink;
    text-align: left;
    padding-left: .5cm;
    padding-top: .05cm;
    padding-bottom: .8cm;
}
    
</style>

</head>

<body>
<div id = "css1">
<h3><font face="georgia" size="5" color="white">Kehoe's Bros Betting</font></h3>
    <div class="topnav" id="firstTopNav">
        <a href="homepage.php">HOME</a>
        <a href="deposit.php">DEPOSIT</a>
        <a href="about.php">ABOUT</a>
        <a href="compareResults.php">RESULTS</a>
    </div>
</div>
</body>
</style>

<!--This is for SEARCH BAR!-->

</head>
<!--<body background = "https://www.bookmakers.bet/wp-content/uploads/2016/12/Fantasy-Football-NFL-Images-2014.jpg">-->
<body>
<center>
<style>
    { margin: 0; padding: 0; }
    html {
        background: url('https://i.pinimg.com/originals/2c/ba/0c/2cba0cb95b6bfdad2a7699490309d8ff.jpg') no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
</style>

<style>

.div1, .div2, .div3{
 
    position: relative;
    margin: 1%;
    float: center;
    width: 23%;
    height: 60px;
    background-color: lightgrey;
}

</style>
<br>
<body>
<center>

<center>
<br>
<form action="team.php" method="get">
    <input list="browsers" name="browser" placeholder="Select team..." style="width: 500px; margin: 0 auto; padding: 15px 32px; text-align: center; text-decoration: none; font-size: 20px; margin: 4px 2px; cursor: pointer;"/>
    <datalist id ="browsers">
        <option value="Arizona Cardinals">Arizona Cardinals</option>
        <option value="Atlanta Falcons">Atlanta Falcons</option>
        <option value="Baltimore Ravens">Baltimore Ravens</option>
        <option value="Buffalo Bills">Buffalo Bills</option>
        <option value="Carolina Panthers">Carolina Panthers</option>
        <option value="Chicago Bears">Chicago Bears</option>
        <option value="Cincinnati Bengals">Cincinnati Bengals</option>
        <option value="Cleveland Browns">Cleveland Browns</option>
        <option value="Dallas Cowboys">Dallas Cowboys</option>
        <option value="Denver Broncos">Denver Broncos</option>
        <option value="Detroit Lions">Detroit Lions</option>
        <option value="Green Bay Packers">Green Bay Packers</option>
        <option value="Houston Texans">Houston Texans</option>
        <option value="Indianapolis Colts">Indianapolis Colts</option>
        <option value="Jacksonville Jaguars">Jacksonville Jaguars</option>
        <option value="Kansas City Chiefs">Kansas City Chiefs</option>
        <option value="Los Angeles Chargers">Los Angeles Chargers</option>
        <option value="Los Angeles Rams">Los Angeles Rams</option>
        <option value="Miami Dolphins">Miami Dolphins</option>
        <option value="Minnesota Vikings">Minnesota Vikings</option>
        <option value="New England Patriots">New England Patriots</option>
        <option value="New Orleans Saints">New Orleans Saints</option>
        <option value="New York Giants">New York Giants</option>
        <option value="New York Jets">New York Jets</option>
        <option value="Oakland Raiders">Oakland Raiders</option>
        <option value="Philadelphia Eagles">Philadelphia Eagles</option>
        <option value="Pittsburgh Steelers">Pittsburgh Steelers</option>
        <option value="San Francisco 49ers">San Francisco 49ers</option>
        <option value="Seattle Seahawks">Seattle Seahawks</option>
        <option value="Tampa Bay Buccaneers">Tampa Bay Buccaneers</option>
        <option value="Tennessee Titans">Tennessee Titans</option>
        <option value="Washington Redskins">Washington Redskins</option>
    </datalist>
    <input type="submit" value="Submit" style="background-color: #ffffff; border: none;
    color: black; font-family: impact; letter-spacing: 1px; padding: 15px 32px;btext-align: center; text-decoration: none;
    display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer;"/>
</center>
</form>

<div class="div1">
<center>
<form action="bet.php" method="get">
  <font face="impact"color="black" size="5"><b>Quarterback</b></font>
  <br>
  <select id = "qb" name="qb" style="width: 200px; border: 0px solid; padding: 5px; color: #000; background-color: #f1f1f1;  font-family: calibri; text-transform: uppercase; font-size: 10px; letter-spacing: 1px;">
<option value="">Quarterback</option>
<!--1--><option value="Brian Hoyer">Brian Hoyer</option>
<!--2--><option value="Josh McCown">Josh McCown</option>
<!--3--><option value="Tom Savage">Tom Savage</option>
<!--4--><option value="Mike Glennon">Mike Glennon</option>
<!--5--><option value="Jared Goff">Jared Goff</option>
<!--6--><option value="Blake Bortles">Blake Bortles</option>
<!--7--><option value="Deshone Kizer">Deshone Kizer</option>
<!--8--><option value="Carson Wentz">Carson Wentz</option>
<!--9--><option value="Trevor Siemian">Trevor Siemian</option>
<!--10--><option value="Jay Cutler">Jay Cutler</option>
<!--11--><option value="Joe Flacco">Joe Flacco</option>
<!--12--><option value="Tyrod Taylor">Tyrod Taylor</option>
<!--13--><option value="Kirk Cousins">Kirk Cousins</option>
<!--14--><option value="Alex Smith">Alex Smith</option>
<!--15--><option value="Andy Dalton">Andy Dalton</option>
<!--16--><option value="Marcus Mariota">Marcus Mariota</option>
<!--17--><option value="Jameis Winston">Jameis Winston</option>
<!--18--><option value="Derek Carr">Derek Carr</option>
<!--19--><option value="Eli Manning">Eli Manning</option>
<!--20--><option value="Sam Bradford">Sam Bradford</option>
<!--21--><option value="Dak Prescott">Dak Prescott</option>
<!--22--><option value="Matthew Stafford">Matthew Stafford</option>
<!--23--><option value="Carson Palmer">Carson Palmer</option>
<!--24--><option value="Philip Rivers">Philip Rivers</option>
<!--25--><option value="Matt Ryan">Matt Ryan</option>
<!--26--><option value="Cam Newton">Cam Newton</option>
<!--27--><option value="Russell Wilson">Russell Wilson</option>
<!--28--><option value="Ben Roethlisberger">Ben Roethlisberger</option>
<!--29--><option value="Andrew Luck">Andrew Luck</option>
<!--30--><option value="Drew Brees">Drew Brees</option>
<!--31--><option value="Aaron Rodgers">Aaron Rodgers</option>
<!--32--><option value="Tom Brady">Tom Brady</option>
</select>
<!--<input value="Select" type="bu/>-->
</center>
</div>


<div class="div2">
<center>
<form action="bet.php" method="get">
  <font face="impact"color="black" size="5"><b>Running back</b></font>
  <br>
  <select id = "rb" name="rb" style="width: 200px; border: 0px solid; padding: 5px; color: #000; background-color: #f1f1f1;  font-family: calibri; text-transform: uppercase; font-size: 10px; letter-spacing: 1px;">
<option value="">Running back</option>
<option value="LeSean McCoy">LeSean McCoy</option>
<option value="Jay Ajayi">Jay Ajayi</option>
<option value="Dion Lewis">Dion Lewis</option>
<option value="James White">James White</option>
<option value="Elijah McGuire">Elijah McGuire</option>
<option value="Bilal Powell">Bilal Powell</option>
<option value="Mike Tolbert">Mike Tolbert</option>
<option value="Damien Williams">Damien Williams</option>
<option value="Rex Burkhead">Rex Burkhead</option>
<option value="Mike Gillislee">Mike Gillislee</option>
<option value="Matt Forte">Matt Forte</option>
<option value="Travaris Cadet">Travaris Cadet</option>
<option value="Joe Banyard">Joe Banyard</option>
<option value="Kenyan Drake">Kenyan Drake</option>
<option value="James Develin">James Develin</option>
<option value="Brandon Bolden">Brandon Bolden</option>
<option value="Taiwan Jones">Taiwan Jones</option>
<option value="Senorise Perry">Senorise Perry</option>
<option value="Alex Collins">Alex Collins</option>
<option value="Jeremy Hill">Jeremy Hill</option>
<option value="Isaiah Crowell">Isaiah Crowell</option>
<option value="Le'Veon Bell">Le'Veon Bell</option>
<option value="Terrance West">Terrance West</option>
<option value="Giovani Bernard">Giovani Bernard</option>
<option value="Duke Johnson">Duke Johnson</option>
<option value="James Conner">James Conner</option>
<option value="Lamar Miller">Lamar Miller</option>
<option value="Frank Gore">Frank Gore</option>
<option value="Leonard Fournette">Leonard Fournette</option>
<option value="DeMarco Murray">DeMarco Murray</option>
<option value="D'Onta Foreman">D'Onta Foreman</option>
<option value="Robert Turbin">Robert Turbin</option>
<option value="Chris Ivory">Chris Ivory</option>
<option value="Derrick Henry">Derrick Henry</option>
<option value="CJ Anderson">CJ Anderson</option>
<option value="Kareem Hunt">Kareem Hunt</option>
<option value="Melvin Gordon III">Melvin Gordon III</option>
<option value="Marshawn Lynch">Marshawn Lynch</option>
<option value="Jamaal Charles">Jamaal Charles</option>
<option value="Charcandrick West">Charcandrick West</option>
<option value="Branden Oliver">Branden Oliver</option>
<option value="Jalen Richard">Jalen Richard</option>
<option value="Alfred Morris">Alfred Morris</option>
<option value="Paul Perkins">Paul Perkins</option>
<option value="Legarrette Blount">Legarrette Blount</option>
<option value="Chris Thompson">Chris Thompson</option>
<option value="Darren McFadden">Darren McFadden</option>
<option value="Shane Vereen">Shane Vereen</option>
<option value="Wendell Smallwood">Wendell Smallwood</option>
<option value="Rob Kelley">Rob Kelley</option>
<option value="Jordan Howard">Jordan Howard</option>
<option value="Ameer Abdullah">Ameer Abdullah</option>
<option value="Theo Riddick">Theo Riddick</option>
<option value="Ty Montgomery">Ty Montgomery</option>
<option value="Latavius Murray">Latavius Murray</option>
<option value="Tarik Cohen">Tarik Cohen</option>
<option value="Zach Zenner">Zach Zenner</option>
<option value="Dwayne Washington">Dwayne Washington</option>
<option value="Aaron Jones">Aaron Jones</option>
<option value="Jerrick McKinnon">Jerrick McKinnon</option>
<option value="Devonta Freeman">Devonta Freeman</option>
<option value="Jonathan Stewart">Jonathan Stewart</option>
<option value="Alvin Kamara">Alvin Kamara</option>
<option value="Doug Martin">Doug Martin</option>
<option value="Tevin Coleman">Tevin Coleman</option>
<option value="Christian McCaffrey">Christian McCaffrey</option>
<option value="Mark Ingram">Mark Ingram</option>
<option value="Jacquizz Rodgers">Jacquizz Rodgers</option>
<option value="Adrian Peterson">Adrian Peterson</option>
<option value="Todd Gurley">Todd Gurley</option>
<option value="Carlos Hyde">Carlos Hyde</option>
<option value="Thomas Rawls">Thomas Rawls</option>
<option value="Kerwynn Williams">Kerwynn Williams</option>
<option value="Malcolm Brown">Malcolm Brown</option>
<option value="Matt Breida">Matt Breida</option>
<option value="Eddie Lacy">Eddie Lacy</option>
<option value="Javorius Allen">Javorius Allen</option>
<option value="Joe Mixon">Joe Mixon</option>
<option value="Matt Dayes">Matt Dayes</option>
<option value="Terrell Watson">Terrell Watson</option>
<option value="Bobby Rainey">Bobby Rainey</option>
<option value="Alfred Blue">Alfred Blue</option>
<option value="Marlon Mack">Marlon Mack</option>
<option value="TJ Yeldon">TJ Yeldon</option>
<option value="David Fluellen">David Fluellen</option>
<option value="Jordan Todman">Jordan Todman</option>
<option value="Matt Jones">Matt Jones</option>
<option value="Corey Grant">Corey Grant</option>
<option value="Devontae Booker">Devontae Booker</option>
<option value="Akeem Hunt">Akeem Hunt</option>
<option value="Austin Ekeler">Austin Ekeler</option>
<option value="DeAndre Washington">DeAndre Washington</option>
<option value="De'Angelo Henderson">De'Angelo Henderson</option>
<option value="Andre Williams">Andre Williams</option>
<option value="Rod Smith">Rod Smith</option>
<option value="Orleans Darkwa">Orleans Darkwa</option>
<option value="Corey Clement">Corey Clement</option>
<option value="Samaje Perine">Samaje Perine</option>
<option value="Wayne Gallman">Wayne Gallman</option>
<option value="Kenjon Barner">Kenjon Barner</option>
<option value="Mack Brown">Mack Brown</option>
<option value="Benny Cunningham">Benny Cunningham</option>
<option value="Tion Green">Tion Green</option>
<option value="Jamaal Williams">Jamaal Williams</option>
<option value="Taquan Mizzell">Taquan Mizzell</option>
<option value="Devante Mays">Devante Mays</option>
<option value="Terron Ward">Terron Ward</option>
<option value="Fozzy Whittaker">Fozzy Whittaker</option>
<option value="Trey Edmunds">Trey Edmunds</option>
<option value="Charles Sims">Charles Sims</option>
<option value="Peyton Barber">Peyton Barber</option>
<option value="Cameron Artis-Payne">Cameron Artis-Payne</option>
<option value="Andre Ellington">Andre Ellington</option>
<option value="Justin Davis">Justin Davis</option>
<option value="Raheem Mostert">Raheem Mostert</option>
<option value="Justin Davis">Justin Davis</option>
<option value="Raheem Mostert">Raheem Mostert</option>
<option value="CJ Prosise">CJ Prosise</option>
<option value="Elijhaa Penny">Elijhaa Penny</option>
<option value="JD McKissic">JD McKissic</option>
<option value="DJ Foster">DJ Foster</option>
</select>
<!--<input value="Select" type="submit"/>-->
</center>
</div>

<div class="div3">
<center>
<form action="bet.php" method="get">
  <font face="impact"color="black" size="5"><b>Wide receiver</b></font>
  <br>
  <select id = "wr" name="wr" style="width: 200px; border: 0px solid; padding: 5px; color: #000; background-color: #f1f1f1;  font-family: calibri; text-transform: uppercase; font-size: 10px; letter-spacing: 1px;">
<option value="">Wide receiver</option>
<option value="Jordan Matthews">Jordan Matthews</option>
<option value="Zay Jones">Zay Jones</option>
<option value="Kenny Stills">Kenny Stills</option>
<option value="DeVante Parker">DeVante Parker</option>
<option value="Jarvis Landry">Jarvis Landry</option>
<option value="Brandin Cooks">Brandin Cooks</option>
<option value="Chris Hogan">Chris Hogan</option>
<option value="Robby Anderson">Robby Anderson</option>
<option value="Jermaine Kearse">Jermaine Kearse</option>
<option value="Brandon Tate">Brandon Tate</option>
<option value="Andre Holmes">Andre Holmes</option>
<option value="Leonte Carroo">Leonte Carroo</option>
<option value="Jakeem Grant">Jakeem Grant</option>
<option value="Danny Amendola">Danny Amendola</option>
<option value="Phillip Dorsett">Phillip Dorsett</option>
<option value="ArDarius Stewart">ArDarius Stewart</option>
<option value="Jeremy Kerley">Jeremy Kerley</option>
<option value="Kaelin Clay">Kaelin Clay</option>
<option value="Matthew Slater">Matthew Slater</option>
<option value="Chad Hansen">Chad Hansen</option>
<option value="Breshad Perriman">Breshad Perriman</option>
<option value="Mike Wallace">Mike Wallace</option>
<option value="AJ Green">AJ Green</option>
<option value="Brandon Lafell">Brandon Lafell</option>
<option value="Rashard Higgins">Rashard Higgins</option>
<option value="Kenny Brit">Kenny Brit</option>
<option value="Antonio Brown">Antonio Brown</option>
<option value="Michael Campanaro">Michael Campanaro</option>
<option value="Chris Moore">Chris Moore</option>
<option value="Cody Core">Cody Core</option>
<option value="Tyler Core">Tyler Core</option>
<option value="Sammie Coates">Sammie Coates</option>
<option value="Ricardo Louis">Ricardo Louis</option>
<option value="Eli Rogers">Eli Rogers</option>
<option value="Darrius Heyward-Bey">Darrius Heyward-Bey</option>
<option value="Josh Malone">Josh Malone</option>
<option value="John Ross">John Ross</option>
<option value="Bryce Treggs">Bryce Treggs</option>
<option value="Kasen Williams">Kasen Williams</option>
<option value="JuJu Smith-Schuster">JuJu Smith-Schuster</option>
<option value="Justin Hunter">Justin Hunter</option>
<option value="Alex Erickson">Alex Erickson</option>
<option value="DeAndre Hopkins">DeAndre Hopkins</option>
<option value="Will Fuller">Will Fuller</option>
<option value="TY Hilton">TY Hilton</option>
<option value="Donte Moncrief">Donte Moncrief</option>
<option value="Marqise Lee">Marqise Lee</option>
<option value="Allen Hurns">Allen Hurns</option>
<option value="Rishard Matthews">Rishard Matthews</option>
<option value="Eric Decker">Eric Decker</option>
<option value="Bruce Ellington">Bruce Ellington</option>
<option value="Braxton Miller">Braxton Miller</option>
<option value="Chester Rogers">Chester Rogers</option>
<option value="Kamar Aiken">Kamar Aiken</option>
<option value="Arrelious Benn">Arrelious Benn</option>
<option value="Keelan Cole">Keelan Cole</option>
<option value="Taywan Taylor">Taywan Taylor</option>
<option value="Darius Jennings">Darius Jennings</option>
<option value="Chris Thompson">Chris Thompson</option>
<option value="Quan Bray">Quan Bray</option>
<option value="Jaelen Strong">Jaelen Strong</option>
<option value="Maxwell McCaffrey">Maxwell McCaffrey</option>
<option value="Eric Weems">Eric Weems</option>
<option value="Corey Davis">Corey Davis</option>
<option value="Demaryius Thomas">Demaryius Thomas</option>
<option value="Emmanuel Sanders">Emmanuel Sanders</option>
<option value="Tyreek Hill">Tyreek Hill</option>
<option value="De'Anthony Thomas">De'Anthony Thomas</option>
<option value="Keenan Allen">Keenan Allen</option>
<option value="Tyrell Williams">Tyrell Williams</option>
<option value="Michael Crabtree">Michael Crabtree</option>
<option value="Amari Cooper">Amari Cooper</option>
<option value="Bennie Fowler">Bennie Fowler</option>
<option value="Cody Latimer">Cody Latimer</option>
<option value="Albert Wilson">Albert Wilson</option>
<option value="Jehu Chesson">Jehu Chesson</option>
<option value="Dontrelle Inman">Dontrelle Inman</option>
<option value="Travis Benjamin">Travis Benjamin</option>
<option value="Seth Roberts">Seth Roberts</option>
<option value="Cordarrelle Patterson">Cordarrelle Patterson</option>
<option value="Dez Bryant">Dez Bryant</option>
<option value="Terrance Williams">Terrance Williams</option>
<option value="Cole Beasley">Cole Beasley</option>
<option value="Roger Lewis">Roger Lewis</option>
<option value="Tavarres King">Tavarres King</option>
<option value="Sterlong Shepard">Sterlong Shepard</option>
<option value="Alshon Jeffery">Alshon Jeffery</option>
<option value="Torrey Smith">Torrey Smith</option>
<option value="Nelson Agholor">Nelson Agholor</option>
<option value="Terrelle Pryor Sr">Terrelle Pryor Sr</option>
<option value="Jamison Crowder">Jamison Crowder</option>
<option value="Vernon Davis">Vernon Davis</option>
<option value="Brice Butler">Brice Butler</option>
<option value="Noah Brown">Noah Brown</option>
<option value="Ryan Switzer">Ryan Switzer</option>
<option value="Travis Rudolph">Travis Rudolph</option>
<option value="Ed Eagan">Ed Eagan</option>
<option value="Marcus Johnson">Marcus Johnson</option>
<option value="Mack Hollins">Mack Hollins</option>
<option value="Josh Doctson">Josh Doctson</option>
<option value="Ryan Grant">Ryan Grant</option>
<option value="Josh Doctson">Josh Doctson</option>
<option value="Kendall Wright">Kendall Wright</option>
<option value="Josh Bellamy">Josh Bellamy</option>
</select>
<br>
<br>
<input value="Select" type="submit"/>
</center>
</div>
<!--<input value="SELECT" type ="button" onclick="sndReq()"/>-->
<!--<button class ="btn btn-lg btn-primary btn-block" type="button" onclick="sndReq()">Submit</button>-->
</center>
</center>
<br>
<br>
<center>
</center>
<br>
</body>
</body>
</html>
