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
  
  <img src="GK-Quiz.jpg" alt="GK" class="image" style="width: 270px; height: 350px;">
<a href="gk.php" class="middle" style="text-decoration: none">
    <div class="text">Play</div>
  </a>
</div>
  
<div class="content1">
    <p style="text-align: center; color: white; vertical-align: top;"><b>General Knowledge</b><br>A little knowledge of various topics can greatly help you initiate a conversation with people, finding a topic with them having some amount of mastery in that particular topic. At the end of the day, both of you will increase your knowledge.</p>
</div>
  

<div class="container2">
  <img src="places.png" alt="places" class="image" style="width: 270px; height: 350px;">
  <a href="places.php" class="middle" style="text-decoration: none">
    <div class="text">Play</div>
  </a>
</div>

<div class="content2">
    <p style="text-align: center; color: white; vertical-align: top;"><b>Places</b><br>The city makes dreams achievable and opportunities realizable. One could benefit from the wide array of services offered by the urban life which could be education, health, and administration. The abundance of companies and factories found in cities creates a myriad of well-paying job opportunities, whether part-time or full-time. </p>
</div>

<div class="container3">
  <img src="history.jpg" alt="History" class="image" style="width: 270px; height: 350px;">
  <a href="history.php" class="middle" style="text-decoration: none">
    <div class="text">Play</div>
  </a>
</div>

<div class="content3">
    <p style="text-align: center; color: white; vertical-align: top;"><b>History</b><br>History is agreed upon as an uninterrupted process in time and space. Yet knowledge of the period is essential to understand and appreciate the nature of the historical changes that take place in time and space. Periodization of Indian history is a tricky and controversial concept. There is no unanimity among the historians about the periodization of Indian history.</p>
</div>

<div class="container4">
  <img src="geo.jpg" alt="Geography" class="image" style="width: 270px; height: 350px;">
  <a href="geo.php" class="middle" style="text-decoration: none">
    <div class="text">Play</div>
  </a>
</div>

<div class="content4">
    <p style="text-align: center; color: white; vertical-align: top;"><b>Geography</b><br>Geography forms a part of social sciences and is one of the social sciences which is now heading towards a scientific form. Geography is the study of earth as the home of man or in other words geography is the study of the environment of man; physical, social, particularly in its relation to human activities.</p>
</div>

<div class="container5">
  <img src="politics.jpg" alt="Politics" class="image" style="width: 270px; height: 350px;">
  <a href="politics.php" class="middle" style="text-decoration: none">
    <div class="text">Play</div>
  </a>
</div>

<div class="content5">
    <p style="text-align: center; color: white; vertical-align: top;"><b>Politics</b><br>Politics is an integral part of modern society and has a complex, multi-dimensional structure. The target of politics is the various social groups. The demography, the environment, the trends are constantly changing and so does the politics.</p>
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
