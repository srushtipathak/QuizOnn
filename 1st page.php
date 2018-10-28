<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>QuizOnn</title>
  <link rel="shortcut icon" type="image/x-icon" href="icon1.jpg">
  <link rel="stylesheet" type="text/css" href="navbar.css">
  <link rel="stylesheet" type="text/css" href="sidebar.css">
  <link rel="stylesheet" type="text/css" href="slider.css">
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
  <a href="#article">Articles</a>
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

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 7</div>
  <img src="tv-series.jpg" style="width:100%; height: 450px">
  <br><br><br><br>
  <div class="text">TV Series</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 7</div>
  <img src="movie.jpg" style="width:100%; height: 450px">
  <br><br><br><br>
  <div class="text">Movies</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 7</div>
  <img src="science.jpg" style="width:100%; height: 450px">
   <br><br><br><br>
  <div class="text">Science</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 7</div>
  <img src="books.jpg" style="width:100%; height: 450px" >
   <br><br><br><br>
  <div class="text">Books</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">5 / 7</div>
  <img src="it.jpg" style="width:100%; height: 450px">
   <br><br><br><br>
  <div class="text">Technology</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">6 / 7</div>
  <img src="world.jpg" style="width:100%; height: 450px">
  <br><br><br><br>
  <div class="text">Know Your World</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">7 / 7</div>
  <img src="sports.jpg" style="width:100%; height: 450px">
  <br><br><br><br>
  <div class="text">Sports</div>
</div>


<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

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

<p style="color: white; margin-left: 40px;padding-right: 250px;text-align: justify;">1. Star Wars :<br> 
  <div style="color:white;margin-left: 60px;padding-right: 250px;text-align: justify;">So you watched Star Wars: Episode VIII — The Last Jedi, which hit movie theaters in December 2017, and you’re itching for hints about what’s to come? There are plenty of interesting details emerging about the upcoming Star Wars: Episode IX, which recently cast a popular former Doctor Who star in a key role. The latest trilogy of Star Wars films will conclude with Episode IX, which brings back director J.J. Abrams to close out the latest arc of the iconic sci-fi saga after he helmed 2015’s franchise-relaunching Star Wars: Episode VII — The Force Awakens. He directs from a script he co-wrote with Academy Award winner Chris Terrio (Argo, Justice League).
The sequel trilogy’s final chapter is scheduled to hit theaters December 20, 2019. Here is everything we know about the movie so far.</div><br></p>

<p style="color: white; margin-left: 40px;padding-right: 250px;text-align: justify;">2. Justice League :<br>
<div style="color:white;margin-left: 60px;padding-right: 250px;text-align: justify;">'Justice League' is the DC Comics answer to Marvel's highly successful 'Avengers' films. The film will pair up Superman, Batman, Wonder Woman, Flash, Aquaman, and Cyborg all for one epic superhero crossover movie that would also re-introduce the famous DC Comics' characters to movie audiences with hopes of launching their own standalone movie franchises. Star Wars creator George Lucas recently visited Jon Favreau and Dave Filoni on the set of The Mandalorian. Although he has no involvement in the production it is wonderful to see the man who created this fantastical galaxy far, far away still take an interest in the future of the Star Wars franchise and legacy.</div><br></p>

<p style="color: white; margin-left: 40px;padding-right: 250px;text-align: justify;">3. Marvel :<br>
<div style="color:white;margin-left: 60px;padding-right: 250px;text-align: justify;">The Marvel Universe features superheroes such as Spider-Man, Iron Man, Captain America, Wolverine, Thor, Hulk, Ant-Man. It also includes teams like the Avengers, the Fantastic Four and X-Men. Marvel is the US company behind cult comics and films.<br>
Marvel movie after Avengers 4 'CANCELLED' as it vanishes from schedule? Is it Guardians 3?<br>
A new report provides an update on the Disney release slate for the near future, and there’s a very interesting Marvel observation in the mix.

The Hollywood Reporter claims that the studio has “undated” a Marvel movie, identity unknown, which had been set for release on July 31, 2020.

It’s completely unknown what film that would have been, given that Marvel’s plans for after Avengers 4 are more-or-less a mystery - aside from next summer’s Spider-Man: Far From Home.

</div><br></p>

<p style="color: white; margin-left: 40px;padding-right: 250px;text-align: justify;">4. Harry Potter :<br>
<div style="color:white;margin-left: 60px;padding-right: 250px;text-align: justify;">Huge Harry Potter and Fantastic Beasts wand installation lights up St Paul’s Cathedral<br>

In London, nine giant wands now stand outside London’s St Paul’s Cathedral – as Warner Bros. presented an iconic new installation supporting J.K. Rowling’s charity, Lumos. Here’s what happened at the grand opening – and yes, it did include a bit of spell-casting!<br>
A huge new installation, as part of the City of London Arts Initiative for public art, has just opened in London – entitled Fantastic Beasts: Wizarding World Wands supporting Lumos.</div><br></p>

<p style="color: white; margin-left: 40px;padding-right: 250px;text-align: justify;">5. Dialogue baazi :<br>
<div style="color:white;margin-left: 60px;padding-right: 250px;text-align: justify;">Dialogues are the essence of any film. Whether or not a film stays with you, depends on the power of its dialogues, and Bollywood seems to never fail at delivering this to its audience. We have gathered dialogues from the 70’s, 80’s and 90’s era that are enumerated even today, by adults and children alike. <br>

In the United States, an early form of dialogic learning emerged in the Great Books movement of the early to mid-20th century, which emphasized egalitarian dialogues in small classes as a way of understanding the foundational texts of the Western canon. Institutions that continue to follow a version of this model include the Great Books Foundation, Shimer College in Chicago, and St. John's College in Annapolis and Santa Fe.</div></p>

<p style="color: turquoise; font-family: comic sans ms; font-size: 30px; margin-bottom: 0px; padding-left: 30px;">Science</p>

<p style="color: white; margin-left: 40px;padding-right: 250px;text-align: justify;">1. Physics :<br> 
  <div style="color:white;margin-left: 60px;padding-right: 250px;text-align: justify;">Breakthrough in accessing the tiny magnet within the core of a single atom <br>
  Researchers at the Center for Quantum Nanoscience (QNS) within the Institute for Basic Science (IBS) in South Korea have made a major scientific breakthrough by detecting the nuclear magnetism, or "nuclear spin" of a single atom. In an international collaboration with IBM Research, the University of Oxford and the International Iberian Nanotechnology Laboratory, QNS scientists used advanced and novel techniques to measure the nuclear spin of individual atoms on surfaces for the first time.

</div><br></p>
<p style="color: white; margin-left: 40px;padding-right: 250px;text-align: justify;">2. Chemistry:<br>
<div style="color:white;margin-left: 60px;padding-right: 250px;text-align: justify;">Molecular memory can be used to increase the memory capacity of hard disks<br>
Scientists have taken part in research where the first molecule capable of remembering the direction of a magnetic above liquid nitrogen temperatures has been prepared and characterized. The results may be used in the future to massively increase the storage capacity of hard disks without increasing their physical size.<br>
Single-molecule magnets are molecules capable of remembering the direction of a magnetic field that has been applied to them over relatively long periods of time once the magnetic field is switched off. Thus, one can "write" information into molecules. Single-molecule magnets have potential applications, for example, as high-density digital storage media and as parts of microprocessors in quantum computers.</div><br></p>

<p style="color: white; margin-left: 40px;padding-right: 250px;text-align: justify;">3. Biology:<br>
<div style="color:white;margin-left: 60px;padding-right: 250px;text-align: justify;">Invasive forage grass leads to grassland bird decline<br>
Researchers found that a common cattle forage grass, tall fescue, is associated with nest failure in dickcissels, small grassland birds similar to sparrows. The prairies of North America once covered vast stretches of land, with towering grasses creating ideal nesting and forage habitat for grassland birds. But the deep, rich soil and treeless expanse also represented the ideal conditions for farming -- both row crops and cattle grazing -- in the eyes of settlers. Today, largely thanks to agricultural conversion, a mere 1 percent of tallgrass prairie remains. And what's left is now being threatened by invasive species and forest encroachment.</div><br></p>
<p style="color: white; margin-left: 40px;padding-right: 250px;text-align: justify;">4. Maths :<br>
<div style="color:white;margin-left: 60px;padding-right: 250px;text-align: justify;">Largest known prime number discovered with over 23 million digits<br>

A collaborative computational effort has uncovered the longest known prime number.
At over 23 million digits long, the new number has been given the name M77232917 for short.
Prime numbers are divisible only by themselves and one, and the search for ever-larger primes has long occupied maths enthusiasts.
However, the search requires complicated computer software and collaboration as the numbers get increasingly hard to find.</div><br></p>
<p style="color: white; margin-left: 40px;padding-right: 250px;text-align: justify;">5. Astrology :<br>
<div style="color:white;margin-left: 60px;padding-right: 250px;text-align: justify;">New telescope almost doubles known number of mysterious 'fast radio bursts'<br>
Astronomers have nearly doubled the known number of 'fast radio bursts'-- powerful flashes of radio waves from deep space. The team's discoveries include the closest and brightest fast radio bursts ever detected and they have proved that fast radio bursts are coming from the other side of the Universe rather than from our own galactic neighborhood.
Australian researchers using a CSIRO radio telescope in Western Australia have nearly doubled the known number of 'fast radio bursts' -- powerful flashes of radio waves from deep space.</div></p>

<p style="color: turquoise; font-family: comic sans ms; font-size: 30px; margin-bottom: 0px; padding-left: 30px;">Books</p>

<p style="color: white; margin-left: 40px;padding-right: 250px;text-align: justify;">1. Author :<br> 
  <div style="color:white;margin-left: 60px;padding-right: 250px;text-align: justify;">The one piece of advice every aspiring author needs to know<br>
  If you are one of the millions of people who aspire to be a published author, I have some writing advice for you: never listen to writing advice.

Not that it’s easy to avoid. If you go on Twitter and follow the hashtag #amwriting you’ll get more unsolicited advice than you know what to do with. Do this, do that, don’t on any account do the other. Everyone it seems, has some rules for you to follow.

Which is hardly surprising, as literally almost everybody is writing a book. And I use the phrase “literally almost everybody” advisedly. At the BookExpo America conference in 2015, author Jane McGonigal claimed that 90 per cent of young people in the US say they want to write a book.</div><br></p>
<p style="color: white; margin-left: 40px;padding-right: 250px;text-align: justify;">2. Novels:<br>
<div style="color:white;margin-left: 60px;padding-right: 250px;text-align: justify;">Novels 'have been getting substantially longer over last two decades'<br>
When Garth Risk Hallberg’s 912-page debut City of Fire, published last year, fetched a $2m advance from its US publisher, The New York Times said it provided “more evidence that the long novel is experiencing a resurgence”. Other whoppers released last year include Man Booker Prize shortlisted A Little Life by Hanya Yanagihara at 736 pages and Stephen Jarvis’ Death and Mr Pickwick with 802.
</div><br></p>
<p style="color: white; margin-left: 40px;padding-right: 250px;text-align: justify;">3. Books:<br>
<div style="color:white;margin-left: 60px;padding-right: 250px;text-align: justify;">Graham Swift’s new novel shows exactly how one event can shape a whole life<br>
Interviews can be nerve-racking affairs but, as I wait for Graham Swift at a crowded Soho restaurant, I feel especially apprehensive. Reading interviews with him, I sense that, although polite and thoughtful, Swift finds discussing his work a chore. Not only that – Jane, the protagonist of his new novel, Mothering Sunday, regards “interview chicanery” and “bothersome questions” as the banes of a writer’s life. Still, I hear Swift enjoys the kind of long lunch that’s synonymous with literary London’s past and, when he arrives, dressed in a black suit and white shirt, he asks with some relish: “So, we’re going to eat and drink, then?”</div><br></p>

<p style="color: turquoise; font-family: comic sans ms; font-size: 30px; margin-bottom: 0px; padding-left: 30px;">Technology</p>

<p style="color: white; margin-left: 40px;padding-right: 250px;text-align: justify;">1. Inventions and Discovies:<br> 
  <div style="color:white;margin-left: 60px;padding-right: 250px;text-align: justify;">Real-Life Superpower: 'See' Around Corners with Smartphone Tech<br>
  In spy novels and superhero films, the ability to see through walls has always been a handy — not to mention, impressive — trick. And now, this tech could be available to people in real life, with smartphone cameras that can help detect moving objects even if they are hidden around corners, according to a new study.
This futuristic-sounding tech could one day help vehicles see around blind corners, the researchers said.</div><br></p>
<p style="color: white; margin-left: 40px;padding-right: 250px;text-align: justify;">2. Coding :<br>
<div style="color:white;margin-left: 60px;padding-right: 250px;text-align: justify;">TechGig Code Gladiators announces bounty of over Rs 5 million<br>
Having won the Limca Book National Record for being India’s Largest Coding Contest in 2015 and 2016, TechGig Code Gladiators has become one of the leaders in Coding Contests. With a bounty of over Rs. 50 Lakhs to be won by the best coders, this year’s event promises to scale bigger. TechGig Code Gladiators 2017 will see over 2 lakh top programmers code in over 52 languages. Contestants can code in any of the 52 major programming languages. But, of all the coders only the top 200 will make it to the Grand Finale Hackathon which will be held in Bangalore.</div><br></p>
<p style="color: white; margin-left: 40px;padding-right: 250px;text-align: justify;">3. Computers:<br>
<div style="color:white;margin-left: 60px;padding-right: 250px;text-align: justify;">New tool uses your smartphone camera to track your alertness at work<br>
Our level of alertness rises and falls over the course of a workday, sometimes causing our energy to drop and our minds to wander just as we need to perform important tasks. To help understand these patterns and improve productivity, researchers have developed a tool that tracks alertness by measuring pupil size, captured through a burst of photographs taken every time users unlock their smartphones.
</div><br></p>

<p style="color: turquoise; font-family: comic sans ms; font-size: 30px; margin-bottom: 0px; padding-left: 30px;">Know Your World</p>

<p style="color: white; margin-left: 40px;padding-right: 250px;text-align: justify;">1. General Knowledge :<br> 
  <div style="color:white;margin-left: 60px;padding-right: 250px;text-align: justify;">Ahmedabad: Industry wants MBAs with general knowledge<br>
  	With a dip in numbers of MBA graduates getting placed across the country, academic experts from Ahmedabad feel that one of the biggest reasons is that the curriculum of MBA colleges does not match with industry requirements. 

For BK School of Management, one of the oldest and prominent schools that provides full-time MBA programme, offering major-minor specialisation formula has indeed worked.
  </div><br></p>
<p style="color: white; margin-left: 40px;padding-right: 250px;text-align: justify;">2. Places:<br>
<div style="color:white;margin-left: 60px;padding-right: 250px;text-align: justify;">Amritsar train tragedy protesters turn violent
<br>
A protest organised by the relatives of the deceased victims and survivors of the Amritsar train tragedy turned violent on Sunday as the protesters pelted stones on police personnel when they were asked to leave. Two policemen and a mediaperson were severely injured while dozen of men in Khaki received minor injuries.

The situation at Jaura Phatak in Amritsar turned tense when police tried to pacify the protestors. Agitators clashed with cops at the accident site, following which police resorted to lathi charge to clear the railway tracks where they were staging their demonstration.</div><br></p>

<p style="color: white; margin-left: 40px;padding-right: 250px;text-align: justify;">3. History:<br>
<div style="color:white;margin-left: 60px;padding-right: 250px;text-align: justify;">Experts scramble to decipher mysterious inscription on ancient stone discovered in Mesopotamia<br>
The V&A has identified the inscription as Kufic, the oldest calligraphic form of Arabic. One of the earliest existing copies of the Quran is written in Kufic script. Mr De Novellis believes this would place the stone’s origins between the 7th and 12th century. 

While Mr De Novellis is currently appealing to the public for help translating the Kufic script, he believes the artefact was probably a talisman. In the medieval Middle East, certain crystal and semi-precious stones were deemed to have supernatural properties and the stone’s Kufic inscription is thought to match that of a similar talisman currently housed in the V&A, he said.</div><br></p>

<p style="color: white; margin-left: 40px;padding-right: 250px;text-align: justify;">4. Geography:<br>
<div style="color:white;margin-left: 60px;padding-right: 250px;text-align: justify;">Life on the floor of the Arctic Ocean, with rigor and in detail<br>

In an extensive and rigorous study of animal life on the Central Arctic Ocean floor, researchers have shown that water depth and food availability influence the species composition, density, and biomass of benthic communities.They found that, as predicted, total biomass fell as depth increased, consistent with a food input for animal life, and the rate of decline with depth was greater than in temperate oceans. Five different community types were identified, which differed in species composition and were dependent on depth, ranging from the shallow waters of the continental shelf, to the increasing depths of the continental slope, to the abyssal plain more than four kilometers deep. As seen in temperate waters, species diversity rose and then fell as depth increased.</div><br></p>
<p style="color: white; margin-left: 40px;padding-right: 250px;text-align: justify;">5. Politics:<br>
<div style="color:white;margin-left: 60px;padding-right: 250px;text-align: justify;">Goa Congress Seeks Appointment with Ailing Parrikar, Says BJP Taking ‘Undue Advantage’ of his Absence<br>
The Goa Congress on Sunday said it would seek an appointment with ailing Chief Minister Manohar Parrikar to apprise him of how BJP leaders and state bureaucrats were taking "advantage" of his absence from office.
Congress' Goa unit spokesperson Swati Kerkar said the chief minister's office and the BJP have been claiming that Parrikar's health was improving but appointments sought by her party had been denied on health grounds.
Parrikar is suffering from a pancreatic ailment and is currently being treated at his residence here after returning to the state on October 14 from the All India Institute of Medical Sciences.
"We want to bring to the Chief Minister's notice how his office and the party are taking undue advantage of his absence to threaten staffers whose family members are associated with the Congress," Kerkar said.
She alleged that the state administration had "collapsed" and bureaucrats were taking advantage of the situation as there was "no one" to hold them accountable.
"Today, if the Chief Ministers health is improving and he is clearing files and chairing meetings through video-conferencing, then the Congress delegation should be allowed to meet him," Kerkar said.</div></p>

<p style="color: turquoise; font-family: comic sans ms; font-size: 30px; margin-bottom: 0px; padding-left: 30px;">Sports</p>

<p style="color: white; margin-left: 40px;padding-right: 250px;text-align: justify;">1. Cricket:<br> 
  <div style="color:white;margin-left: 60px;padding-right: 250px;text-align: justify;">Virat Kohli's Staggering ODI Stats In 2018 Dwarf All Of His Rivals<br>
  Virat Kohli put on a batting exhibition on Sunday as India decimated the Windies by eight wickets in the first ODI at the Barsapara Cricket Stadium in Guwahati to take a 1-0 lead in the five-match series. Kohli and Rohit Sharma notched up big centuries as India made mince meat of the 323-run target set by the Windies. Thanks to the 246-run partnership for the second wicket, India crossed the finishing line in just 42.1 overs. Captain Kohli smashed his 36th ODI century, taking him closer to the 10,000-run mark in ODIs. Kohli's knock went on to further prove why he is regarded as the number one batsman in the world but his stats in 2018 make for an astounding reading.</div><br></p>

<p style="color: white; margin-left: 40px;padding-right: 250px;text-align: justify;">2. Football :<br>
<div style="color:white;margin-left: 60px;padding-right: 250px;text-align: justify;">'Good luck to Real Madrid and Barcelona in signing Neymar' - Marquinhos<br>
Barcelona and Real Madrid were wished the best of luck in luring Neymar from PSG by the striker's team-mate Marquinhos. 

Reports emerged in the Spanish press on Wednesday that both El Classico clubs were interested in signing the Brazilian, but Neymar dismissed them on social media as "fake news".

Barca head coach Ernesto Valverde refused to rule out the possibiltiy of him rejoining though, amid claims that a €222 million (£193m/$256m) fee would be required to secure the forward's signature.</div><br></p>
<p style="color: white; margin-left: 40px;padding-right: 250px;text-align: justify;">3. Tennis:<br>
<div style="color:white;margin-left: 60px;padding-right: 250px;text-align: justify;">Wimbledon To Introduce Final Set Tie-Breaks
<br>
Wimbledon will introduce tie-breaks in the final set of all events for the first time next year, but only once the score in the deciding set reaches 12-12, the All England Lawn Tennis Club (AELTC) announced on Friday. "Our view was that the time had come to introduce a tie-break method for matches that had not reached their natural conclusion at a reasonable point during the deciding set," said the club's chairman Philip Brook. A tie-break is normally played to decide the set when the score reaches 6-6. However, until now the US Open has been the only Grand Slam that uses a tie-break in the fifth set.</div><br></p>

<p style="color: white; margin-left: 40px;padding-right: 250px;text-align: justify;">4. Badminton :<br>
<div style="color:white;margin-left: 60px;padding-right: 250px;text-align: justify;">Denmark Open 2018: Saina Nehwal Loses To Tai Tzu Ying In Final<br>

Saina Nehwal continued her winless run against Chinese Taipei's Tai Tzu Ying as she lost 13-21, 21-13 and 6-21 in the Denmark Open final on Sunday. The match, which went into the decider, saw Nehwal being dominated by old rival Tai Tzu, whom she had last defeated in 2013. Since then, Tai Tzu has been victorious in the last 10 matches between the two. This year, world number 10 Saina has lost all her four matches against Tai Tzu, the last being the semi-final clash in the Asian Games in Jakarta in August.</div><br></p>
<p style="color: white; margin-left: 40px;padding-right: 250px;text-align: justify;">5. Olympics:<br>
<div style="color:white;margin-left: 60px;padding-right: 250px;text-align: justify;">PORTEÑOS RECOGNISED WITH OLYMPIC CUP<br>
The Olympic Cup was presented by IOC President Thomas Bach during a thank-you breakfast at the Hilton in Puerto Madero, and accepted by the city’s Deputy Mayor, Diego Santilli, on behalf of the people of Buenos Aires. “The Olympic Cup was created by our founder Pierre de Coubertin. This makes it one of the most traditional prizes in the Olympic world and it is given to organisations or communities that have made an outstanding contribution to the development of the Olympic sports and the Olympic Games,” said President Bach. “I think there can be no doubt that here, the Porteños, the people of Buenos Aires, have deserved this.”
</div></p>

</body>
</html>
