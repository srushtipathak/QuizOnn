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
  
  <img src="got.jpg" alt="Game of Thrones" class="image" style="width: 270px; height: 350px;">
<a href="got.php" class="middle" style="text-decoration: none">
    <div class="text">Play</div>
  </a>
</div>
  
<div class="content1">
    <p style="text-align: center; color: white; vertical-align: top;"><b>Game of Thrones</b><br>In the mythical continent of Westeros, several powerful families fight for control of the Seven Kingdoms. As conflict erupts in the kingdoms of men, an ancient enemy rises once again to threaten them all. Meanwhile, the last heirs of a recently usurped dynasty plot to take back their homeland from across the Narrow Sea.</p>
</div>
  

<div class="container2">
  <img src="friends.jpg" alt="Friends" class="image" style="width: 270px; height: 350px;">
  <a href="friends.php" class="middle" style="text-decoration: none">
    <div class="text">Play</div>
  </a>
</div>

<div class="content2">
    <p style="text-align: center; color: white; vertical-align: top;"><b>FRIENDS</b><br>Rachel Green, Ross Geller, Monica Geller, Joey Tribbiani, Chandler Bing and Phoebe Buffay are six 20 something year-olds, living off of one another in the heart of New York City. Over the course of ten years, this average group of buddies goes through massive mayhem, family trouble, past and future romances, fights, laughs, tears and surprises as they learn what it really means to be a friend.</p>
</div>

<div class="container3">
  <img src="suits.jpg" alt="Suits" class="image" style="width: 270px; height: 350px;">
  <a href="suits.php" class="middle" style="text-decoration: none">
    <div class="text">Play</div>
  </a>
</div>

<div class="content3">
    <p style="text-align: center; color: white; vertical-align: top;"><b>Suits</b><br>While running from a drug deal gone bad, Mike Ross, a brilliant young college dropout, slips into a job interview with one of New York City's best legal closers, Harvey Specter. Mike's allies in the office include the firm's best paralegal Rachel and Harvey's no-nonsense assistant Donna to help him serve justice. Proving to be an irrepressible duo and invaluable to the practice, Mike and Harvey must keep their secret from everyone including managing partner Jessica and Harvey's arch nemesis Louis.</p>
</div>

<div class="container4">
  <img src="sherlock.jpg" alt="Sherlock Holmes" class="image" style="width: 270px; height: 350px;">
  <a href="sherlock.php" class="middle" style="text-decoration: none">
    <div class="text">Play</div>
  </a>
</div>

<div class="content4">
    <p style="text-align: center; color: white; vertical-align: top;"><b>Sherlock</b><br>In this modernized version of the Conan Doyle characters, using his detective plots, Sherlock Holmes lives in early 21st century London and acts more cocky towards Scotland Yard's detective inspector Lestrade because he's actually less confident. Doctor Watson is now a fairly young veteran of the Afghan war, less adoring and more active.</p>
</div>

<div class="container5">
  <img src="strangerthings.jpg" alt="Stranger Things" class="image" style="width: 270px; height: 350px;">
  <a href="strangerthings.php" class="middle" style="text-decoration: none">
    <div class="text">Play</div>
  </a>
</div>

<div class="content5">
    <p style="text-align: center; color: white; vertical-align: top;"><b>Stranger Things</b><br>In a small town where everyone knows everyone, a peculiar incident starts a chain of events that leads to the disappearance of a child - which begins to tear at the fabric of an otherwise peaceful community. Dark government agencies and seemingly malevolent supernatural forces converge on the town while a few locals begin to understand that there's more going on than meets the eye.</p>
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
