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

    $sql = "DELETE FROM jobposts WHERE id_jobpost='$_GET[id]' AND id_company='$_SESSION[id]'";

        if($connect->query($sql) == TRUE){
             $_SESSION['jobDeleted'] = true;
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