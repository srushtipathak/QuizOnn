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
    $id=rand(1,15);
    //echo "inserted";
  $sql2 = "SELECT id FROM session";
  $result2=mysqli_query($connection,$sql2);
    if (mysqli_num_rows($result2)>6) {
    # code...
      $s = "TRUNCATE session";
      $re = mysqli_query($connection,$s);
      header('Location: 1st page.php');
  }
  while($r = mysqli_fetch_assoc($result2))
  {
    if ($r["id"]==$id) {
      # code...

      echo $r["id"];
      $sql8 = "SELECT * FROM acc WHERE uname like 'avdhi'";
      $r8 = mysqli_query($connection,$sql8);
      $s8 = mysqli_fetch_assoc($r8);
      $b8=$s8["tv"];
      $sql9="UPDATE acc SET tv='$b1' WHERE uname like 'avdhi'";
      $r9 = mysqli_query($connection,$sql9);
      header("Refresh:0");
    }
  }
  
   $sql = "SELECT ques,a,b,c,d FROM qatv WHERE id='$id'";
  $result=mysqli_query($connection,$sql);
  $sql1 = "INSERT INTO session VALUES ($id)";
  $result1=mysqli_query($connection,$sql1);
  while($row = mysqli_fetch_assoc($result))
  {?>
      <p class="round" id="que"><?php echo $row["ques"]?>
  <button class="button" name="b1" id="but1" onclick="ch('b1')" value="<?php echo $row["a"]?>"><?php echo $row["a"]?></button><br>
  <button class="button" name="b2" id="but2" onclick="ch('b2')" value="<?php echo $row["b"]?>"><?php echo $row["b"]?></button><br>
  <button class="button" name="b3" id="but3" onclick="ch('b3')" value="<?php echo $row["c"]?>"><?php echo $row["c"]?></button><br>
  <button class="button" name="b4" id="but4" onclick="ch('b4')" value="<?php echo $row["d"]?>"><?php echo $row["d"]?></button></p>
  <script type="text/javascript">
  setTimeout(function() {window.location.reload();}, 10000);
  </script>
   <?php
  }
//Insert Query of SQL
/*$query = mysql_query("insert into acc(uname, psw) values ('$name', '$psw')");
echo "<br/><br/><span>Data Inserted successfully...!!</span>";
*/


// Closing Connection with Server
//echo '<script>setTimeout(as(), 1000);</script>'
?>

<?php
$sql3 = "SELECT ans FROM qatv WHERE id='$id'";
$res3 = mysqli_query($connection,$sql3);
$r = mysqli_fetch_assoc($res3);
 $a1=$r["ans"];

  ?>
  <script type="text/javascript">
  
function ch(b){
  var i=document.getElementsByName(b)[0].value;
  var a1="<?php echo $a1; ?>";
  if(i==a1){
    right(b);
  }
  else{
    wrong(b);
  }
}

function wrong(but){
      var but=document.getElementsByName(but)[0];
      but.style.backgroundColor="red";
    <?php
      $sql3 = "SELECT * FROM acc WHERE uname like 'avdhi'";
      $r3 = mysqli_query($connection,$sql3);
      $s1 = mysqli_fetch_assoc($r3);
      $b1=$s1["tv"];
      $sql6="UPDATE acc SET tv='$b1' WHERE uname like 'avdhi'";
      $r6 = mysqli_query($connection,$sql6);
      ?>
      var a1="<?php echo $s1["tv"]; ?>";
      alert(a1);
      var a2="<?php echo $b1; ?>";
      alert(a2);
      setTimeout(function() {window.location.reload();}, 0);
}

function right(but1){
      var but=document.getElementsByName(but1)[0];
      but.style.backgroundColor="green";
      <?php
      $sql4 = "SELECT * FROM acc WHERE uname like 'avdhi'";
      $r4 = mysqli_query($connection,$sql4);
      $s = mysqli_fetch_assoc($r4);
      $b=$s["tv"]+10;
      $sql5="UPDATE acc SET tv='$b' WHERE uname like 'avdhi'";
      $r5 = mysqli_query($connection,$sql5);
      ?>
      var a1="<?php echo $s["tv"]; ?>";
      alert(a1);
      var a2="<?php echo $b; ?>";
      alert(a2);
      setTimeout(function() {window.location.reload();}, 0);
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
radius = radius * 0.90;
setInterval(drawClock, 0);

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
