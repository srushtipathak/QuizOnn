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
  <link rel="stylesheet" type="text/css" href="profile.css">
</head>
<body bgcolor="#000d1a">
  <div>
    <p class="fl" style="color: yellow; font-family: viner hand itc; font-size: 40px; padding-left: 15px;">QuizOnn</p>
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

<img src="expert.jpg" id="image" height="200" width="250" style="padding-left: 400px; padding-top: 50px;">
<div id="para" style="margin-top:-250px;padding-left: 700px">
<p style="font-family: comic sans ms; font-size: 24px; color: #99004d;">Username: <?php echo $_SESSION["n"];?><pre id=""></pre></p>
<?php
$u=$_SESSION["n"];
      $connection = mysqli_connect("localhost", "root", "","quizonn"); 
      $sql4 = "SELECT * FROM acc WHERE uname like '$u'";
      $r4 = mysqli_query($connection,$sql4);
      $s = mysqli_fetch_assoc($r4);
      $ts=$s["tv"]+$s["mov"]+$s["sci"]+$s["kuw"]+$s["boo"]+$s["sp"]+$s["tech"];
      ?>
<p style="font-family: comic sans ms; font-size: 24px; color: #99004d;">Total Score: <?php echo $ts;?></p>
<p style="font-family: comic sans ms; font-size: 20px; color: #cc0066; padding-left: 30px">
  TV Series: <?php echo $s["tv"];?><pre id=""></pre>
</p>
<p style="font-family: comic sans ms; font-size: 20px; color: #cc0066; padding-left: 30px">
  Movies: <?php echo $s["mov"];?><pre id=""></pre>
</p>
<p style="font-family: comic sans ms; font-size: 20px; color: #cc0066; padding-left: 30px">
  Science: <?php echo $s["sci"];?><pre id=""></pre>
</p>
<p style="font-family: comic sans ms; font-size: 20px; color: #cc0066; padding-left: 30px">
  Books: <?php echo $s["boo"];?><pre id=""></pre>
</p>
<p style="font-family: comic sans ms; font-size: 20px; color: #cc0066; padding-left: 30px">
  Technology: <?php echo $s["tech"];?><pre id=""></pre>
</p>
<p style="font-family: comic sans ms; font-size: 20px; color: #cc0066; padding-left: 30px">
  Know Your World: <?php echo $s["kuw"];?><pre id=""></pre>
</p>
<p style="font-family: comic sans ms; font-size: 20px; color: #cc0066; padding-left: 30px">
  Sports: <?php echo $s["sp"];?><pre id=""></pre>
</p>
</div>
<script>
  var i=<?php echo $ts;?>;
  if(i<=150){
  document.getElementById('image').src='newbie.jpg';
  }
  else if(i<=400){
    document.getElementById('image').src='mediocre.jpg';
  }
  else
    document.getElementById('image').src='expert.jpg';
  </script>

</body>
</html>
