<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>QuizOnn</title>
  <link rel="shortcut icon" type="image/x-icon" href="icon1.png">
  <link rel="stylesheet" type="text/css" href="navbar.css">
  <link rel="stylesheet" type="text/css" href="sidebar.css">
  <link rel="stylesheet" type="text/css" href="game.css">
</head>
<body bgcolor="#000d1a">

  <div>
    <p class="fl" style="color: yellow; font-family: viner hand itc; font-size: 40px;padding-left: 15px;">QuizOnn</p>
    <p class="fr" style="color: red; font-family: monotype corsiva; font-size: 30px;padding-right: 15px;"><?php echo "Welcome " . $_SESSION["n"] . "<br>";?></p>
  </div>
  <br><br><br><br>
  <hr noshade="none">
<div class="topnav">
  <a href="log.php">Logout</a>
  <a href="profile.php">My Profile</a>
  <a href="1st page.php #article">Articles</a>
  <a href="#home" style="cursor: pointer;" onclick="openNav()">Categories</a>
</div>

<div style="padding-left:16px">
</div>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="tv.php">TV Series</a>
  <a href="movies.php">Movies</a>
  <a href="science.php">Science</a>
  <a href="books.php">Books</a>
  <a href="technology.php">Technology</a>
  <a href="knowurworld.php">Know Your World</a>
  <a href="sports.php">Sports</a>
</div>

<div id="main">
  <span style="font-size:30px" onclick="openNav()"></span>
</div>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    document.body.style.backgroundColor = "#000d1a";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    document.body.style.backgroundColor = "#000d1a";
}
</script>

<div class="container1">
  <p class="text">Game of Thrones</p>
  <img src="got.jpg" alt="Game of Thrones" class="image" style="width: 270px; height: 350px;">
</div>
<!--
<div class="container2">

  <p class="round" id="que">Which army is led by Grey Worm?<br><br><br>
  <button class="button" id="but" onClick="wrong('but')" value="bara">Baratheon</button><br>
  <button class="button" id="but1" onClick="right('but1')">Unsullied</button><br>
  <button class="button" id="but2" onClick="wrong('but2')">Lannister</button><br>
  <button class="button" id="but3" onClick="wrong('but3')">Stark</button>
</p>
</div>-->
<div class="container2">
<?php
$connection = mysqli_connect("localhost", "root", "","quizonn"); // Establishing Connection with Server
 // $db = mysqli_select_db("quizonn", $connection); // Selecting Database from Server
  //echo "established";
  
   $sql = "SELECT ques,a,b,c,d FROM qasp WHERE id=75";
  $result=mysqli_query($connection,$sql);
  while($row = mysqli_fetch_assoc($result))
  {?>
      <p class="round" id="que"><?php echo $row["ques"]?>
  <button class="button" id="but1" onclick="wrong('but1')"><?php echo $row["a"]?></button><br>
  <button class="button" id="but2" onclick="right('but2')"><?php echo $row["b"]?></button><br>
  <button class="button" id="but3" onclick="wrong('but3')"><?php echo $row["c"]?></button><br>
  <button class="button" id="but4" onclick="wrong('but4')"><?php echo $row["d"]?></button></p>
   <?php
  }
//Insert Query of SQL
/*$query = mysql_query("insert into acc(uname, psw) values ('$name', '$psw')");
echo "<br/><br/><span>Data Inserted successfully...!!</span>";
*/


// Closing Connection with Server
//echo '<script>setTimeout(as(), 1000);</script>'
?>

<script type="text/javascript">


function wrong(but){
      var but=document.getElementById(but);
      but.style.backgroundColor="red";
      setTimeout(function() {window.location.reload();}, 2000);
}

function right(but1){
      var but=document.getElementById(but1);
      but.style.backgroundColor="green";
     // window.location.reload();
      setTimeout(function() {window.location.reload();}, 2000);
}

</script>
</div>
<div class="container3">

<canvas id="canvas" width="200" height="200"
style="background-color:#000d1a">
</canvas>
<p class="text" style="text-align: left; margin-top: 150px;">Score: 200</p>
</div>

<script>
var canvas = document.getElementById("canvas");
var ctx = canvas.getContext("2d");
var radius = canvas.height / 2;
ctx.translate(radius, radius);
radius = radius * 0.90
setInterval(drawClock, 1000);

function drawClock() {
  drawFace(ctx, radius);
  drawNumbers(ctx,radius);
  drawTime(ctx, radius);
}

function drawFace(ctx, radius) {
  var grad;
  ctx.beginPath();
  ctx.arc(0, 0, radius, 0, 2*Math.PI);
  ctx.fillStyle = 'white';
  ctx.fill();
  grad = ctx.createRadialGradient(0,0,radius*0.95, 0,0,radius*1.05);
  grad.addColorStop(0, '#000d1a');
  grad.addColorStop(0.5, 'white');
  grad.addColorStop(1, '#000d1a');
  ctx.strokeStyle = grad;
  ctx.lineWidth = radius*0.1;
  ctx.stroke();
  ctx.beginPath();
  ctx.arc(0, 0, radius*0.05, 0, 2*Math.PI);
  ctx.fillStyle = '#000d1a';
  ctx.fill();
}

function drawNumbers(ctx, radius) {
  var ang;
  var num;
  ctx.font = radius*0.15 + "px arial";
  ctx.textBaseline="middle";
  ctx.textAlign="center";
    ang = num * Math.PI / 6;
    ctx.rotate(ang);
    ctx.translate(0, -radius*0.85);
    ctx.rotate(-ang);
    ctx.fillText('|', 0, 0);
    ctx.fillStyle='#000d1a';
    ctx.fill();
    ctx.rotate(ang);
    ctx.translate(0, radius*0.85);
    ctx.rotate(-ang);
}

function drawTime(ctx, radius){
    var now = new Date();
    var hour = now.getHours();
    var minute = now.getMinutes();
    var second = now.getSeconds();
    //hour
    hour=hour%12;
    hour=(hour*Math.PI/6)+
    (minute*Math.PI/(6*60))+
    (second*Math.PI/(360*60));
    //minute
    minute=(minute*Math.PI/30)+(second*Math.PI/(30*60));
    // second
    second=(second*Math.PI/5);
    drawHand(ctx, second, radius*0.9, radius*0.02);
}

function drawHand(ctx, pos, length, width) {
    ctx.beginPath();
    ctx.lineWidth = width;
    ctx.lineColor = 'white';
    ctx.lineCap = "round";
    ctx.moveTo(0,0);
    ctx.rotate(pos);
    ctx.lineTo(0, -length);
    ctx.stroke();
    ctx.rotate(-pos);
}
</script>

</body>
</html>
