<!DOCTYPE html>
<html>
<head>
  <title>Quizonn</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="shortcut icon" type="image/x-icon" href="icon1.png">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* style the container */
.container {
  position: relative;
  border-radius: 5px;
  padding: 20px 0 30px 0;
} 

/* style inputs and link buttons */
input,
.btn {
  width: 100%;
  padding: 12px;
  border: none;
  border-radius: 4px;
  margin: 5px 0;
  opacity: 0.85;
  display: inline-block;
  font-size: 17px;
  line-height: 20px;
  text-decoration: none; /* remove underline from anchors */
}
.btn1 {
  border: none;
  border-radius: 4px;
  margin: 5px 0;
  opacity: 0.85;
  display: block;
  padding:14px 20px;
  font-size: 17px;
  line-height: 20px;
  text-decoration: none; 
}
input:hover,
.btn:hover {
  opacity: 1;
}
input:hover,
.btn1:hover {
  opacity: 1;
}


/* add appropriate colors to fb, twitter and google buttons */
.fb {
  background-color: #3B5998;
  color: white;
}

.twitter {
  background-color: #55ACEE;
  color: white;
}

.google {
  background-color: #dd4b39;
  color: white;
}

/* style the submit button */
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Two-column layout */
.col {
  /*float: left;*/
  width: 40%;
  margin: auto;
  padding: 0 50px;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* vertical line */
.vl {
  position: absolute;
  left: 50%;
  transform: translate(-50%);
  border: 2px solid #ddd;
  height: 175px;
}

/* text inside the vertical line */
.vl-innertext {
  position: absolute;
  top: 50%;
  transform: translate(-50%, -50%);
  background-color: #f1f1f1;
  border: 1px solid #ccc;
  border-radius: 50%;
  padding: 8px 10px;
}

/* hide some text on medium and large screens */
.hide-md-lg {
  display: none;
}

/* bottom container */
.bottom-container {
  text-align: center;
  border-radius: 0px 0px 4px 4px;

}

/* Responsive layout - when the screen is less than 650px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 650px) {
  .col {
    width: 100%;
    margin-top: 0;
  }
  /* hide the vertical line */
  .vl {
    display: none;
  }
  /* show the hidden text on small screens */
  .hide-md-lg {
    display: block;
    text-align: center;
  }
}
</style>
</head>
<body style="background-image: url(gamer.jpg); background-size: cover;">


<div class="container">
  <form action="/action_page.php">
    <div class="row">
      <p style="text-align:center; color: #2471a3; font-style: italic; font-family: viner hand itc; font-size: 40px">QuizOnn</p>
<!--
      <div class="vl">
        <span class="vl-innertext">or</span>
      </div>

      <div class="col">
        <a href="https://www.facebook.com/" class="fb btn">
          <i class="fa fa-facebook fa-fw"></i> Login with Facebook
         </a>
        <a href="https://twitter.com/login?lang=en" class="twitter btn">
          <i class="fa fa-twitter fa-fw"></i> Login with Twitter
        </a>
        <a href="https://aboutme.google.com/u/0/?referer=gplus" class="google btn"><i class="fa fa-google fa-fw">
          </i> Login with Google+
        </a>
      </div>
-->
      <div class="col" style="align-self: center;">
       <!-- <div class="hide-md-lg">
          <p>Or sign in manually:</p>
        </div>-->

        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <a href="1st page.html" style="color:white;width:100%;background-color: #2471a3;text-align: center" class="btn1">Login</a>
      </div>
      
    </div>
  </form>
</div>

<div class="bottom-container">
  <div class="row">
    <div class="col">
      <!--<a href="#" style="color:white;width:100%;background-color: #4CAF50;" class="btn1">Sign up</a>-->
      <a href="sign_up.html" style="color:white;width:100%;background-color: #34495e;" class="btn1">Sign up</a>
    </div>
    <!--
    <div class="col">
      <a href="https://www.google.com/" style="color:white;width:100%;background-color: #f44338" class="btn1">Forgot password?</a>
    </div>
  -->
  </div>
</div>

</body>
</html>
