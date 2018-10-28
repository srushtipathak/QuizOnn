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
  <p class="text">FIFA</p>
  <img src="football.jpg" alt="Game of Thrones" class="image" style="width: 270px; height: 350px;">
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
    $id=rand(16,30);
    //echo "inserted";
  $sql2 = "SELECT id FROM session";
  $result2=mysqli_query($connection,$sql2);
    if (mysqli_num_rows($result2)>5) {
    # code...
      $s = "TRUNCATE session";
      $re = mysqli_query($connection,$s);
      header('Location: profile.php');
  }
  while($r = mysqli_fetch_assoc($result2))
  {
    if ($r["id"]==$id) {
      # code...

      echo $r["id"];
      header("Refresh:0");
    }
  }

   $sql = "SELECT ques,a,b,c,d FROM qasp WHERE id='$id'";
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
$sql3 = "SELECT ans FROM qasp WHERE id='$id'";
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
      setTimeout(function() {window.location.reload();}, 0);
}

function right(but1){
      var but=document.getElementsByName(but1)[0];
      but.style.backgroundColor="green";
      window.location="checksp.php";
      setTimeout(function() {window.location.reload();}, 5);
}

</script>
</div>
<?php
      $u=$_SESSION["n"];
      $sql8 = "SELECT * FROM acc WHERE uname like '$u'";
      $r8 = mysqli_query($connection,$sql8);
      $s8 = mysqli_fetch_assoc($r8);
?>
<div class="container3">

<p class="text" style="text-align: left; margin-top: 350px;">Score: <?php echo $s8["sp"];?> </p>
</div>
<p id="countdowntimer" style="font-size: 150px; color: white; margin-left: 1300px; margin-top: 100px;">10</p>

<script type="text/javascript">
    var timeleft = 10;
    var downloadTimer = setInterval(function(){
    timeleft--;
    document.getElementById("countdowntimer").textContent = timeleft;
    if(timeleft <= 0)
        clearInterval(downloadTimer);
    },1000);
</script>
</body>
</html>
