<?php
//To Handle Session Variables on This Page
session_start();

//Including Database Connection From db.php file to avoid rewriting in all files
require_once("db.php");
if(isset($_POST)){
    $email = mysqli_real_escape_string($connect, $_POST['name1']);
	$password = mysqli_real_escape_string($connect, $_POST['pass']);
	//echo "email=" . $email;
	//echo "pass=" . $pass;
	//$pass=base64_encode(strrev(md5($pass))); 
	$sql = "SELECT id_company,firstname,lastname, companyname, email, activation FROM company_details WHERE email='$email' AND password='$password'";
	$result = $connect->query($sql);

	if($result->num_rows >0){
		//echo "row passed";
       $_SESSION['inloop'] = "false";
	while($row=$result->fetch_assoc())
	{
        if($row['activation']== '2'){
            $_SESSION['companyLoginError']= "Account verification is still pending";
            header("Location:company-login.php");
            exit();
        }
        else if($row['activation']== '0'){
            $_SESSION['companyLoginError']= "Your account request has been rejected , please contact admin";
            header("Location:company-login.php");
            exit();
        }
        else if($row['activation']== '1'){
		$_SESSION['name']=$row['firstname'] . " " . $row['lastname'];
		$_SESSION['email']=$row['email'];
        $_SESSION['id_user']=$row['id_company'];
        $_SESSION['companyLogged'] = true;
		//echo "found";
		header("Location: company-dashboard.php");
		exit();
	}
	}
	} else {
 		//if no matching record found in user table then redirect them back to login page
 		$_SESSION['loginError'] = $connect->error;
       //  $_SESSION['inloop'] = "true";
 		header("Location: company-login.php");
		exit();
 	}
 	//Close database connection. Not compulsory but good practice.
 	$connect->close();
} else {
	//redirect them back to login page if they didn't click login button
	header("Location: company-login.php");
	exit();
}