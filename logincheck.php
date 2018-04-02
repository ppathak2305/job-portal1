<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database1";

$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

if(isset($_POST)){
	$email=$_POST['name1'];
	$pass=$_POST['pass'];

	//echo "email=" . $email;
	//echo "pass=" . $pass;
	//$pass=base64_encode(strrev(md5($pass))); 
	$sql="SELECT fname,lname,contact,username FROM users WHERE username='$email' AND password='$pass'";
	$result=$conn->query($sql);
	//echo "hey";
	//var_dump($result);

	if($result->num_rows >0){
		//echo "row passed";
	while($row=$result->fetch_assoc())
	{
		$_SESSION['name']=$row['fname'] . " " . $row['lname'];
		$_SESSION['email']=$row['username'];
		//echo "found";
		header("Location: user/dashboard.php");
		exit();
	}
	}
	else
	{
		$_SESSION['loginFailed']=true;
		header("Location: login.php");
		exit();
	}
	$conn->close();
}else
{
	header("Location: login.php");
	exit();
}
?>