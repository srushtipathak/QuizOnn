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
  
  <img src="phy.jpg" alt="Physics" class="image" style="width: 270px; height: 350px;">
  <a href="physics.php" class="middle" style="text-decoration: none">
    <div class="text">Play</div></a>
  </div>
</div>
  
<div class="content1">
    <p style="text-align: center; color: white; vertical-align: top;"><b>Physics</b><br>Physics is one of the most fundamental scientific disciplines, and its main goal is to understand how the universe behaves. Physics is one of the oldest academic disciplines and, through its inclusion of astronomy, perhaps the oldest.</p>
</div>
  

<div class="container2">
  <img src="chem.jpg" alt="Chemistry" class="image" style="width: 270px; height: 350px;">
<a href="chem.php" class="middle" style="text-decoration: none">    <div class="text">Play</div></a>
  </div>
</div>

<div class="content2">
    <p style="text-align: center; color: white; vertical-align: top;"><b>Chemistry</b><br>Chemistry is the scientific discipline involved with compounds composed of atoms, i.e. elements, and molecules, i.e. combinations of atoms: their composition, structure, properties, behavior and the changes they undergo during a reaction with other compounds.Chemistry addresses topics such as how atoms and molecules interact via chemical bonds to form new chemical compounds.</p>
</div>

<div class="container3">
  <img src="bio.jpg" alt="Biology" class="image" style="width: 270px; height: 350px;">
<a href="biology.php" class="middle" style="text-decoration: none">    <div class="text">Play</div></a>
  </div>
</div>

<div class="content3">
    <p style="text-align: center; color: white; vertical-align: top;"><b>Biology</b><br>Biology is the natural science that studies life and living organisms, including their physical structure, chemical processes, molecular interactions, physiological mechanisms, development and evolution.Despite the complexity of the science, there are certain unifying concepts that consolidate it into a single, coherent field. Biology recognizes the cell as the basic unit of life, genes as the basic unit of heredity, and evolution as the engine that propels the creation and extinction of species</p>
</div>

<div class="container4">
  <img src="math.jpg" alt="maths" class="image" style="width: 270px; height: 350px;">
<a href="maths.php" class="middle" style="text-decoration: none">    <div class="text">Play</div></a>
  </div>
</div>

<div class="content4">
    <p style="text-align: center; color: white; vertical-align: top;"><b>Mathematics</b><br>Mathematics includes the study of such topics as quantity, structure, space, and change. Mathematicians seek and use patterns to formulate new conjectures; they resolve the truth or falsity of conjectures by mathematical proof. When mathematical structures are good models of real phenomena, then mathematical reasoning can provide insight or predictions about nature. Through the use of abstraction and logic, mathematics developed from counting, calculation, measurement, and the systematic study of the shapes and motions of physical objects.</p>
</div>

<div class="container5">
  <img src="ast.jpg" alt="Astronomy" class="image" style="width: 270px; height: 350px;">
<a href="astro.php" class="middle" style="text-decoration: none">    <div class="text">Play</div></a>
  </div>
</div>

<div class="content5">
    <p style="text-align: center; color: white; vertical-align: top;"><b>Astronomy</b><br>Astronomy is the scientific study of celestial objects (such as stars, planets, comets, and galaxies) and phenomena that originate outside the Earth's atmosphere (such as the cosmic background radiation).</p>
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
