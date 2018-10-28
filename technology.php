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
  
  <img src="inventions.jpg" alt="inventions" class="image" style="width: 270px; height: 350px;">
<a href="invent.php" class="middle" style="text-decoration: none">    <div class="text">Play</div></a>
  </div>
</div>
  
<div class="content1">
    <p style="text-align: center; color: white; vertical-align: top;"><b>Inventions and Discoveries</b><br>An invention is a unique or novel device, method, composition or process. The invention process is a process within an overall engineering and product development process. It may be an improvement upon a machine or product or a new process for creating an object or a result. An invention that achieves a completely unique function or result may be a radical breakthrough. Such works are novel and not obvious to others skilled in the same field.</p>
</div>
  

<div class="container2">
  <img src="coding.jpg" alt="Coding" class="image" style="width: 270px; height: 350px;">
<a href="coding.php" class="middle" style="text-decoration: none">    <div class="text">Play</div></a>
  </div>
</div>

<div class="content2">
    <p style="text-align: center; color: white; vertical-align: top;"><b>Coding</b><br>Coding is the process of designing and building an executable computer program for accomplishing a specific computing task. Programming involves tasks such as analysis, generating algorithms, profiling algorithms' accuracy and resource consumption, and the implementation of algorithms in a chosen programming language.</p>
</div>

<div class="container3">
  <img src="comp.jpg" alt="CompSci" class="image" style="width: 270px; height: 350px; ">
<a href="computer.php" class="middle" style="text-decoration: none">    <div class="text">Play</div></a>
  </div>
</div>

<div class="content3">
    <p style="text-align: center; color: white; vertical-align: top;"><b>Computer Science</b><br>Computer science is the study of the theory, experimentation, and engineering that form the basis for the design and use of computers. It is the scientific and practical approach to computation and its applications and the systematic study of the feasibility, structure, expression, and mechanization of the methodical procedures (or algorithms) that underlie the acquisition, representation, processing, storage, communication of, and access to, information. An alternative, more succinct definition of computer science is the study of automating algorithmic processes that scale.</p>
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
