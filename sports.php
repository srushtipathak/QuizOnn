<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>QuizOnn</title>
  <link rel="stylesheet" type="text/css" href="navbar.css">
  <link rel="stylesheet" type="text/css" href="sidebar.css">
  <link rel="shortcut icon" type="image/x-icon" href="icon1.png">
  <link rel="stylesheet" type="text/css" href="subtopic.css">
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


<div class="container1">
  
  <img src="cricket.jpg" alt="Game of Thrones" class="image" style="width: 270px; height: 350px;">
<a href="cricket.php" class="middle" style="text-decoration: none">
    <div class="text">Play</div>
  </a>
</div>
  
<div class="content1">
    <p style="text-align: center; color: white; vertical-align: top;"><b>Cricket</b><br>Cricket is a bat-and-ball game played between two teams of eleven players on a field at the centre of which is a 20-metre (22-yard) pitch with a wicket at each end, each comprising two bails balanced on three stumps. The batting side scores runs by striking the ball bowled at the wicket with the bat, while the bowling and fielding side tries to prevent this and dismiss each player (so they are "out"). </p>
</div>
  

<div class="container2">
  <img src="football.jpg" alt="Friends" class="image" style="width: 270px; height: 350px;">
  <a href="fifa.php" class="middle" style="text-decoration: none">
    <div class="text">Play</div>
  </a>
</div>

<div class="content2">
    <p style="text-align: center; color: white; vertical-align: top;"><b>FIFA</b><br>The Fédération Internationale de Football Association(FIFA) is an organization which describes itself as an international governing body of association football, futsal, and beach soccer. FIFA is responsible for the organization of football's major international tournaments, notably the World Cup which commenced in 1930 and the Women's World Cup which commenced in 1991.</p>
</div>

<div class="container3">
  <img src="tennis.jpg" alt="Suits" class="image" style="width: 270px; height: 350px;">
  <a href="tennis.php" class="middle" style="text-decoration: none">
    <div class="text">Play</div>
  </a>
</div>

<div class="content3">
    <p style="text-align: center; color: white; vertical-align: top;"><b>Tennis</b><br>Tennis is a racket sport that can be played individually against a single opponent (singles) or between two teams of two players each (doubles). Each player uses a tennis racket that is strung with cord to strike a hollow rubber ball covered with felt over or around a net and into the opponent's court. The object of the game is to maneuver the ball in such a way that the opponent is not able to play a valid return.</p>
</div>

<div class="container4">
  <img src="badminton.jpg" alt="Sherlock Holmes" class="image" style="width: 270px; height: 350px;">
  <a href="badminton.php" class="middle" style="text-decoration: none">
    <div class="text">Play</div>
  </a>
</div>

<div class="content4">
    <p style="text-align: center; color: white; vertical-align: top;"><b>Badminton</b><br>Badminton is a racquet sport played using racquets to hit a shuttlecock across a net. Although it may be played with larger teams, the most common forms of the game are "singles" (with one player per side) and "doubles" (with two players per side). Badminton is often played as a casual outdoor activity in a yard or on a beach; formal games are played on a rectangular indoor court.</p>
</div>

<div class="container5">
  <img src="olymp.jpg" alt="Stranger Things" class="image" style="width: 270px; height: 350px;">
  <a href="olymp.php" class="middle" style="text-decoration: none">
    <div class="text">Play</div>
  </a>
</div>

<div class="content5">
    <p style="text-align: center; color: white; vertical-align: top;"><b>Olympics</b><br>The modern Olympic Games or Olympics are leading international sporting events featuring summer and winter sports competitions in which thousands of athletes from around the world participate in a variety of competitions. The Olympic Games are considered the world's foremost sports competition with more than 200 nations participating. The Olympic Games are held every four years, with the Summer and Winter Games alternating by occurring every four years but two years apart.</p>
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
