<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database1";

$a=$_POST['fname'];
$b=$_POST['lname'];
$c=$_POST['phone'];
$d=$_POST['email'];
$e=$_POST['password'];

//$e=base64_encode(strrev(md5($e)));

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO users(fname,lname,contact,username,password)
VALUE ('$a','$b','$c','$d','$e')";

if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
    $_SESSION['registerComplete']=TRUE;
    header("Location: login.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
$_SESSION['registerIncomplete']=TRUE;
header("Location: register.php");
exit();
?>
