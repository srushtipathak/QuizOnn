<?php
$connection = mysqli_connect("localhost", "root", "","quizonn"); // Establishing Connection with Server
 // $db = mysqli_select_db("quizonn", $connection); // Selecting Database from Server
//if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$name = $_POST['username'];
$email = $_POST['password'];
if($connection==true){
	//echo "established";
	$sql = "SELECT psw FROM acc WHERE uname LIKE '{$name}' and psw LIKE '{$email}'";
	$result=mysqli_query($connection,$sql);
	if (mysqli_num_rows($result)!=1){
		//echo "<script>alert('Failure!');</script>";
		header('Location: log.php');
	}
	else{
		session_start();
		header('Location: 1st page.php');
		$_SESSION["n"] = "$name";
	}
}
else{
	echo "not connected";
}

//Insert Query of SQL
/*$query = mysql_query("insert into acc(uname, psw) values ('$name', '$psw')");
echo "<br/><br/><span>Data Inserted successfully...!!</span>";
*/
mysqli_close($connection); // Closing Connection with Server
/*}
else{
	echo "tatti";
}*/
?>
