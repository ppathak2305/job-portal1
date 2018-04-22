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
    $sql = "UPDATE jobposts SET jobtitle='$jobtitle', description='$desc', minsalary='$minsal', maxsalary='$maxsal', experience='$experience', qualification='$qualification' WHERE id_jobpost='$_POST[target_id]'";

        if($connect->query($sql) == TRUE){
             $_SESSION['jobUpdated'] = true;
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