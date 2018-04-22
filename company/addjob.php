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
    	$jobtitle = mysqli_real_escape_string($connect, $_POST['jobtitle']);
        $desc = mysqli_real_escape_string($connect, $_POST['description']);
        $minsal = mysqli_real_escape_string($connect, $_POST['minsalary']);
        $maxsal = mysqli_real_escape_string($connect, $_POST['maxsalary']);
        $experience = mysqli_real_escape_string($connect, $_POST['experience']);
        $qualification = mysqli_real_escape_string($connect, $_POST['qualification']);
    $sql = "INSERT into jobposts(id_company, jobtitle, description, minsalary, maxsalary, experience, qualification) values ('$_SESSION[id]' , '$jobtitle' , '$desc' ,'$minsal' ,'$maxsal' ,'$experience', '$qualification' )";

        if($connect->query($sql) == TRUE){
             $_SESSION['jobAdded'] = true;
            // echo "done";
             header("Location: company_dashboard.php");
             exit();
        }
        else{
            echo "Error " . $sql . "<br>" . $connect->error;
        }
 }
   
else{
    header("Location: company_dashboard.php");
    exit();
}