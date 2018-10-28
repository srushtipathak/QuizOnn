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
  
  <img src="guess.jpg" alt="Game of Thrones" class="image" style="width: 270px; height: 350px;">
<a href="guess.php" class="middle" style="text-decoration: none">
    <div class="text">Play</div>
  </a>
</div>
  
<div class="content1">
    <p style="text-align: center; color: white; vertical-align: top;"><b>Name the Author</b><br>So, you think you’re pretty lit savvy, huh? It’s time to put your knowledge to the test and see if you can name the author of these famous works based on the book title alone. Ready? Here we go!</p>
</div>
  

<div class="container2">
  <img src="complete.jpg" alt="Friends" class="image" style="width: 270px; height: 350px;">
  <a href="complete.php" class="middle" style="text-decoration: none">
    <div class="text">Play</div>
  </a>
</div>

<div class="content2">
    <p style="text-align: center; color: white; vertical-align: top;"><b>Complete the Title</b><br>We assume that you love words, and that probably means you love books. It’s time to put that love to the test: can you complete the titles of these novels? Take the quiz, challenge your bibliophile friends.</p>
</div>

<div class="container3">
  <img src="quote.jpg" alt="Suits" class="image" style="width: 270px; height: 350px;">
  <a href="quote.php" class="middle" style="text-decoration: none">
    <div class="text">Play</div>
  </a>
</div>

<div class="content3">
    <p style="text-align: center; color: white; vertical-align: top;"><b>Guess the Book</b><br>All of our favorite writers have their own unique style. We fall in love with books, because of the way they are written and the way the words make us feel. Do you have the eye to recognize the book from just a quote? Test your knowledge!</p>
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
