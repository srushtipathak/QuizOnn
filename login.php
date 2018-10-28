<?php
$connection = mysqli_connect("localhost", "root", "","quizonn"); // Establishing Connection with Server
 // $db = mysqli_select_db("quizonn", $connection); // Selecting Database from Server
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$rpass=$_POST['psw-repeat'];
$name = $_POST['user'];
$email = $_POST['psw'];
$a=strcmp($rpass,$email);
if($a==0){
if($connection==true){
	//echo "established";
	$sql = "INSERT INTO acc VALUES ('$name', '$email', 0, 0, 0, 0, 0, 0, 0, 0)";
	if (mysqli_query($connection,$sql)){
		//echo "inserted";
		header('Location: log.php');

	}
	else{
		echo "error";
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
}
else
{
	header('Location: sign_up.php');

}
}
?>
