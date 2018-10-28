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
  
  <img src="starwars.jpg" alt="Game of Thrones" class="image" style="width: 270px; height: 350px;">
<a href="starwars.php" class="middle" style="text-decoration: none">
    <div class="text">Play</div>
  </a>
</div>
  
<div class="content1">
    <p style="text-align: center; color: white; vertical-align: top;"><b>Star Wars</b><br>The Star Wars films include two complete trilogies: the original trilogy released between 1977 and 1983, and the prequel trilogy released between 1999 and 2005. A third trilogy that follows the first two began in 2015. Other films have taken or will take place between the trilogy films. There have also been several Star Wars television series and films, with the first being released in 1978.</p>
</div>
  

<div class="container2">
  <img src="justiceleague.jpg" alt="Friends" class="image" style="width: 270px; height: 350px;">
  <a href="justiceleague.php" class="middle" style="text-decoration: none">
    <div class="text">Play</div>
  </a>
</div>

<div class="content2">
    <p style="text-align: center; color: white; vertical-align: top;"><b>Justice League</b><br>In an alternative history Zod is Superman's father, Batman is a vampiric Man-Bat, and Wonder Woman is the child of Ares, God of War. When these dark heroes form an alliance, the question everyone asks is will they save the world, or rule it?</p>
</div>

<div class="container3">
  <img src="marvel.jpg" alt="Suits" class="image" style="width: 270px; height: 350px;">
  <a href="marvel.php" class="middle" style="text-decoration: none">
    <div class="text">Play</div>
  </a>
</div>

<div class="content3">
    <p style="text-align: center; color: white; vertical-align: top;"><b>Marvel</b><br>The adventures of the Marvel Universe's mightiest general membership superhero team. With an all-star roster consisting of Iron Man, Captain America, Thor, Hulk, Hawkeye, Falcon and Black Widow, the Avengers are a team in the truest sense. The Avengers save the world from the biggest threats imaginable; threats no single super hero could withstand.</p>
</div>

<div class="container4">
  <img src="harry.jpg" alt="Sherlock Holmes" class="image" style="width: 270px; height: 350px;">
  <a href="harry.php" class="middle" style="text-decoration: none">
    <div class="text">Play</div>
  </a>
</div>

<div class="content4">
    <p style="text-align: center; color: white; vertical-align: top;"><b>Harry Potter</b><br>Harry Potter has lived under the stairs at his aunt and uncle's house his whole life. But on his 11th birthday, he learns he's a powerful wizard; with a place waiting for him at the Hogwarts School of Witchcraft and Wizardry. As he learns to harness his newfound powers with the help of the school's kindly headmaster, Harry uncovers the truth about his parents' deaths and about the villain who's to blame.</p>
</div>

<div class="container5">
  <img src="bollywood.jpg" alt="Stranger Things" class="image" style="width: 270px; height: 350px;">
  <a href="bollywood.php" class="middle" style="text-decoration: none">
    <div class="text">Play</div>
  </a>
</div>

<div class="content5">
    <p style="text-align: center; color: white; vertical-align: top;"><b>Dialogue Baazi</b><br>Dialogues are the essence of any film. Whether or not a film stays with you, depends on the power of its dialogues, and Bollywood seems to never fail at delivering this to its audience. We have gathered dialogues from the 70’s, 80’s and 90’s era that are enumerated even today, by adults and children alike.</p>
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
