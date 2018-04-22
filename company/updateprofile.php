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
        //$email = mysqli_real_escape_string($connect, $_POST['email']);
        $contact = mysqli_real_escape_string($connect, $_POST['contact_no']);
        //$password = mysqli_real_escape_string($connect, $_POST['password']);
        $address = mysqli_real_escape_string($connect, $_POST['address']);
        $size = mysqli_real_escape_string($connect, $_POST['size']);
        $jobfunction = mysqli_real_escape_string($connect, $_POST['jobfunction']);
        $website = mysqli_real_escape_string($connect, $_POST['website']);

        $sql="UPDATE company_details SET firstname='$firstname',lastname='$lastname',contact_no='$contact',address='$address',size='$size',job_function='$jobfunction',website='$website' WHERE id_company='$_SESSION[id]'"; 
        if($connect->query($sql) === TRUE){
             
            // echo "done";
             header("Location: company_dashboard.php");
             exit();
        }
        else{
            echo "Error " . $sql . "<br>" . $connect->error;
        }



        }

   
else{
    header("location: company_dashboard.php");
    exit();
}