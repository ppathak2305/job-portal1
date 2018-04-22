<?php
session_start();
//require_once("db.php");
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database1";

//Create connection
$connect = new mysqli($servername , $username , $password , $dbname );

if($connect->connect_error){
    die("Connection Failed: " . $connect->connect_error);
}
if(isset($_POST)){
    	$firstname = mysqli_real_escape_string($connect, $_POST['first_name']);
        $lastname = mysqli_real_escape_string($connect, $_POST['last_name']);
        $username = mysqli_real_escape_string($connect, $_POST['user_name']);
        $email = mysqli_real_escape_string($connect, $_POST['email']);
        $contact = mysqli_real_escape_string($connect, $_POST['contact_no']);
        $password = mysqli_real_escape_string($connect, $_POST['password']);
    $sql = "INSERT into users(username, fname, lname ,contact ,email ,password ) values ('$username' , '$firstname' , '$lastname' ,'$contact' ,'$email' ,'$password'  )";

        if($connect->query($sql) == TRUE){
             $_SESSION['registerCompleted'] = true;
            // echo "done";
             header("Location: login1.php");
             exit();
        }
        else{
            echo "Error " . $sql . "<br>" . $connect->error;
        }
 }
   
else{
    header("location: register.php");
    exit();
}