<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

button:hover {
    opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  width: 20%;
}

/* Add padding to container elements */
.container {
    padding: 16px;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}
</style>

<body bgcolor="#000d1a">

<form method="post" action="login.php">
  <div class="container">
    <h1 style="color: green; font-family: viner hand itc;">Sign Up</h1>
    <p style="color: white;">Please fill in this form to create an account.</p>
    <hr noshade="none" width="60%" align="left">
    <br>

    <label for="user"><b style="color: yellow">Username</b></label>
    <input type="text" placeholder="Enter Username" name="user" style="width: 50%; display: block;" required><br>

    <label for="email"><b style="color: yellow">Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" style="width: 50%; display: block;" required><br>

    <label for="psw"><b style="color: yellow">Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" style="width: 50%; display: block;" required><br>

    <label for="psw-repeat"><b style="color: yellow">Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" style="width: 50%; display: block;" required><br>
    
    <p style="color: white;">By creating an account you agree to our <a href="https://policies.google.com/terms?hl=en&gl=ZZ" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
        <pre>
    <button type="button" class="cancelbtn" onclick="index()">Cancel</button>          <button type="submit" name="submit" value="submit" class="signupbtn" onClick="index()">Sign Up</button>
        </pre>
    </div>


  </div>

</form>
<script type="text/javascript">
    function index() {
        window.location.href="log.php";
    
    }
</script>

</body>
</html>
