<?php
session_start();
if(empty($_SESSION['userid'])) {
    header("Location: ../index_dbms.php");
    exit();
}
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

    $sql="SELECT * FROM jobposts WHERE id_jobpost='$_GET[id]'";
     $result=$connect->query($sql);
    // echo "id_jobpost=" . $_GET['id'];

    if($result->num_rows >0){
        $row=$result->fetch_assoc();
        $id_company=$row['id_company'];
        //echo "company found=" . $id_company;
    }
    $sql1 = "SELECT * FROM applied_jobs WHERE id_user='$_SESSION[userid]' AND id_jobpost='$row[id_jobpost]'";
    $result1 = $connect->query($sql1);
    if($result1->num_rows == 0) {  
    	
        $sql2 = "INSERT into applied_jobs(id_jobpost, id_company, id_user) values ('$_GET[id]', '$id_company', '$_SESSION[userid]' )";

            if($connect->query($sql2) == TRUE){
                 $_SESSION['jobApplied'] = true;
                // echo "done";
                header("Location: dashboard.php");
                 exit();
            }
            else{
                echo "Error " . $sql . "<br>" . $connect->error;
            }
            $connect->close();
    }
    else{
        //echo "here";
    header("Location: dashboard.php");
    exit();
    }
 }
   
else{
    header("Location: dashboard.php");
    exit();
}