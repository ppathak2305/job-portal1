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
        //$username = mysqli_real_escape_string($connect, $_POST['user_name']);
        $email = mysqli_real_escape_string($connect, $_POST['email']);
        $contact = mysqli_real_escape_string($connect, $_POST['contact_no']);
        //$password = mysqli_real_escape_string($connect, $_POST['password']);
        $address = mysqli_real_escape_string($connect, $_POST['address']);
        $city = mysqli_real_escape_string($connect, $_POST['city']);
        $state = mysqli_real_escape_string($connect, $_POST['state']);
        $qualification = mysqli_real_escape_string($connect, $_POST['qualification']);
        $stream = mysqli_real_escape_string($connect, $_POST['stream']);
        $dob = mysqli_real_escape_string($connect, $_POST['dob']);
        $designation = mysqli_real_escape_string($connect, $_POST['designation']);

        $sql="UPDATE users SET fname='$firstname',lname='$lastname',email='$email',contact='$contact',address='$address',city='$city',state='$state',qualification='$qualification',stream='$stream',dob='$dob',designation='$designation' WHERE id='$_SESSION[userid]'"; 
        if($connect->query($sql) === TRUE){
             
            // echo "done";
             header("Location: dashboard.php");
             exit();
        }
        else{
            echo "Error " . $sql . "<br>" . $connect->error;
        }



        }

   
else{
    header("location: dashboard.php");
    exit();
}