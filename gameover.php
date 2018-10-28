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
   <link rel="shortcut icon" type="image/x-icon" href="icon1.png">

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
  <a href="tv.html">TV Series</a>
  <a href="movies.html">Movies</a>
  <a href="science.html">Science</a>
  <a href="books.html">Books</a>
  <a href="technology.html">Technology</a>
  <a href="knowurworld.html">Know Your World</a>
  <a href="sports.html">Sports</a>
</div>

<div id="main">
  <span style="font-size:30px" onclick="openNav()"></span>
</div>

<div style="position: absolute;
    width: 750px;
    height: 200px;
    margin-left: 400px;
    margin-right: 400px;">
    <?php
      $u=$_SESSION["n"];
      $sql8 = "SELECT * FROM acc WHERE uname like '$u'";
      $r8 = mysqli_query($connection,$sql8);
      $s8 = mysqli_fetch_assoc($r8);
    ?>
  <p class="round" id="que" style="padding-left : 100px; font-size: 50px; height: 200px; "> <br>Your Score: <br><br><br></p>
  <button style="background-color: #4CAF50; border: none; padding: 14px 28px; font-family: comic sans ms;  font-size: 20px"><a href="1st page.php" style="text-decoration: none; color: white;">Home </button>

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
</body>
</html>
