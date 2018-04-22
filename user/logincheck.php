<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database1";

//Create connection
$conn = new mysqli($servername , $username , $password , $dbname );

if($conn->connect_error){
    die("Connection Failed: " . $conn->connect_error);
}
if(isset($_POST)){
	$email=$_POST['name1'];
	$pass=$_POST['pass'];

	//echo "email=" . $email;
	//echo "pass=" . $pass;
	//$pass=base64_encode(strrev(md5($pass))); 
	$sql="SELECT id,fname,lname,contact,username,activation FROM users WHERE username='$email' AND password='$pass'";
	$result=$conn->query($sql);
	//echo "hey";
	//var_dump($result);

	if($result->num_rows >0){
		//echo "row passed";
	while($row=$result->fetch_assoc())
	{
		if($row['activation']== '2'){
            $_SESSION['companyLoginError']= "Account verification is still pending";
            header("Location: login1.php");
            exit();
        }
        else if($row['activation']== '0'){
            $_SESSION['companyLoginError']= "Your account request has been rejected , please contact admin";
            header("Location: login1.php");
            exit();
        }
        else if($row['activation']== '1')
	{
		$_SESSION['name']=$row['firstname'] . " " . $row['lastname'];
		$_SESSION['email']=$row['username'];
		$_SESSION['userid']=$row['id'];
		//echo "found";
		header("Location: dashboard.php");
		exit();
	}
	}
}
	else
	{
		$_SESSION['loginFailed']=true;
		header("Location: login1.php");
		exit();
	}
	$conn->close();
}else
{
	header("Location: login1.php");
	exit();
}
?>