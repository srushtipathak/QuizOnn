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
  <link rel="stylesheet" type="text/css" href="slider.css">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>

/*Time to apply widths for accordian to work
Width of image = 640px
total images = 5
so width of hovered image = 640px
width of un-hovered image = 40px - you can set this to anything
so total container width = 640 + 40*4 = 800px;
default width = 800/5 = 160px;
*/

.accordian {
  width: 805px; height: 320px;
  overflow: hidden;
  
  /*Time for some styling*/
  margin: 100px auto;
  box-shadow: 0 0 10px 1px rgba(0, 0, 0, 0.35);
  -webkit-box-shadow: 0 0 10px 1px rgba(0, 0, 0, 0.35);
  -moz-box-shadow: 0 0 10px 1px rgba(0, 0, 0, 0.35);
}

/*A small hack to prevent flickering on some browsers*/
.accordian ul {
  width: 1200px;
  /*This will give ample space to the last item to move
  instead of falling down/flickering during hovers.*/
}

.accordian li {
  position: relative;
  display: block;
  width: 160px;
  float: left;
  
  border-left: 1px solid #888;
  
  box-shadow: 0 0 25px 10px rgba(0, 0, 0, 0.5);
  -webkit-box-shadow: 0 0 25px 10px rgba(0, 0, 0, 0.5);
  -moz-box-shadow: 0 0 25px 10px rgba(0, 0, 0, 0.5);
  
  /*Transitions to give animation effect*/
  transition: all 0.5s;
  -webkit-transition: all 0.5s;
  -moz-transition: all 0.5s;
  /*If you hover on the images now you should be able to 
  see the basic accordian*/
}

/*Reduce with of un-hovered elements*/
.accordian ul:hover li {width: 40px;}
/*Lets apply hover effects now*/
/*The LI hover style should override the UL hover style*/
.accordian ul li:hover {width: 640px;}


.accordian li img {
  display: block;
}

/*Image title styles*/
.image_title {
  background: rgba(0, 0, 0, 0.5);
  position: absolute;
  left: 0; bottom: 0; 
width: 640px; 

}
.image_title a {
  display: block;
  color: #fff;
  text-decoration: none;
  padding: 20px;
  font-size: 16px;
}
</style>

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


<!------ Include the above in your HEAD tag ---------->
<!-- We will make a simple accordian with hover effects 
The markup will have a list with images and the titles-->
<div class="accordian">
    <ul>
    <li>
      <div class="image_title">
        <a href="https://www.youtube.com/channel/UCXTfDJ60DBmA932Du6B1ydg">KungFu Panda</a>
      </div> 
      <a href="https://www.youtube.com/channel/UCXTfDJ60DBmA932Du6B1ydg">
        <img src="suits.jpg"/>
      </a>
    </li>
    <li>
      <div class="image_title">
        <a href="https://www.youtube.com/channel/UCXTfDJ60DBmA932Du6B1ydg">Toy Story 2</a>
      </div>
      <a href="https://www.youtube.com/channel/UCXTfDJ60DBmA932Du6B1ydg">
        <img src="suits.jpg"/>
      </a>
    </li>
    <li>
      <div class="image_title">
        <a href="https://www.youtube.com/channel/UCXTfDJ60DBmA932Du6B1ydg">Wall-E</a>
      </div>
      <a href="https://www.youtube.com/channel/UCXTfDJ60DBmA932Du6B1ydg">
        <img src="suits.jpg"/>
      </a>
    </li>
    <li>
      <div class="image_title">
        <a href="#">Up</a>
      </div>
      <a href="https://www.youtube.com/channel/UCXTfDJ60DBmA932Du6B1ydg">
        <img src="suits.jpg"/>
      </a>
    </li>
    <li>
      <div class="image_title">
        <a href="#">Cars 2</a>
      </div>
      <a href="https://www.youtube.com/channel/UCXTfDJ60DBmA932Du6B1ydg">
        <img src="suits.jpg"/>
      </a>
    </li>
    <li>
      <div class="image_title">
        <a href="https://www.youtube.com/channel/UCXTfDJ60DBmA932Du6B1ydg">KungFu Panda</a>
      </div> 
      <a href="https://www.youtube.com/channel/UCXTfDJ60DBmA932Du6B1ydg">
        <img src="suits.jpg"/>
      </a>
    </li>
    <li>
      <div class="image_title">
        <a href="https://www.youtube.com/channel/UCXTfDJ60DBmA932Du6B1ydg">KungFu Panda</a>
      </div> 
      <a href="https://www.youtube.com/channel/UCXTfDJ60DBmA932Du6B1ydg">
        <img src="suits.jpg"/>
      </a>
    </li>
  </ul>
</div>


<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span>
  <span class="dot" onclick="currentSlide(5)"></span> 
  <span class="dot" onclick="currentSlide(6)"></span>
  <span class="dot" onclick="currentSlide(7)"></span> 
     
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

<script>
  var slideIndex = 0;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");

showSlides();

function showSlides() {    
    var i;    
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1} 
    slides[slideIndex-1].style.display = "block"; 
    setTimeout(showSlides, 4000);
}

function currentSlide(no) {
    var i;    
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none"; 
    }
    slideIndex = no;
    slides[no-1].style.display = "block";
}

function plusSlides(n) {
  var newslideIndex = slideIndex + n;
  if(newslideIndex < 8 && newslideIndex > 0){
     currentSlide(newslideIndex);
  }
}
</script>

<p style="color: pink; font-family: comic sans ms; font-size: 50px; margin-bottom: 0px; padding-left: 30px;" id="article">Articles</p>
<hr noshade="none" width="97%">

<p style="color: turquoise; font-family: comic sans ms; font-size: 30px; margin-bottom: 0px; padding-left: 30px;">TV Series</p>
<p style="color: white; margin-left: 40px;padding-right: 250px;text-align: justify;">1. Game of thrones:<br> 
  <div style="color:white;margin-left: 60px;padding-right: 250px;text-align: justify;">While the final cast for the series has not been revealed, all of the characters who survived season seven will be reprising their roles for the finale.

So you will see Kit Harrington continuing as Jon Snow, Emilia Clarke as Daenerys and Peter Dinklage as Tyrion Lannister.

Tyrion's siblings Cersei and Jamie will once more be portrayed by Lena Headey and Nikolaj Coster-Waldau in the final series.</div><br></p>
<p style="color: white; margin-left: 40px;padding-right: 250px;text-align: justify;">2. Friends:<br>
<div style="color:white;margin-left: 60px;padding-right: 250px;text-align: justify;">The Friends writers did a remarkable job of distributing screen time evenly among the six principal players. While Joey appears in 47.7 percent of all scenes, the most of any character, Phoebe, the character who appears in the fewest, is just barely behind her pals, with appearances in 41.9 percent of all scenes.There are 63 possible arrangements in which the six characters could have appeared in any given scene. This includes all combinations of one, two, three, four, five, or six characters. Each one of these 63 combinations occurred during the show’s run, though some combinations are more common than others. For instance, Joey, Phoebe, Monica, and Chandler appeared together 41 times, more than any other foursome. This stands to reason: For a long stretch of the series, Joey and Chandler were roommates as well as friends, and it makes sense that the missing pair were the on-again-off-again lovers Ross and Rachel. Indeed, as you might expect, Ross and Rachel are the two friends most likely to have their own scenes together.</div><br></p>
<p style="color: white; margin-left: 40px;padding-right: 250px;text-align: justify;">3. Suits:<br>
<div style="color:white;margin-left: 60px;padding-right: 250px;text-align: justify;">Coming into the show’s eighth season, that begins with the merger of Zane and Harvey’s firms, two big changes stand-out: Katherine Heigl and Amanda Schull.As for the addition of Heigl, the big thing to note is she is no one’s replacement, much like Katrina. Rather, her character serves as a mission statement. When we meet her, we will come to learn she is Zane’s right hand meant to serve as a foil for Harvey, Louis and anyone else at the firm that might get in her or Zane’s way. With her character’s introduction, we cement the goal of Suits’ new direction.

With the pressing matter of Mike’s fraudulent hiring gone, Suits needs to move into the genre of law show more than character drama. But, by having what basically amounts to seven years of backstory, it gets to enter the genre with a huge leg up on the competition.</div><br></p>
<p style="color: white; margin-left: 40px;padding-right: 250px;text-align: justify;">4. Sherlock Holmes:<br>
<div style="color:white;margin-left: 60px;padding-right: 250px;text-align: justify;">Sherlock Holmes and Dr Watson have solved 'The Final Problem' - but was that really the last we'll see of the Baker Street Boys?<br>

There have been conflicting reports as to whether or not Sherlock is over for good, with plenty of chatter to suggest that the great detective could perhaps stage another resurrection. Sherlock's scheduling has been anything but regular: with an 18-month gap between its first two series, a wait of two more years between series two and three, a one-off special after another two-year wait, then one more series of three films after another 12-month break.</div><br></p>
<p style="color: white; margin-left: 40px;padding-right: 250px;text-align: justify;">5. Stranger Things:<br>
<div style="color:white;margin-left: 60px;padding-right: 250px;text-align: justify;">Season one landed like the mothership in Close Encounters: to gasps of wonder, yelps of fear and maybe even a few bassoon solos. Stranger Things was an amazing blend of '80s pop-culture references, eerie storytelling and startling performances from a young cast.

Season two may have lacked the element of surprise, but it kept the ball rolling despite vocal complaints from critics about certain plot decisions.Filming has only just begun on the new episodes, so it'll be months – at least – till we see any actual footage from the new season.

But the show has dropped a new teaser in the form of a video advertising that a new Starcourt Mall is heading to Hawkins, Indiana. It may not tell us much about what to expect from season three, but it does feature a very fun cameo...</div></p>

<p style="color: turquoise; font-family: comic sans ms; font-size: 30px; margin-bottom: 0px; padding-left: 30px;">Movies</p>

<p style="color: turquoise; font-family: comic sans ms; font-size: 30px; margin-bottom: 0px; padding-left: 30px;">Science</p>

<p style="color: turquoise; font-family: comic sans ms; font-size: 30px; margin-bottom: 0px; padding-left: 30px;">Books</p>

<p style="color: turquoise; font-family: comic sans ms; font-size: 30px; margin-bottom: 0px; padding-left: 30px;">Technology</p>

<p style="color: turquoise; font-family: comic sans ms; font-size: 30px; margin-bottom: 0px; padding-left: 30px;">Know Your World</p>

<p style="color: turquoise; font-family: comic sans ms; font-size: 30px; margin-bottom: 0px; padding-left: 30px;">Sports</p>

</body>
</html>
