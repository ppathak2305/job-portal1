<?php
//To Handle Session Variables on This Page
session_start();

//Including Database Connection From db.php file to avoid rewriting in all files
require_once("db.php");
if(isset($_POST)){
    $usr = mysqli_real_escape_string($connect, $_POST['name1']);
	$password = mysqli_real_escape_string($connect, $_POST['pass']);
	//echo "email=" . $email;
	//echo "pass=" . $pass;
	//$pass=base64_encode(strrev(md5($pass))); 
	$sql="SELECT firstname,lastname,contact,username,activation FROM users WHERE username='$usr' AND password='$password'";
	$result=$connect->query($sql);
	if($result->num_rows >0){
		//echo "row passed";
	while($row=$result->fetch_assoc())
	{
        if($row['activation']== '2'){
            $_SESSION['userLoginError']= "Account verification is still pending";
            header("Location:login1.php");
            exit();
        }
        else if($row['activation']== '0'){
            $_SESSION['userLoginError']= "Your account request has been rejected , please contact admin";
            header("Location:login1.php");
            exit();
        }
        else if($row['activation']== '1'){
		$_SESSION['name']=$row['firstname'] . " " . $row['lastname'];
		$_SESSION['email']=$row['email'];
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